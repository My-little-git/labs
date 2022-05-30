<?php

use App\Http\Controllers\LabOneController;
use App\Http\Controllers\LabTwoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeeController;
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
    return view('home');
})->name('home');

Route::get('/lab_one', [LabOneController::class, 'index'])->name('lab_one');
Route::post('/lab_one', [LabOneController::class, 'getData']);

Route::get('/lab_two', function () {return view('lab_two');})->name('lab_two');
Route::post('/lab_two', [LabTwoController::class, 'getData']);

Route::get('/edit_post/id', function () {return view('edit_post');})->name('edit_post');
Route::post('/edit_post/id', [PostController::class, 'updatePost']);

Route::get('/del_post/{id}', [PostController::class, 'deletePost'])->name('del_post');

Route::get('/edit_comment/id', function () {return view('edit_comment');})->name('edit_comment');
Route::post('/edit_comment/id', [CommentController::class, 'updateComment']);

Route::get('/del_comment/{id}', [CommentController::class, 'deleteComment'])->name('del_comment');

Route::get('/lab_three', function () {
    return view('lab_three');
})->name('lab_three');

Route::get('/lab_four', [EmployeeController::class, 'getAll'])->name('lab_four');
Route::post('/search-employee', [EmployeeController::class, 'searchEmployee']);

Route::get('/lab_five', function () {
    return view('lab_five');
})->name('lab_five');

