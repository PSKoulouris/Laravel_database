<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

/*
//Route for view studentmgt:
Route::get('/studentmgt', function(){
    return view('studentmgt');
});


1. Route::post(...)

Tells Laravel: “I want to define a POST route.”

POST is used when submitting form data (e.g., update, create, delete).

2. "/updateStudentRoute"

This is the URL path in your browser.

Example: if your app runs at http://localhost:8000, then this route listens at
http://localhost:8000/updateStudentRoute.

3. [StudentController::class, "updateStudent"]

This tells Laravel which controller and method should handle the request.

StudentController::class → refers to your StudentController file.

"updateStudent" → the method inside StudentController.

So when someone visits /updateStudentRoute with a POST request, Laravel calls:

StudentController::updateStudent()

4. ->name("updateStudent")

This gives the route a name (an alias).

Instead of hardcoding /updateStudentRoute in your Blade files, you can use:

<form method="post" action="{{ route('updateStudent', $itemStudent->id) }}">


This way:

If you ever change the URL (e.g., /students/update instead of /updateStudentRoute),
you only update it in the route file, not in every form.

*/

//Route for View studentmgt via controller:
Route::get("/studentmgt", [StudentController::class, "allStudent"])->name("allStudent");

//Route post for CREATE via controller:
Route::post("/saveStudentRoute", [StudentController::class, "saveStudent"])->name("saveStudent");

//Route post for UPDATE via controller:
Route::post("/updateStudentRoute", [StudentController::class, "updateStudent"])->name("updateStudent");

