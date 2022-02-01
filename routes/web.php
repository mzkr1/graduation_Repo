<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\IS_Subject_InfoController;
use App\Http\Controllers\IS_Graduate_Subject_InfoController;
use App\Http\Controllers\IS_Professor_InfoController;
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
    return view('index');
})->name('home');

Route::get('/subjects', function () {
    return view('subjects');
})->name('subject');

Route::get('/lectures', function () {
    return view('lectures');
});

Route::get('/IS_Add_Subject', function () {
    return view('IS_Add_Subject');
});

Route::get('/IS_Add_GraduateStudies_Subject', function () {
    return view('IS_Add_GraduateStudies_Subject');
});

Route::get('/IS_Add_Professor', function () {
    return view('IS_Add_Professor');
});

// admin routes
Route::get('/admin-cpanel',[AdminController::class,'index']);
Route::get('/add-subject',[AdminController::class,'add']);
Route::post('/add-subject',[SubjectController::class,'add']);

Route::post('/IS_Add_Subject',[IS_Subject_InfoController::class,'is_subjects_add']);
Route::get('/IS_Add_Subject',[IS_Subject_InfoController::class,'is_subjects_view']);

Route::post('/IS_Add_GraduateStudies_Subject',[IS_Graduate_Subject_InfoController::class,'is_graduate_subjects_add']);
Route::get('/IS_Add_GraduateStudies_Subject',[IS_Graduate_Subject_InfoController::class,'is_graduate_subjects_view']);

Route::post('/IS_Add_Professor',[IS_Professor_InfoController::class,'is_professor_add']);
Route::get('/IS_Add_Professor',[IS_Professor_InfoController::class,'is_professor_view']);

Auth::routes();
//god make it work it sufrring
Route::get('/user', 'UserController@index')->name('user');
Route::get('/login', 'AdminController@index')->name('admin');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
