<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePostRequest;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function show()
    {
        return view('templates.profile');
    }

    public function edit()
    {
        return view('templates.profile-edit');
    }

    /**
     * @param ProfilePostRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(ProfilePostRequest $request)
    {
        $validated = $request->validated();
        $success = Admin::where(['id' => Auth::user()->id])->update($validated);
        if(!$success)
        {
            throw ValidationException::withMessages([
                'profile' => trans('crud.profile.update.error'),
            ]);
        }
        return redirect()->back()->with('message', 'User is updated successfully.');
    }
}
