<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Detect;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DetectController extends Controller
{
    public function ReadLater(Request $request, int $monument_id): JsonResponse
    {
        $user = $request->user();

        $Read_Later = Detect::where('user_id', $user->id)
                             ->where('monument_id', $monument_id)
                             ->first();

        if ($Read_Later) {

            Detect::where('user_id', $user->id)
                ->where('monument_id', $monument_id)
                ->delete();

            return response()->json([
                'message' => 'removed from read later',
            ], 200);
        }
        else {
            $Read_Later = new Detect();
            $Read_Later->user_id = $user->id;
            $Read_Later->monument_id = $monument_id;

            $Read_Later->ReadLater = true;



            if ($Read_Later->save()) {
                return response()->json([
                    'message'=>'saved to read later Successfully',
                    'ReadLater'=>$Read_Later
                ],201);
            }else{
                return response()->json([
                    'message'=>'some error occurred, please try again'
                ], 500);
            }
        }
    }


    public function ViewReadLater(): JsonResponse
    {
        $user = Auth::user();
        Log::info('User ID: ' . $user->id);

        $Read_Later = $user->ReadLater()->where('ReadLater', true)->get();

        Log::info('Read Later : ', $Read_Later->toArray());
        return response()->json($Read_Later, 200);
    }
}
