<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamRequest;
use App\Models\Exam;
use App\Models\ExamQuestions;
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

    public function confirmation()
    {
        return view('templates.admin.exam-create-confirmation');
    }

    public function store(ExamRequest $request)
    {
        $validated = $request->validated();
        $validated['uuid'] = Uuid::uuid4()->toString();
        $validated['adminId'] = Auth::user()->id;
        $validated['init_date'] = date('Y-m-d H:i:s',strtotime($validated['date'] . ' ' . $validated['init_hour']));
        $validated['end_date'] = date('Y-m-d H:i:s', strtotime('+' . $validated['time'] . 'minutes', strtotime($validated['init_date'])));

        $exam = Exam::create($validated);
        if(!$exam)
        {
            throw ValidationException::withMessages([
                'exam' => trans('crud.exam.store.error'),
            ]);
        }

        // This value need evaluation
        $questions = ExamQuestions::factory()
            ->count($validated['questions'])
            ->for($exam)
            ->create();

        return redirect(route('admin.exam.create.confirmation'))
            ->with('success', true)
            ->with('message', 'The exam was created successfully')
            ->with('examId', $validated['uuid']);
    }

    public function edit($id)
    {
        $exam = Exam::find($id);
        if(!$exam)
        {
            return abort(404);
        }
        return view('templates.admin.exam-edit', ['exam' => $exam]);
    }

    public function update(ExamRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['init_date'] = date('Y-m-d H:i:s',strtotime($validated['date'] . ' ' . $validated['init_hour']));
        $validated['end_date'] = date('Y-m-d H:i:s', strtotime('+' . $validated['time'] . 'minutes', strtotime($validated['init_date'])));
        unset($validated['date']);
        unset($validated['init_hour']);
        $success = Exam::where(['id' => $id])->update($validated);
        if(!$success)
        {
            throw ValidationException::withMessages([
                'exam' => trans('crud.exam.update.error'),
            ]);
        }
        return redirect()->back()->with('message', 'The exam was updated successfully.');
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
