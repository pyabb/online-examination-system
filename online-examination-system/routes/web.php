<?php

use App\Http\Controllers\Auth\Admin\AdminAuthenticatedSessionController;
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
Route::get('/profile', [ViewsController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/profile/edit', [ViewsController::class, 'profile_edit'])->middleware(['auth'])->name('profile.edit');

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

Route::get('/admin/profile', [ViewsController::class, 'profile'])
    ->middleware(['auth:admin'])
    ->name('admin.profile');


Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store']);

Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:admin')
    ->name('admin.logout');

