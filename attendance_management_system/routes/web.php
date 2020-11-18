<?php

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

// Route::get('/', function () {
// //return view('Registerforms/lecturerregister');
// //return view('Registerforms/studentregister');
// //return view('Registerforms/adminregister');
// return view('Registerforms/login');
// //return view('Registerforms/courseregister');
// //return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', function () {
    return view('students.studentregister');
});

Route::get('/course', function () {
    return view('courses.courseregister');
});

Route::get('/lecturer', function () {
    return view('lecturers.lecturerregister');
});

Route::get('/admin', function () {
    return view('admins.adminregister');
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/gallary', [App\Http\Controllers\HomeController::class, 'gallary'])->name('gallary');
