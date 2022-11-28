<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ShowTimeController;
use App\Http\Controllers\HallOwner\BookingController;
use App\Http\Controllers\HallOwner\HallController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\HallOwner\HallOwnerController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ex', function () {
    return view('ex');
})->name('ex');

Route::group(['middleware' => 'auth'],function(){
//User Routes
   Route::group([
       'prefix' => 'user',
       'as' => 'user.'
   ],function(){
        Route::get('/',[UserController::class,'index'])->name('index');

       Route::get('/profile',[UserController::class,'viewProfile'])->name('profile.view');
       Route::post('/profile',[UserController::class,'updateProfile'])->name('profile.update');
       Route::get('/profile/edit',[UserController::class,'editProfile'])->name('profile.edit');

       Route::get('/movie',[UserController::class,'showMovie'])->name('movie.show');
       Route::get('/movie/{id}',[UserController::class,'viewMovie'])->name('movie.view');

       Route::get('/hall',[UserController::class,'showHall'])->name('hall.show');
       Route::get('/hall/{id}',[UserController::class,'viewHall'])->name('hall.view');
   });

//Admin Routes
   Route::group([
       'middleware' => 'is_admin',
       'prefix' =>'admin',
       'as' => 'admin.',
   ],function(){
       Route::get('/',[AdminController::class,'index'])->name('index');

       Route::get('/movie',[MovieController::class,'showMovie'])->name('movie.show');
       Route::get('/movie/create',[MovieController::class,'createMovie'])->name('movie.create');
       Route::post('/movie/create',[MovieController::class,'storeMovie'])->name('movie.store');

       Route::get('/movie/edit/{id}',[MovieController::class,'editMovie'])->name('movie.edit');
       Route::post('/movie/edit/{id}',[MovieController::class,'updateMovie'])->name('movie.update');

       Route::get('/movie/show/{id}',[MovieController::class,'viewMovie'])->name('movie.view');


       Route::get('/profile',[AdminController::class,'viewProfile'])->name('profile.view');
       Route::post('/profile',[AdminController::class,'updateProfile'])->name('profile.update');
       Route::get('/profile/edit',[AdminController::class,'editProfile'])->name('profile.edit');

       Route::get('/time',[ShowTimeController::class,'showTime'])->name('showtime');
       Route::get('/time/create',[ShowTimeController::class,'createshowTime'])->name('showtime.create');
       Route::post('/time/create',[ShowTimeController::class,'storeshowTime'])->name('showtime.store');


   });

   //Hall Owner
    Route::group([
        'middleware' => 'is_hallowner',
        'prefix' =>'hallowner',
        'as' => 'hallowner.',
    ],function(){
        Route::get('/',[HallOwnerController::class,'index'])->name('index');

        Route::get('/profile',[HallOwnerController::class,'viewProfile'])->name('profile.view');
        Route::post('/profile',[HallOwnerController::class,'updateProfile'])->name('profile.update');
        Route::get('/profile/edit',[HallOwnerController::class,'editProfile'])->name('profile.edit');


        Route::get('/hall',[HallController::class,'showHall'])->name('hall.show');
        Route::get('/hall/create',[HallController::class,'createHall'])->name('hall.create');
        Route::post('/hall/create',[HallController::class,'storeHall'])->name('hall.store');
        Route::get('/hall/show/{id}',[HallController::class,'viewHall'])->name('hall.view');

        Route::get('/hall/theatre/create/{id}',[HallController::class,'createTheatre'])->name('theatre.create');
        Route::post('/hall/theatre/create/{id}',[HallController::class,'storeTheatre'])->name('theatre.store');
        Route::get('/hall/theatre/{id}',[HallController::class,'viewTheatre'])->name('theatre.view');


        Route::get('/movie',[BookingController::class,'showMovie'])->name('movie.show');
       Route::get('/movie/{id}',[BookingController::class,'viewMovie'])->name('movie.view');

       Route::get('/halls',[BookingController::class,'getHall'])->name('halls');
       Route::get('/theatres',[BookingController::class,'getTheatre'])->name('theatres');

       Route::get('/booking/show',[BookingController::class,'showBooking'])->name('booking.show');
       Route::get('/booking/{id}',[BookingController::class,'createBooking'])->name('booking.create');
       Route::post('/booking',[BookingController::class,'storeBooking'])->name('booking.store');
       Route::get('/booking/date',[BookingController::class,'dateBooking'])->name('booking.date');
       Route::post('/booking/date/{id}',[BookingController::class,'saveBooking'])->name('booking.save');

    });
});

require __DIR__.'/auth.php';
