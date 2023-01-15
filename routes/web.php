<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('loginf');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/registerform', function () {
    return view('loginf');
});
Route::get('/notif', function () {
    return view('notifform');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/display', function(){
    $day = app('firebase.firestore')->database()->collection('nomnomcat')->document('7V5LFJEekUPyBEPCaOW3ZYHRP2K2')->snapshot();
    print_r('Monday ='.$day->id());
    print_r("<br>". 'Student Name = '.$day->data()['Monday']);
    print_r('Tuesday ='.$day->id());
    print_r("<br>". 'Student Name = '.$day->data()['Tuesday']);
});

Route::get('/insert', function(){
    $stuRef = app('firebase.firestore')->database()->collection('Students')->newDocument();
    $stuRef->set([
        'first' => 'je',
        'last' => 'slebew',
        'age' => '6'
    ]); 
});

// Route::post('/register',[UserController::class, 'register']);
// Route::post('/login',[UserController::class, 'login']);