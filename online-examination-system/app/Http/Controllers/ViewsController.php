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
}
