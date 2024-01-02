<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanySettings;
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

Route::get('/test',function () {
    return view('test');
});


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

// Start Company Profile

Route::get('/company/profile',[CompanySettings::class,'profile'])->name('company.profile')->middleware('auth:company');
Route::post('/company/profile',[CompanySettings::class,'companyProfile'])->name('company.profile.post')->middleware('auth:company');
Route::get('/company/settings',[CompanySettings::class,'companySettings'])->name('company.settings')->middleware('auth:company');
Route::get('/company/location',[CompanySettings::class,'location'])->name('company.location')->middleware('auth:company');
Route::post('/company/location',[CompanySettings::class,'locationPost'])->name('company.location.post')->middleware('auth:company');
Route::get('/company/links',[CompanySettings::class,'links'])->name('company.links')->middleware('auth:company');
Route::post('/company/links',[CompanySettings::class,'linksPost'])->name('company.links.post')->middleware('auth:company');
Route::post('/company/settings',[CompanySettings::class,'companyProfile'])->name('company.profile.settings')->middleware('auth:company');
Route::post('/company/settings/photo',[CompanySettings::class,'changePhoto'])->name('company.profile.photo')->middleware('auth:company');

// End Company Profile



Route::get('/job',[JobController::class,'index'])->name('job.index')->middleware('auth:company,web');
Route::get('/job/question/{id}',[JobController::class,'question'])->name('job.question')->middleware('auth:company,web');
Route::get('/job/question/create/{id}',[JobController::class,'questionView'])->name('job.question.create')->middleware('auth:company');
Route::post('/job/question/create/{id}',[JobController::class,'questionCreate'])->name('job.question.create.post')->middleware('auth:company');
Route::get('/job/saved',[JobController::class,'saved'])->name('job.saved')->middleware('auth:company,web');
Route::get('/job/{id}',[JobController::class,'show'])->name('job.show')->middleware('auth:company,web');
Route::post('/application',[JobController::class,'applicationPost'])->name('job.application.post')->middleware('auth:company,web');
Route::get('/applications',[JobController::class,'applications'])->name('job.applications')->middleware('auth:company,web');
Route::get('/applications/archive',[JobController::class,'archive'])->name('job.archive')->middleware('auth:company,web');



Route::post('/auth/logout',[TheAuthentication::class,'logout'])->name('auth.logout')->middleware('auth');




Route::resource('/auth',TheAuthentication::class)->middleware('guest:web,company');
Route::post('/auth/login',[TheAuthentication::class,'login'])->name('auth.login')->middleware('guest:web,company');

// Start User Prfile

Route::get('/profile',[ProfileController::class,'index'])->name('profile')->middleware('auth:web');
Route::get('/profile/update/general-info',[ProfileController::class,'updateGeneralinfoView'])->name('profile.general-info')->middleware('auth:web');
Route::get('/profile/update/career-interests',[ProfileController::class,'career'])->name('update.profile.career')->middleware('auth:web');
Route::get('/profile/upload/cv',[ProfileController::class,'uploadCv'])->name('update.profile.cv')->middleware('auth:web');
Route::post('/profile/upload/cv',[ProfileController::class,'createCV'])->name('update.profile.cv.post')->middleware('auth:web');
Route::get('/profile/update/experience',[ProfileController::class,'experience'])->name('update.experience')->middleware('auth:web');
Route::get('/profile/update/skills',[ProfileController::class,'skills'])->name('update.skills')->middleware('auth:web');
Route::post('/profile/update/addskills',[ProfileController::class,'addSkill'])->name('add.skills.post')->middleware('auth:web');
Route::post('/profile/update/skills',[ProfileController::class,'updateSkill'])->name('update.skills.post')->middleware('auth:web');
Route::get('/profile/update/education',[ProfileController::class,'education'])->name('update.education')->middleware('auth:web');
Route::get('/profile/update/online-presence',[ProfileController::class,'onlinePresence'])->name('update.online.presence')->middleware('auth:web');
Route::post('/profile/update/online-presence',[ProfileController::class,'createOnlinePresence'])->name('update.online.presence.post')->middleware('auth:web');
Route::get('/profile/update/additional-info',[ProfileController::class,'achievements'])->name('update.achievements')->middleware('auth:web');
Route::post('/profile/update/additional-info',[ProfileController::class,'postAchievements'])->name('update.achievements.post')->middleware('auth:web');
Route::get('/settings/account',[ProfileController::class,'settings'])->name('settings.account')->middleware('auth:web');
Route::post('/profile/update/general-info',[ProfileController::class,'update'])->name('profile.update')->middleware('auth:web');
Route::post('/profile/create',[ProfileController::class,'store'])->name('profile.store')->middleware('auth:web,company');
Route::get('/profile/company',[ProfileController::class,'indexCompany'])->name('profile.company')->middleware('auth:company');
Route::post('/profile/company',[ProfileController::class,'storeCompany'])->name('profile.storeCompany')->middleware('auth:company');

// End User Prfile