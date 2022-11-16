<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        //$students = Exam::all();
        $exams = [];
        return view('templates.admin.exam-index', ['exams' => $exams]);
    }
}
