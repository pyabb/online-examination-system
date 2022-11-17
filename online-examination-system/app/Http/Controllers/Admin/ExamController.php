<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('templates.admin.exam-index', ['exams' => $exams]);
    }

    public function create()
    {
        return view('templates.admin.exam-create');
    }

    public function delete($id)
    {
        $exam = Exam::find($id);
        if(!$exam)
        {
            return response()->json(['success' => false, 'message' => 'Exam dont exists.']);
        }

        if(!$exam->delete())
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The Exam could not be deleted.']);

        }

        return response()->json(['success' => true, 'message' => 'Exam with id ' . $exam->id . ' has been deleted successfully.']);
    }
}
