<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'unique:users',
                'max:25',
            ],
            'fullname' => [
                'required',
                'max:25',
            ],
            'password' => [
                'required',
                'min:7',
                'regex:[A-Z]',
                'regex:[a-z]',
            ],
        ];
    }
}
