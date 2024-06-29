<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class VisitController extends Controller
{

    public function store(Request $request, int $place_id): JsonResponse
    {

        $user = $request->user();

        $like = Visit::where('user_id', $user->id)
                      ->where('place_id',$place_id)
                      ->first();

        if ($like) {

            Visit::where('user_id', $user->id)
                 ->where('place_id',$place_id)
                 ->delete();

            return response()->json([
                'message' => 'Removed from Favourites',
            ], 200);
        }
        else {
            $like = new Visit();
            $like->user_id = $user->id;
            $like->place_id = $place_id;

            $like->favourite = true;



            if ($like->save()) {
                return response()->json([
                    'message'=>'Added to Favourites',
                    'like'=>$like
                ],201);
            }else{
                return response()->json([
                    'message'=>'some error occurred, please try again'
                ], 500);
            }
        }
    }





    public function LikedPlaces(): JsonResponse
    {
        $user = Auth::user();
        \Log::info('User ID: ' . $user->id);

        $likedPlaces = $user->likedPlaces()->where('favourite', true)->get();

        \Log::info('Liked Places: ', $likedPlaces->toArray());
        return response()->json($likedPlaces, 200);
    }





    public function rate(Request $request, int $place_id): JsonResponse
    {

        $request->validate([
            'rate' => 'required|numeric|min:0|max:10',
        ]);
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        $visit = DB::table('visits')
            ->where('user_id', $user->id)
            ->where('place_id', $place_id)
            ->first();


        if ($visit) {

            DB::table('visits')
                ->where('user_id', $user->id)
                ->where('place_id', $place_id)
                ->update(['rate' => $request->rate]);

            return response()->json([
                'message' => 'Your rating has been updated'
            ], 200);
        } else {

            DB::table('visits')->insert([
                'user_id' => $user->id,
                'place_id' => $place_id,
                'rate' => $request->rate
            ]);

            return response()->json([
                'message' => 'You rated the place'
            ], 201);
        }
        }
    }

