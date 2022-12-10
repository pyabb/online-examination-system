<?php

use App\Http\Controllers\Admin\Exam\ExamAnswersController;
use App\Http\Controllers\Admin\Exam\ExamQuestionsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\Admin\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewsController::class, 'home'])->middleware(['auth'])->name('home');
Route::get('/dashboard', [ViewsController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/profile', [ProfileController::class, 'show'])
    ->middleware(['auth'])
    ->name('profile');

Route::post('profile/edit', [ProfileController::class, 'update'])
    ->middleware(['auth']);

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->middleware(['auth'])
    ->name('profile.edit');

require __DIR__ . '/auth.php';

/**
 * Admin
 */

Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
    ->middleware(['guest:admin', 'guest'])
    ->name('admin.login');

Route::get('admin/dashboard', [ViewsController::class, 'dashboard'])
    ->middleware('auth:admin')
    ->name('admin.dashboard');

Route::get('admin/profile', [ProfileController::class, 'show'])
    ->middleware(['auth:admin'])
    ->name('admin.profile');

Route::get('admin/profile/edit', [ProfileController::class, 'edit'])
    ->middleware(['auth:admin'])
    ->name('admin.profile.edit');

Route::post('admin/profile/edit', [ProfileController::class, 'update'])
    ->middleware(['auth:admin']);

Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store']);

Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:admin')
    ->name('admin.logout');

Route::get('admin/students', [UserController::class, 'index'])
    ->middleware('auth:admin')
    ->name('admin.students');

Route::get('admin/students/create', [UserController::class, 'create'])
    ->middleware('auth:admin')
    ->name('admin.student.create');

Route::post('admin/students', [UserController::class, 'store'])
    ->middleware(['auth:admin']);

Route::get('admin/students/{id}/edit', [UserController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth:admin')
    ->name('admin.student.edit');

Route::put('admin/students/{id}', [UserController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth:admin')
    ->name('admin.student.update');

Route::delete('admin/students/{id}', [UserController::class, 'delete'])
    ->where('id', '[0-9]+')
    ->middleware(['auth:admin'])
    ->name('admin.student.delete');


/**
 * exams
 */

Route::get('admin/exams', [ExamController::class, 'index'])
    ->middleware('auth:admin')
    ->name('admin.exams');

Route::get('admin/exams/create', [ExamController::class, 'create'])
    ->middleware(['auth:admin'])
    ->name('admin.exam.create');

Route::get('admin/exams/create/confirmation', [ExamController::class, 'confirmation'])
    ->middleware(['auth:admin'])
    ->name('admin.exam.create.confirmation');

Route::post('admin/exams', [ExamController::class, 'store'])
    ->middleware(['auth:admin']);

Route::get('admin/exams/{id}/edit', [ExamController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->middleware('auth:admin')
    ->name('admin.exam.edit');

Route::put('admin/exams/{id}', [ExamController::class, 'update'])
    ->where('id', '[0-9]+')
    ->middleware('auth:admin')
    ->name('admin.exam.update');

Route::delete('admin/exams/{id}', [ExamController::class, 'delete'])
    ->where('id', '[0-9]+')
    ->middleware(['auth:admin'])
    ->name('admin.exam.delete');


/**
 * exam questions
 */
Route::get('admin/exams/{id}/questions/{qid}', [ExamQuestionsController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->where('qid', '[0-9]+')
    ->middleware('auth:admin')
    ->name('admin.exam.questions');

Route::put('admin/exams/{id}/questions/{qid}', [ExamQuestionsController::class, 'update'])
    ->middleware(['auth:admin'])
    ->where('id', '[0-9]+')
    ->where('qid', '[0-9]+')
    ->name('admin.exam.question.update');

Route::delete('admin/exams/{id}/questions/{qid}', [ExamQuestionsController::class, 'delete'])
    ->middleware(['auth:admin'])
    ->where('id', '[0-9]+')
    ->where('qid', '[0-9]+')
    ->name('admin.exam.question.delete');


/**
 * exam answers
 */

Route::post('admin/exams/questions/answers', [ExamAnswersController::class, 'store'])
    ->middleware(['auth:admin'])
    ->name('admin.exam.question.answers');
