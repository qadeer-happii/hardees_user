<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CunstomerRequest extends FormRequest
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
            'email' => 'required|unique:customers|max:255',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
        ];
    }

    public function messages()
    {
        return [
            'password_confirmation.same' => 'Confirm Password Should match the Password',
        ];
    }
}
