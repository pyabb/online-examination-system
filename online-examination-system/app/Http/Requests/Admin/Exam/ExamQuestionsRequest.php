<?php

namespace App\Http\Requests\Admin\Exam;

use Illuminate\Foundation\Http\FormRequest;

class ExamQuestionsRequest extends FormRequest
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
            'examId' => ['required', 'digits_between:1,3'],
            'question' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'The field of the question is required.',
        ];
    }
}
