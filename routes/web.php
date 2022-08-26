<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::match(["post","get"],"/login", [AuthController::class,"login"])->name("login");
Route::match(["post","get"],"/register", [AuthController::class,"register"])->name("register");

Route::get('/',[HomeController::class,'index'])->name('homepage');
Route::get('/view/{id}',[HomeController::class,'view'])->name('view');

Route::prefix("admin")->middleware("auth")->group(function(){
      Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
      Route::resource('course', CourseController::class);
});
