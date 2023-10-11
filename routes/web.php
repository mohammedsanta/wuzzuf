<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TheAuthentication;

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
    return view('index');
})->middleware('guest');

Route::get('/explore',function () {
});



// Route::resource('/company',CompanyController::class);
Route::get('/company/login',[CompanyController::class,'index'])->name('company.index')->middleware('guest:web,company');
Route::get('/company/create',[CompanyController::class,'create'])->name('company.create')->middleware('guest:web,company');
Route::post('/company/create',[CompanyController::class,'store'])->name('company.store')->middleware('guest:web,company');
Route::post('/company/login',[CompanyController::class,'login'])->name('company.login')->middleware('guest:web,company');
Route::post('/company/logout',[CompanyController::class,'logout'])->name('company.logout')->middleware('auth:company');
Route::get('/job/create',[JobController::class,'create'])->name('job.create')->middleware('auth:company');
Route::get('/job/ourjobs',[JobController::class,'ourjobs'])->name('job.ourjobs')->middleware('auth:company');
Route::post('/job',[JobController::class,'store'])->name('job.store')->middleware('auth:company');




Route::get('/job',[JobController::class,'index'])->name('job.index')->middleware('auth:company,web');
Route::get('/job/{id}',[JobController::class,'show'])->name('job.show')->middleware('auth:company,web');



Route::post('/auth/logout',[TheAuthentication::class,'logout'])->name('auth.logout')->middleware('auth');




Route::resource('/auth',TheAuthentication::class)->middleware('guest:web,company');
Route::post('/auth/login',[TheAuthentication::class,'login'])->name('auth.login')->middleware('guest:web,company');

Route::get('/profile',[ProfileController::class,'index'])->name('profile')->middleware('auth:web');
Route::get('/profile/update/general-info',[ProfileController::class,'updateGeneralinfoView'])->name('profile.view.update')->middleware('auth:web');
Route::post('/profile/update/general-info',[ProfileController::class,'update'])->name('profile.update')->middleware('auth:web');
Route::post('/profile/create',[ProfileController::class,'store'])->name('profile.store')->middleware('auth:web,company');
Route::get('/profile/company',[ProfileController::class,'indexCompany'])->name('profile.company')->middleware('auth:company');
Route::post('/profile/company',[ProfileController::class,'storeCompany'])->name('profile.storeCompany')->middleware('auth:company');




