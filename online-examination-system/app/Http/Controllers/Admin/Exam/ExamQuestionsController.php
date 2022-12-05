<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamQuestions;
use Illuminate\Http\Request;

class ExamQuestionsController extends Controller
{
    public function edit($id, $qid)
    {
        $exam = Exam::find($id);
        if(!$exam)
        {
            return abort(404);
        }

        $question = ExamQuestions::find($qid);
        if($question->exam->id != $exam->id)
        {
            return abort(404);
        }

        $questions = $exam->allQuestions;
        $count = 1;
        foreach ($questions as $q)
        {
            var_dump($q->id);
            if($q->id == $question->id)
            {
                $question->relid = $count;
                break;
            }
            $count++;
        }

        return view('templates.admin.exam-questions', ['exam' => $exam, 'question' => $question, 'questions' => $questions]);
    }

    public function store(ExamQuestionsRequest $request)
    {
        // todo
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
