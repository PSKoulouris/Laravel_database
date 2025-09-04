<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//Route for view studentmgt:
Route::get('/studentmgt', function(){
    return view('studentmgt');
});

//Route post via controller:
Route::post("/saveStudentRoute", [StudentController::class, "saveStudent"])->name("saveStudent");

