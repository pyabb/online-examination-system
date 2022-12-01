<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamRequest;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Uuid;


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

    public function store(ExamRequest $request)
    {
        $validated = $request->validated();
        $validated['uuid'] = Uuid::uuid4()->toString();
        $validated['adminId'] = Auth::user()->id;
        $validated['date'] = date('Y-m-d H:i:s',strtotime($validated['date'] . ' ' . $validated['initHour']));

        $success = Exam::create($validated);
        if(!$success)
        {
            throw ValidationException::withMessages([
                'exam' => trans('crud.exam.store.error'),
            ]);
        }
        return redirect()->back()->with('message', 'The exam was created successfully.');
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
