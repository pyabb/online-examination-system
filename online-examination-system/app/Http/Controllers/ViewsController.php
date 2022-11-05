<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home()
    {
        return redirect('login');
    }

    public function dashboard()
    {
        return view('templates.dashboard');
    }

    public function profile()
    {
        return view('templates.profile');
    }

    public function profile_edit()
    {
        return view('templates.profile-edit');
    }
}
