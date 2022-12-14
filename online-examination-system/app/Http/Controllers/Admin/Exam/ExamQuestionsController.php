<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Exam\ExamQuestionsRequest;
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
        if(!$question || $question->exam->id != $exam->id)
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

    public function update(ExamQuestionsRequest $request, $id, $qid)
    {
        $validated = $request->validated();

        $exam = Exam::find($id);
        if(!$exam)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The exam dont exists.']);
        }

        $question = ExamQuestions::where(['id' => $qid])->update($validated);
        if(!$question)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The question has not been saved.']);
        }

        return response()->json(['success' => true, 'message' => 'Question has been saved successfully.']);
    }

    public function delete($id, $qid)
    {
        $exam = Exam::find($id);
        if(!$exam)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The exam dont exists.']);
        }

        $question = ExamQuestions::where(['id' => $qid, 'examId' => $exam->id])->first();
        if(!$question)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The question dont exists.']);
        }

        $delete_question = $question->delete();
        if(!$delete_question)
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The question dont was deleted.']);
        }

        $quantity_questions = $exam->questions - 1;
        $exam->update(['questions' => $quantity_questions]);

        $question = ExamQuestions::where(['examId' => $exam->id])->first();
        if(!$question)
        {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Oops! and error. Dont exists any question. You will redirect to exams page.',
                    'redirect' => route('admin.exams'),
                ]);
        }
        return response()->json(
            [
                'success' => true,
                'message' => 'Question has been deleted successfully.',
                'redirect' => route('admin.exam.question.delete', ['id' => $exam->id, 'qid' => $question->id]),
            ]);
    }
}
