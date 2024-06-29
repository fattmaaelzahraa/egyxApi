<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FilterRequest;
use App\Models\Place;
use App\Models\Plan;
use App\Models\Visit;
use App\Models\Wish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public function CreateTravelPlan(Request $request): JsonResponse
    {
        $validateData = Validator::make($request->all(), [
            'trip_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'duration' => 'required|integer|min:1|max:5',
            'themes' => 'required|array',
            'cities' => 'required|array'
        ]);

        if ($validateData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validateData->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();
            $user = $request->user();
            if (!$user) {
                return response()->json([
                    'message' => 'User not authenticated'
                ], 401);
            }

            $startDate = Carbon::parse($request->start_date);
            $endDate = $startDate->copy()->addDays($request->duration - 1);

            $trip = Plan::create([
                'user_id' => $user->id,
                'trip_name' => $request->trip_name,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'duration' => $request->duration,
                'themes' => json_encode($request->themes),
                'cities' => json_encode($request->cities)
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Travel plan created successfully',
                'trip' => $trip,
            ], 201);
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            Log::error('Error in Create a Travel Plan: ' . $e->getMessage());
            return response()->json([
                'message' => 'An error occurred while processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }



    public function getFilteredPlacesForPlan($plan_id): JsonResponse
    {
        try {

            $plan = Plan::findOrFail($plan_id);
            $themes = [];
            $cities = [];
            if (!empty($plan->themes)) {
                $themes = is_array($plan->themes) ? $plan->themes : json_decode($plan->themes, true);
            }
            if (!empty($plan->cities)) {
                $cities = is_array($plan->cities) ? $plan->cities : json_decode($plan->cities, true);
            }
            $placesQuery = Place::query();
            if (!empty($themes)) {
                $placesQuery->where(function ($query) use ($themes) {
                    foreach ($themes as $theme) {
                        $query->orWhere('theme', 'LIKE', '%' . $theme . '%');
                    }
                });
            }

            if (!empty($cities)) {
                $placesQuery->whereIn('city', $cities);
            }

            $places = $placesQuery->get();
            $places->each(function ($place) {
                $place->image_url = $place->image_url;
            });

            return response()->json([
                'places' => $places
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error fetching filtered places',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function SelectPlacesForTrip(Request $request, $plan_id): JsonResponse
    {
        $validateData = Validator::make($request->all(), [
            'places' => 'required|array',
            'places.*' => 'exists:places,id'
        ]);

        if ($validateData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validateData->errors()
            ], 422);
        }

        try {
            DB::beginTransaction();
            $user = $request->user();
            if (!$user) {
                return response()->json([
                    'message' => 'User not authenticated'
                ], 401);
            }
            $trip = Plan::where('user_id', $user->id)->findOrFail($plan_id);
            $selectedPlaces = Place::whereIn('id', $request->input('places'))->get();

            $placesCount = count($selectedPlaces);
            $daysCount = $trip->duration;

            $placesPerDay = ceil($placesCount / $daysCount);

            $placesByDate = [];

            $currentDate = Carbon::parse($trip->start_date);
            $startIndex = 0;

            for ($day = 1; $day <= $daysCount; $day++) {
                $endIndex = min($startIndex + $placesPerDay, $placesCount);

                $placesForDay = $selectedPlaces->slice($startIndex, $endIndex - $startIndex)->pluck('id')->toArray();

                $placesByDate[$currentDate->toDateString()] = $placesForDay;

                $startIndex = $endIndex;
                $currentDate->addDay();
            }

            $trip->trip = json_encode($placesByDate);
            $trip->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Places selected for the trip successfully',
                'trip' => $trip,
                'places_by_date' => $placesByDate
            ], 200);
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            Log::error('Error in Select Places For Trip: ' . $e->getMessage());
            return response()->json([
                'message' => 'An error occurred while processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getUserWishlist(Request $request): JsonResponse
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        $wishlist = Wish::where('user_id', $user->id)
            ->with('plan')
            ->get();
        return response()->json([
            'status' => true,
            'wishlist' => $wishlist
        ]);
    }
}
