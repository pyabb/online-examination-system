<?php

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
Route::get('/dashboard', [ViewsController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/profile', [ViewsController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/profile/edit', [ViewsController::class, 'profile_edit'])->middleware(['auth'])->name('profile.edit');

require __DIR__.'/auth.php';
