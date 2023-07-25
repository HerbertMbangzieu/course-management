<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\AbsenceController;


use App\Models\Lecturer;
use App\Models\Course;
use App\Models\Specialty;
use App\Models\Student;

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
Route::get('/courses/show/{course}', [CourseController::class,'show']);

Route::get('/logbooks/create/{course}',[LogbookController::class, 'create']);
Route::get('/logbooks/show/{course}',[LogbookController::class, 'show']);
Route::post('/logbooks/store/{course}',[LogbookController::class, 'store']);

Route::get('/absences/create/{logbook}',[AbsenceController::class, 'create']);
Route::get('/absences/store/{student}/{logbook}',[AbsenceController::class, 'store']);
Route::get('/absences/unstore/{student}/{logbook}',[AbsenceController::class, 'unstore']);




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

Route::get('/addStudents', function(){
    $student = new Student;
    $student->name = 'Anatole Abega';
    $student->specialty_id = 1;
    $student->save();

    $student = new Student();
    $student->name = 'Ann Achu';
    $student->specialty_id = 1;
    $student->save();

    $student = new Student;
    $student->name = 'Brice Bomda';
    $student->specialty_id = 1;
    $student->save();

    $student = new Student;
    $student->name = 'Charles Choupo';
    $student->specialty_id = 1;
    $student->save();

    $student = new Student;
    $student->name = 'Daniela Domba';
    $student->specialty_id = 1;
    $student->save();

    $student = new Student;
    $student->name = 'Kevin Kola';
    $student->specialty_id = 2;
    $student->save();

    $student = new Student;
    $student->name = 'Lena Lando';
    $student->specialty_id = 2;
    $student->save();

    $student = new Student;
    $student->name = 'Maryam Mamadou';
    $student->specialty_id = 2;
    $student->save();

    $student = new Student;
    $student->name = 'Arnold Ayissi';
    $student->specialty_id = 2;
    $student->save();

    $student = new Student;
    $student->name = 'Norbert Netta';
    $student->specialty_id = 2;
    $student->save();

    $student = new Student;
    $student->name = 'Oliver Oyono';
    $student->specialty_id = 3;
    $student->save();

    $student = new Student;
    $student->name = 'Patricia Pangop';
    $student->specialty_id = 3;
    $student->save();

    $student = new Student;
    $student->name = 'Ulrich Umete';
    $student->specialty_id = 3;
    $student->save();

    $student = new Student;
    $student->name = 'Vivian Voufack';
    $student->specialty_id = 3;
    $student->save();

    $student = new Student;
    $student->name = 'Zephyrin Zebaze';
    $student->specialty_id = 3;
    $student->save();

    $student = new Student;
    $student->name = 'Elise Enama';
    $student->specialty_id = 4;
    $student->save();

    $student = new Student;
    $student->name = 'Frederick Fankam';
    $student->specialty_id = 4;
    $student->save();

    $student = new Student;
    $student->name = 'Ghislain Gaye';
    $student->specialty_id = 4;
    $student->save();

    $student = new Student;
    $student->name = 'Halan Hamed';
    $student->specialty_id = 4;
    $student->save();


});
