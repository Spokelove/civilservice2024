
<?php


use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\PwdprofileController;
use App\Http\Controllers\ProfillingController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\Managementcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAcountcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\InvitationalController;
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

//Route::get('/ About', function () {
   // return  'About';
//});
 
//Route::match(['get','post'],'/',function(){
 //  return 'POST and GET is allowed';

    //Route::view('/welcome', 'welcome');

//Route::permanentRedirect('/welcome','/');
//Route::get('/users',function(Request $request){
    //dd($request);
      ///   return null;
//});
//Route::get('/user/{id}/{group}',function($id,$group){
    //return response($id.'-'.$group, 200);
    
//});


//Route::get('/request-json',function()
//{
  //  return response()->json(['name'=> 'Phoebe Rayos','age','22']);

//});

//Route::get('/request-download' , function(){
  //  $path = public_path().'/sample.txt';

   //$name = 'sample.txt';
   //$headers = array(
               //'Content-type : application/text-plain',
 //  );

   //return response()->download($path, $name, $headers);

//});

//Route::get('/user/{id}', [UserController::class, 'show']);

//Route::get('/students/{id}', [StudentController::class, 'show']);
    
//common routes naming
//index = show all data or students
//show - show a single data or students
//create - show a from  to a new user
//store - store a data
//edit - show form a data
//destroy - delete a data


  // < registration  for users table>
Route::resource('/Management', Managementcontroller::class);
Route::get('/Management', [ManagementController::class, 'index'])->name('Management.index');

  // < end of registration table>


  // <users route>
Route::controller(StudentController::class)->group(function() {

Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class,  'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class,  'process']);
Route::get('/search', [UserController::class, 'search'])->name('users.search');

// <for edit the user table>
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    //  edit
// <for update the user table>
 Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
     //  update
// delete the user table>
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/destroy',[UserController::class, 'destroy'])->name('users.destroy');;
//  delete


// table of RegistrationController

Route::get('/Registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/Registration/create', [RegistrationController::class, 'create'])->name('registration.create');
Route::get('/Registration/store', [RegistrationController::class, 'store'])->name('registration.store');
// table of RegistrationController




Route::post('/logout', [UserController::class, 'logout']);
Route::Post('/store', [UserController::class, 'store']);
  //  User Route



  Route::get('/score', [ScoreController::class, 'index'])->name('score.index');    // Display a listing of scores
  Route::get('/score/create', [ScoreController::class, 'create'])->name('score.create');  // Show the form for creating a new score
  Route::post('/score', [ScoreController::class, 'store'])->name('score.store');  // Store a newly created score in storage
  Route::get('/score/{id}/edit', [ScoreController::class, 'edit'])->name('score.edit');  // Show the form for editing the specified score
  Route::put('/score/{id}', [ScoreController::class, 'update'])->name('score.update');  // Update the specified score in storage





  Route::get('/invitational', [InvitationalController::class, 'index'])->name('invitational.index');    // Display a listing of scores
  Route::get('/invitational/create', [InvitationalController::class, 'create'])->name('invitational.create');  // Show the form for creating a new score
  Route::post('/invitational', [InvitationalController::class, 'store'])->name('invitational.store');  // Store a newly created score in storage
  Route::get('/invitational/{invitational}/edit', [InvitationalController::class, 'edit'])->name('invitational.edit');
  Route::put('/invitational/{invitational}', [InvitationalController::class, 'update'])->name('invitational.update');










  Route::get('/video', [VideoController::class, 'show'])->name('video.show');










});














Route::controller(StudentController::class)->group(function() {


Route::get('/','index')->middleware('auth');
Route::get('/add/student','create');
Route::post('/add/student','store');


Route::get('/student/{id}','show');
Route::put('/student/{student}','update');
//Route::put('/student/{id}', [StudentController::class, 'cancel']);

// Route::get('/search/students','searchdata');

// Route::delete('/student/{student}','destroy');

Route::get('/Assistance', [AssistanceController::class, 'index']);
Route::get('/Profilling', [ProfillingController::class, 'index']);
// Route::get('/Disease', [DiseaseContoller::class, 'index']);
Route::get('/Pwdprofile', [PwdprofileController::class, 'index']);
Route::get('/Assistance', [AssistanceController::class, 'index']);
// Route::get('/Management', [Managementcontroller::class, 'index']);











});

