<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ResetPasswordRequest;
use Ichtrojan\Otp\Otp;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ForgetPasswordRequest;
use App\Notifications\ResetPasswordVerificationNotification;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    private $otp;

    public function __construct()
    {
        $this->otp = new Otp;
    }

    public function passwordReset(ResetPasswordRequest $request): JsonResponse
    {
        $otp2 = $this->otp->validate($request->email, $request->otp);
            if(!$otp2->status){
                return response()->json(['error' => $otp2], 401);
            }
            $user = User::where('email', $request->email)->first();
            $user->update(['password'=> Hash::make($request->password)]);
            $user->tokens()->delete();
            $success['success'] = true;
            return response()->json($success, 200);


    }

}
