<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LogbookController;

use App\Models\Lecturer;
use App\Models\Course;
use App\Models\Specialty;

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
});

Route::get('/lecturer/show/{lecturer}', [LecturerController::class, 'show']);


Route::post('/lecturer', [LecturerController::class,'login']);
Route::get('/lecturer/{lecturer}', [LecturerController::class,'show']);

Route::get('/courses/{lecturer}', [CourseController::class,'index']);

Route::get('/logbooks/create/{course}',[LogbookController::class, 'create']);




// API 

Route::get('/addLecturers', function () {
    $lecturer = new Lecturer;
    $lecturer->name = "herbert Mbangzieu";
    $lecturer->email = "herbert@jfn.com";
    $lecturer->password = "12345678";
    $lecturer->save();

    $lecturer = new Lecturer;
    $lecturer->name = "Alemkeng";
    $lecturer->email = "alemkeng@jfn.com";
    $lecturer->password = "12345678";
    $lecturer->save();

    $lecturer = new Lecturer;
    $lecturer->name = "Utembe";
    $lecturer->email = "utembe@jfn.com";
    $lecturer->password = "12345678";
    $lecturer->save();

    $lecturer = new Lecturer;
    $lecturer->name = "Tchinda Fabrice";
    $lecturer->email = "tchinda@jfn.com";
    $lecturer->password = "12345678";
    $lecturer->save();

    $lecturer = new Lecturer;
    $lecturer->name = "Beh";
    $lecturer->email = "beh@jfn.com";
    $lecturer->password = "12345678";
    $lecturer->save();

});

Route::get('/addSpecialties', function () {
    $specialty = new Specialty();
    $specialty->code = "SWE1";
    $specialty->name = "Software Engineering 1";
    $specialty->save();

    $specialty = new Specialty();
    $specialty->code = "ICA1";
    $specialty->name = "Industrial and Computing Architecture 1";
    $specialty->save();

    $specialty = new Specialty();
    $specialty->code = "NWS1";
    $specialty->name = "Network and Security 1";
    $specialty->save();

    $specialty = new Specialty();
    $specialty->code = "ECOM1";
    $specialty->name = "E-Commerce 1";
    $specialty->save();



    
});

Route::get('/addCourses', function () {
    $course = new Course;
    $course->code = "SWE111";
    $course->title = "Algorithm and Programming";
    $course->time = 36;
    $course->lecturer_id = 1;
    $course->specialty_id = 1;
    $course->save();

    $course = new Course;
    $course->code = "SWE112";
    $course->title = "Web Programming";
    $course->time = 40;
    $course->lecturer_id = 2;
    $course->specialty_id = 1;
    $course->save();

    $course = new Course;
    $course->code = "ICA121";
    $course->title = "Object Oriented Programming";
    $course->time = 36;
    $course->lecturer_id = 1;
    $course->specialty_id = 2;
    $course->save();

    $course = new Course;
    $course->code = "NWS114";
    $course->title = "Introduction to Networking";
    $course->time = 48;
    $course->lecturer_id = 3;
    $course->specialty_id = 3;
    $course->save();

    $course = new Course;
    $course->code = "ECOM125";
    $course->title = "Advanced Data Structure";
    $course->time = 36;
    $course->lecturer_id = 1;
    $course->specialty_id = 3;
    $course->save();



});


