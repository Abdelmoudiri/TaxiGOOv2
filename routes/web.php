<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('index');
});
Route::get('/admin',function()
{
    return view('dashboards.admin');
});

// google
Route::get('/auth/google/redirect',[GoogleAuthController::class,'redirect']);
Route::get('/auth/google/callback',[GoogleAuthController::class,'callback']);
// github
Route::get('/auth/github/redirect',[GithubAuthController::class,'redirect']);
Route::get('/auth/github/callback',[GithubAuthController::class,'callback']);






Route::middleware(['auth'])->group(function(){

    Route::get('/profile',[ProfileController::class,'index']);
    Route::post('/profile',[ProfileController::class,'update']);
    Route::put('profile/update',[ProfileController::class,'update']);
    Route::post('/profile/photo',[ProfileController::class,'updatePhoto']);
    Route::get('/reservations',[ReservationController::class,'reservations']);
    
});

Route::get('/drivers',[DriverController::class,'index']);

Route::middleware(['auth','is_driver:driver'])->group(function(){
    Route::get('/driver',[DriverController::class,'show']);
    Route::get('/driver/updateStatus',[DriverController::class,'updateStatus']);
    Route::get('/reservations/accept/{id}',[ReservationController::class,'accept']);
    Route::get('/reservations/refuse/{id}',[ReservationController::class,'refuse']);
});

Route::middleware(['auth','is_passenger:passenger'])->group(function(){
    Route::get('/passenger',[PassengerController::class,'show']);
    Route::post('/reserve',[ReservationController::class,'store']);
    Route::get('/reservations/{id}',[ReservationController::class,'cancel']);
});

Route::get('/logout',[AuthenticatedSessionController::class,'logout']);

Route::middleware(['guest'])->group(function(){
    //register routes
    Route::get('/register',[RegistredUserController::class,'create']);
    Route::post('/register',[RegistredUserController::class,'store']);

    //login routes
    Route::get('/login',[AuthenticatedSessionController::class,'create']);
    Route::post('/login',[AuthenticatedSessionController::class,'login']);
});
