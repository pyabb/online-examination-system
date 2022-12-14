<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'course' => ['required'],
            'theme' => ['required'],
            'description' => ['nullable'],
            'questions' => ['required', 'digits_between:1,3'],
            'score' => ['required', 'digits_between:1,3'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'init_hour' => ['required', 'date_format:h:i a'],
            'time' => ['required', 'digits_between:1,3']
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'init_hour.required' => 'The initial hour field is required',
            'init_hour.date_format' => 'The initial hour field does not match the format 00:00 am or 00:00 pm',
        ];
    }
}
