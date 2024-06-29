<?php

namespace App\Http\Controllers\Api;

use Ichtrojan\Otp\Otp;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ForgetPasswordRequest;
use App\Notifications\ResetPasswordVerificationNotification;

class ForgetPasswordController extends Controller
{

    public function forgotPassword(ForgetPasswordRequest $request): JsonResponse
    {
        $input = $request->only('email');
        $user = User::where('email', $input)->first();
        $user->notify(new ResetPasswordVerificationNotification());
        $success['success'] = true;
        return response()->json([$success, 200]);

}
}
