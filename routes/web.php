<?php

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

//Pavienis kelias
Route::get('/', function () {
    return view('home');
  })->name('home');

 

    Route::prefix('students')->group(function() {
    //Index
    Route::get('', 'App\Http\Controllers\StudentController@index')->name('student.index');
    //Create
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    Route::post('store', 'App\Http\Controllers\StudentController@store' )->name('student.store');
    // Edit form, id
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    //Delete
    Route::post('destroy/{student}', 'App\Http\Controllers\StudentController@destroy' )->name('student.destroy');
    //Show
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');

  });


  Route::prefix('attendance_groups')->group(function() {

        //Index
        Route::get('', 'App\Http\Controllers\AttendanceGroupController@index')->name('attendance_group.index');
        //Create
        Route::get('create', 'App\Http\Controllers\AttendanceGroupController@create')->name('attendance_group.create');
        Route::post('store', 'App\Http\Controllers\AttendanceGroupController@store' )->name('attendance_group.store');
        //Edit form, id
        Route::get('edit/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@edit')->name('attendance_group.edit');
        Route::post('update/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@update')->name('attendance_group.update');
        //Delete
        Route::post('destroy/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@destroy' )->name('attendance_group.destroy');
        //Show
        Route::get('show/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@show')->name('attendance_group.show');

  });

  Route::prefix('schools')->group(function() {

        //Index
        Route::get('', 'App\Http\Controllers\SchoolController@index')->name('school.index');
        //Create
        Route::get('create', 'App\Http\Controllers\SchoolController@create')->name('school.create');
        Route::post('store', 'App\Http\Controllers\SchoolController@store' )->name('school.store');
        //Edit form, id
        Route::get('edit/{school}', 'App\Http\Controllers\SchoolController@edit')->name('school.edit');
        Route::post('update/{school}', 'App\Http\Controllers\SchoolController@update')->name('school.update');
        //Delete
        Route::post('destroy/{school}', 'App\Http\Controllers\SchoolController@destroy' )->name('school.destroy');
        //Show
        Route::get('show/{school}', 'App\Http\Controllers\SchoolController@show')->name('school.show');
  
  });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

