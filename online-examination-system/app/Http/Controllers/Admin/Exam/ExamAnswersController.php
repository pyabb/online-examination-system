<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Exam\ExamAnswersRequest;
use App\Models\ExamAnswers;
use App\Models\ExamQuestions;
use Illuminate\Http\Request;

class ExamAnswersController extends Controller
{
    public function store(ExamAnswersRequest $request)
    {
        $validated = $request->validated();
        $exam_question  = ExamQuestions::find($validated['question']);
        if(!$exam_question)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The question dont exists.']);
        }

        $exam_answer = ExamAnswers::create($validated);
        if(!$exam_answer)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The question has not been created.']);
        }

        return response()->json(['success' => true, 'message' => 'Answer has been created successfully.']);
    }

    public function update()
    {
        // todo
    }

    public function delete()
    {
        // todo
    }
}
