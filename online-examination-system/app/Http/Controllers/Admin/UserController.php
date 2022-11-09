<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        $students = User::all();
        return view('templates.admin.user-index', ['students' => $students]);
    }

    public function edit($id)
    {
        $student = User::find($id);
        if(!$student)
        {
            return abort(404);
        }
        return view('templates.admin.user-edit', ['student' => $student]);
    }

    public function update(ProfilePostRequest $request, $id)
    {
        $validated = $request->validated();
        $success = User::where(['id' => $id])->update($validated);
        if(!$success)
        {
            throw ValidationException::withMessages([
                'student' => trans('crud.student.update.error'),
            ]);
        }
        return redirect()->back()->with('message', 'The student was updated successfully.');
    }

    public function delete($id)
    {
        $student = User::find($id);
        if(!$student)
        {
            return response()->json(['success' => false, 'message' => 'Student dont exists.']);
        }

        if(!$student->delete())
        {
            return response()->json(['success' => false, 'message' => 'Oops! and error. The student could not be deleted.']);

        }

        return response()->json(['success' => true, 'message' => 'Student with id ' . $student->id . ' has been deleted successfully.']);
    }
}
