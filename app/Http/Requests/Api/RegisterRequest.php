<?php

namespace App\Http\Requests\Api;

class RegisterRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'bail|required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ];
    }
}
