<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AiPlanFilter;
use App\Models\FilterRequest;
use App\Models\Place;
use App\Models\Plan;
use App\Models\Wish;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{
    public function select(): JsonResponse
    {
        $themes = [
            "Historical", "Pharaoh", "Islamic", "Christian", "Sightseeing",
            "Museum", "Musical", "Amusement", "Zoo", "Religious", "Shopping",
            "Resort", "Educational", "Art", "Greek", "Roman", "Sports", "Jewish",
            "Picnic", "Theme park", "Aquarium"
        ];

        $cities = [
            "Cairo", "Luxor", "Giza", "Faiyum", "Marsa Alam", "Sharm El Sheikh",
            "Aswan", "Saqqara", "Abu Rawash", "Kom Ombo", "Kharga Oasis", "Sohag",
            "Bahariya Oasis", "Alexandria", "Mersa Matruh", "Wadi El Natrun",
            "Abydos, Egypt", "Red Sea", "El Alamein", "Minya, Egypt", "Beni Suef",
            "Nile River", "Asyut", "Damietta", "Dahshur", "Ismailia",
            "Farafra, Egypt", "Qena", "Desouk", "Near Hurghada", "Edfu", "Hurghada",
            "New Valley Governorate", "Eastern Desert", "Port Said", "Nuweiba",
            "6th of October", "Nile Delta region", "Suez", "Near Lake Nasser"
        ];

        return response()->json([
            'themes' => $themes,
            'cities' => $cities
        ]);
    }




    public function FilterRequest(Request $request): JsonResponse
    {
        $themes = $request->input('themes', []);
        $cities = $request->input('cities', []);

        if (empty($themes) && empty($cities)) {
            return response()->json([
                'error' => 'Please select at least one theme or city.'
            ], 400);
        }

        $filterRequest = FilterRequest::create([
            'themes' => $themes,
            'cities' => $cities,
        ]);

        return response()->json([
            'message' => 'your request stored successfully',
            'filter_request_id' => $filterRequest->id,
        ]);
    }

    public function getFilteredPlaces($id): JsonResponse
    {
        $filterRequest = FilterRequest::findOrFail($id);
        $places = Place::query();
        if (!empty($filterRequest->themes)) {
            $places->where(function ($query) use ($filterRequest) {
                foreach ($filterRequest->themes as $theme) {
                    $query->orWhere('theme', 'LIKE', '%' . $theme . '%');
                }
            });
        }
        if (!empty($filterRequest->cities)) {
            $places->whereIn('city', $filterRequest->cities);
        }
        $places = $places->get();
        $places->each(function ($place) {
            $place->image_url = $place->image_url;
        });

        return response()->json([
            'places' => $places
        ]);
    }


    public function show($id): JsonResponse
    {
        $place = Place::findOrFail($id);
        $place->image_url = $place->image_url;

        return response()->json([
            'place' => $place
        ]);
    }

    public function ViewAllPlaces(): JsonResponse
    {
        $places = Place::get();
        foreach ($places as $place) {
            $place->image_url = $place->image_url;
        }
        return response()->json([
            'places' => $places
        ]);
    }

//-------------ai plan-------------------


    public function AiPlan(): JsonResponse
    {
        $themes = [
            "Historical", "Pharaoh", "Islamic", "Christian", "Sightseeing",
            "Museum", "Musical", "Amusement", "Zoo", "Religious", "Shopping",
            "Resort", "Educational", "Art", "Greek", "Roman", "Sports",
            "Jewish", "Picnic", "Theme park", "Aquarium"
        ];

        $cities = [
            "Cairo", "Luxor", "Giza", "Faiyum", "Marsa Alam", "Sharm El Sheikh",
            "Aswan", "Saqqara", "Abu Rawash", "Kom Ombo", "Kharga Oasis",
            "Sohag", "Bahariya Oasis", "Alexandria", "Mersa Matruh", "Wadi El Natrun",
            "Abydos, Egypt", "Red Sea", "El Alamein", "Minya, Egypt", "Beni Suef",
            "Nile River", "Asyut", "Damietta", "Dahshur", "Ismailia",
            "Farafra, Egypt", "Qena", "Desouk", "Near Hurghada", "Edfu",
            "Hurghada", "New Valley Governorate", "Eastern Desert", "Port Said",
            "Nuweiba", "6th of October", "Nile Delta region", "Suez", "Near Lake Nasser"
        ];

        return response()->json([
            'themes' => $themes,
            'cities' => $cities
        ]);
    }


    public function FilterRequestForAiPlan(Request $request): JsonResponse
    {
        $themes = $request->input('themes', []);
        $cities = $request->input('cities', []);

        $duration = $request->input('duration');
        if (!is_numeric($duration) || $duration <= 0) {
            return response()->json([
                'error' => 'Invalid duration provided.'
            ], 400);
        }

        if (empty($themes) && empty($cities)) {
            return response()->json([
                'error' => 'Please select at least one theme or city.'
            ], 400);
        }

        $filterRequest = AiPlanFilter::create([
            'themes' => $themes,
            'cities' => $cities,
            'duration'=>$duration
        ]);

        return response()->json([
            'message' => 'Your request stored successfully',
            'filter_request_id' => $filterRequest->id,
        ]);
    }




    public function getAiPlan($id): JsonResponse
    {
        try {
            $filterRequest = AiPlanFilter::findOrFail($id);

            $placesQuery = Place::query();

            if (!empty($filterRequest->themes)) {
                $placesQuery->where(function ($query) use ($filterRequest) {
                    foreach ($filterRequest->themes as $theme) {
                        $query->orWhere('theme', 'LIKE', '%' . $theme . '%');
                    }
                });
            }

            if (!empty($filterRequest->cities)) {
                $placesQuery->whereIn('city', $filterRequest->cities);
            }

            $filteredPlaces = $placesQuery->get();

            $placesPerDay = 3;
            $placesByDay = [];
            $day = 1;
            $startIndex = 0;
            $placesCount = $filteredPlaces->count();
            $duration = $filterRequest->duration;

            for ($i = 0; $i < $duration; $i++) {
                $endIndex = min($startIndex + $placesPerDay, $placesCount);
                $placesForDay = $filteredPlaces->slice($startIndex, $endIndex - $startIndex);

                $placesByDay["Day $day"] = $placesForDay->map(function ($place) {
                    return [
                        'id' => $place->id,
                        'name' => $place->Place_name,
                        'description' => $place->description,
                        'image_url' => $place->image_url,
                    ];
                })->toArray();

                $startIndex = $endIndex;
                $day++;
            }

            $plan = new Plan();
            $plan->user_id = Auth::id();
            $plan->duration = $duration;
            $plan->trip = json_encode($placesByDay);
            $plan->cities = json_encode($filterRequest->cities);
            $plan->themes = json_encode($filterRequest->themes);
            $plan->save();

            if (!$plan->id) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create plan.'
                ], 500);
            }

            return response()->json([
                'status' => true,
                'message' => 'Plan created successfully!',
                'plan' => $plan,
                'places_by_day' => $placesByDay
            ], 201);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'Filter request not found.',
                'error' => $e->getMessage()
            ], 404);
        }
    }







    public function addToWishlist(Request $request, $plan_id): JsonResponse
    {
        try {
            $user = Auth::user();
            $plan = Plan::findOrFail($plan_id);

            if ($plan->user_id !== $user->id) {
                return response()->json([
                    'message' => 'You are not authorized to add this plan to the wishlist.'
                ], 403);
            }
            $existingWish = Wish::where('user_id', $user->id)
                                ->where('plan_id', $plan_id)
                                ->first();
            if ($existingWish) {
                $existingWish->delete();

                return response()->json([
                    'message' => 'Plan removed from the wishlist.'
                ], 400);
            }
            $wish = new Wish();
            $wish->user_id = $user->id;
            $wish->plan_id = $plan_id;
            $wish->save();
            return response()->json([
                'message' => 'Plan added to wishlist successfully.',
                'wish' => $wish
            ], 201);
        }
        catch (\Exception $e)
        {
            return response()->json([
                'message' => 'Failed to add plan to wishlist.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
