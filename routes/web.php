<?php
use App\Http\Livewire\Home;
// use App\Http\Livewire\Studentlogin;
use App\Http\Controllers\StudentAuth;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AllStudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseMappingController;
use App\Http\Livewire\DriveSkills;
// use App\Http\Livewire\StudentDetails;
// use App\Http\Livewire\StudentRegistrations;


// *********************************************************

use App\Http\Livewire\Sturesetpass;
// use App\Http\Livewire\AllStudent;
// use App\Http\Livewire\AddStudents;
use App\Http\Livewire\Resetpassword;
use App\Http\Livewire\Adminlogin;
// use App\Http\Livewire\AddCategory;
// use App\Http\Livewire\AddBatch;
// use App\Http\Livewire\AddCourses;
use App\Http\Livewire\QuestionsTopic;
use App\Http\Livewire\AddQuestion;
use App\Http\Livewire\QuestionsBank;
use App\Http\Livewire\QuestionBulkImport;
// use App\Http\Livewire\CourseMapping;
use App\Http\Livewire\ResultsQuizWise;
use App\Http\Livewire\ResultsBatchWise;
use App\Http\Livewire\ResultsDateWise;
use App\Http\Livewire\CheckPassword;
use App\Http\Livewire\Admindashboard;
// use App\Http\Livewire\Studentdashboard;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Student Controller
//------------------------------------
Route::get('/student-login',[StudentAuth::class,'login'])->middleware('studentlogin');
Route::get('/student-logout',[StudentAuth::class,'Logout']);
Route::get('/student-dashboard',[StudentAuth::class,'StudentDashboard'])->middleware('studentauthcheck');
Route::post('/student-login',[StudentAuth::class,'LoginStudent'])->name('student-login');
Route::get('/student-profile/{id}',[StudentAuth::class,'StudentProfile']);
Route::get('/student-registration',[StudentAuth::class,'registration'])->middleware('studentlogin');
Route::post('/student-registration',[StudentAuth::class,'StudentRegister'])->name('student-register');
Route::get('/password',[AllStudentController::class,'ShowPassword']);
// **************************************************************************
// Student Livewire class
//---------------------------------
Route::get('/drive-skills',DriveSkills::class);
// Route::get('/student-registration',StudentRegistrations::class);
Route::get('/',Home::class);
// Route::get('/student-login',Studentlogin::class);
Route::get('/reset-password-student',Sturesetpass::class);

//************************************************************************************ */
// Admin Controller
//---------------------------------

Route::get('/admin',[AdminAuth::class,'AdminLog']);
Route::get('/admin-logout',[AdminAuth::class,'AdminLogout']);


Route::get('/import-page',[AllStudentController::class,'index']);
Route::post('/import',[AllStudentController::class,'import'])->name('import');
Route::get('/edit-student/{id}',[AllStudentController::class,'EditStudent']);
Route::get('/student-delete/{id}',[AllStudentController::class,'studentDelete']);
Route::get('all-student',[AllStudentController::class,'allStudent']);
Route::get('/add-students',[AllStudentController::class,'addStudent']);
Route::post('/add-students',[AllStudentController::class,'createStudent'])->name('student-add');
Route::post('/student-update',[AllStudentController::class,'UpdateStudent'])->name('update');

Route::get('/add-category',[CourseController::class,'addCategory']);
Route::post('/add-category',[CourseController::class,'createCategory'])->name('create-category');
Route::get('/edit-category/{id}',[CourseController::class,'editCategory']);
Route::post('/edit-category',[CourseController::class,'updateCategory'])->name('update-category');
Route::get('/category-delete/{id}',[CourseController::class,'categoryDelete']);


Route::get('/add-batch',[BatchController::class,'addBatch']);
Route::post('/create-batch',[BatchController::class,'createBatch'])->name('create-batch');
Route::get('/edit-batch/{id}',[BatchController::class,'editBatch']);
Route::post('/edit-batch',[BatchController::class,'updateBatch'])->name('update-batch');
Route::get('/batch-delete/{id}',[BatchController::class,'batchDelete']);

Route::get('/add-courses',[AddCourseController::class,'addCourse']);
Route::post('/add-courses',[AddCourseController::class,'CreateCourse'])->name('create-course');

Route::get('course-mapping',[CourseMappingController::class,'index']);
Route::get('test',[CourseMappingController::class,'Test']);

Route::post('/admin-login',[AdminAuth::class,'AdminLogin'])->name('admin-login');
Route::get('/admin-dashboard',[AdminAuth::class,'index']);

//********************************************************************************************* */

// Admin Livewire Class
//---------------------------------
Route::get('/reset-password',Resetpassword::class);
// Route::get('/admin-dashboard',Admindashboard::class);
// Route::get('/all-student',AllStudent::class);
// Route::get('/add-students',AddStudents::class);
// Route::get('/add-category',AddCategory::class);
// Route::get('/add-batch',AddBatch::class);
// Route::get('/course-mapping',CourseMapping::class);
// Route::get('/add-courses',AddCourses::class);
Route::get('/questions-topic',QuestionsTopic::class);
Route::get('/add-question',AddQuestion::class);
Route::get('/questions-bank',QuestionsBank::class);
Route::get('/question-bulk-import',QuestionBulkImport::class);
Route::get('/results-quiz-wise',ResultsQuizWise::class);
Route::get('/results-batch-wise',ResultsBatchWise::class);
Route::get('/results-date-wise',ResultsDateWise::class);
Route::get('/check-password',CheckPassword::class);

