<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>['required','email','exists:users'],
            'otp'=>['required','max:6'],
            'password'=>['required','string','min:8'],
        ];
    }
}
