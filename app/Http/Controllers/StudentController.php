<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use Illuminate\Support\Facades\Log;

/*When someone submits the student form, Laravel gives the data to this function.
The function logs the data (for debugging).
It creates a new student record with that data.
Saves it into the database.
Then sends the user back to the student management page. */

class StudentController extends Controller
{
    //Function to save form entry to database
    public function saveStudent(Request $request) { //The $request contains all the form data (like $_POST in plain PHP, but way more powerful).
        Log::info(json_encode($request->all())); //This saves all the request data into storage/logs/laravel.log. json_encode($request->all()) means “turn everything the user submitted into a JSON string for easier reading in the log.”
       
        $newStudent = new Student; //This makes a new Student object
        $newStudent->email = $request->name_email; //It copies the values the user typed in the form into the new student record.
        $newStudent->password = $request->name_password;
        $newStudent->save(); //inserts the student into the students table.

        return redirect("/studentmgt")-> with('status_save', 'Student account created successfully!'); //After saving, it sends the user back to /studentmgt with a success message (Session).
    }

    //Function to delete student with id
    public function deleteStudent($id){
        Log::info($id);
        $existingStudent = Student::find($id); //Fetches a raw with id from students table defined by Model Student (class)
        $existingStudent->delete();
        
        return redirect("/studentmgt")->with("status_delete", "Student with id: " . $id . " was deleted");
    }

    //Function to refresh page with updated data
    public function allStudent(){
        return view("/studentmgt", ["listStudent"=> Student::all()]); 
        //return the view blade.php with all data from students table defined in model Student. data are returned in a collection of Students objects
        //stored in the variable named listStudent ($listStudent in blade.php). Student::all() equivalent to SELECT * FROM students
    }

    public function updateStudent(Request $request, $id){
        Log::info(json_encode($request->all()));
        Log::info($id);

        $existingStudent = Student::find($id);
        $existingStudent->email = $request->name_email;
        $existingStudent->password = $request->name_password;
        $existingStudent->save();

        return redirect("/studentmgt")->with("status_update", "Student data with id: " . $id . " was updated");
    }
}
