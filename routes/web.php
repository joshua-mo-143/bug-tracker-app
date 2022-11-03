<?php

use App\Http\Controllers\BugController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('projectsIndex');
Route::get('/projects/create', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('projectsCreate');
Route::post('/projects/create', [ProjectController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/projects/{id}', [ProjectController::class, 'show'])->middleware(['auth', 'verified'])->name('projectShow');

Route::get('bugs/create', [BugController::class, 'create'])->middleware(['auth', 'verified'])->name('bugCreate');
Route::post('bugs/create', [BugController::class, 'store'])->middleware(['auth', 'verified']);
Route::delete('bugs/{bug}', [BugController::class, 'delete'])->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
