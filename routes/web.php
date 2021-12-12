<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\User;




use App\Http\Controllers\HgzController;
use App\Http\Controllers\MessageController;


use App\Models\admin;
use App\Models\hgz;
use App\Models\message;


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
Route::get('/logout','\App\Http\Controllers\LoginController@logout',function(){
    return view('general.home');
});

Route::get('home', function () {
    return view('general.home');
});
Route::get('/', function () {
    return view('general.home');
});
Route::resource("hgz",HgzController::class);

Route::get('/user/hgz',function(){
    $user=Auth()->id;
    // dd($user);
    
    
});
Route::resource("message",MessageController::class);




Route::get('aboutus', function () {
    return view('/general.aboutus');
});
Route::get('aboutusu', function () {
    return view('user.aboutus');
});

Route::get('home', function () {
    return view('/general.home');
});
Route::get('homeu', function () {
    return view('user.home');
});

Route::get('services', function () {
    return view('/general.services');
});
Route::get('servicesu', function () {
    return view('user.services');
});

Route::get('contactus', function () {
    return view('/general.contactus');
});
Route::get('contactusu', function () {
    return view('user.contactus');
});


Route::get('hgz', function () {
    return view('general.hgz');
});
Route::get('hgzu', function () {
    return view('user.hgz');
});

Route::get('talbwasata', function () {
    return view('user.talbwasata');
});


Route::get('no3', function () {
    return view('/user.no3');
});

Route::get('enthaa', function () {
    return view('/user.enthaa');
});




    Route::get('talbwasata', function () {
        return view('/user.talbwasata');
    }
);



// login
Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    
});
// ADMIN ////////////////////////////////////////////////////////////////////////////

Route::group(['middleware'=>'auth'], function(){
    
    Route::group(['middleware'=>'userType:1'], function(){
        Route::get('/admin/dash',function(){
            return view('profile')->middleware('Admin');
        });
        
       
        
    });



    

    


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
});
