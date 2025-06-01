<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname'=>'required|min:1',
            'username'=>'required|min:1',
            'phone'=>'required|unique:users,phone|numeric',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:8',
            'type'=>'required|in:1,2',
            'condition'=>'required'

        ];
    }
}
