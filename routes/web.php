<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/company-login', function () {
    return view('companyLogin');
});

Route::get('/company-register', function () {
    return view('companyRegister');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/job-description', function () {
    return view('jobDescription');
});

Route::get('/profile', function () {
    return view('profile',[
        "user" => DB::table('users')->where('name', Session::get("name"))->first(),
    ]);
});

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/login-user', [UserController::class, "login"]);

Route::get('/register-user', [UserController::class, "createUser"]);

