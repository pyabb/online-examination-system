<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePostRequest extends FormRequest
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
            'email' => ['required', 'max:255'],
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'country' => ['required', 'max: 50'],
            'state' => ['nullable', 'max: 50'],
            'city' => ['nullable', 'max: 50'],
            'documentType' => ['required', 'max:15'],
            'document' => ['required', 'digits_between:8,15'],
            'phone' => ['required', 'max:255'],
            'aboutHimself' => ['nullable', 'max:255'],
            'address1' => ['nullable', 'max:255'],
            'address2' => ['nullable', 'max:255'],
            'studentCode' => ['nullable'],
        ];
    }
}
