<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Frontend\CareerController as FrontendCareerController;
// use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\UserController;
//use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\ProfileController;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('User')->group(function(){

    Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';







// frontend part

Route::get('/',[UserController::class,'Indedx'])->name('index.page');

Route::get('/service',[UserController::class,'ServicePage'])->name('service.page');
Route::get('/service/details/{id}',[UserController::class,'ServiceDetais'])->name('service.details');


Route::get('/career',[FrontendCareerController::class,'CareerPage'])->name('career.page');

Route::get('/career/details/{id}',[FrontendCareerController::class,'careerDetailPage'])->name('career.details');



Route::get('/career/cv/store',[FrontendCareerController::class,'careerCvStore'])->name('career.cv.store');

Route::get('/career/deatils',[UserController::class,'CareerDetails'])->name('career.deatils');

// contact page
Route::get('/contact',[FrontendContactController::class,'ContactPage'])->name('contact.page');

Route::post('/contact/store',[FrontendContactController::class,'ContactStore'])->name('contact.store');


Route::get('/about',[UserController::class,'AboutPage'])->name('about.page');










// Admin Authentication

Route::get('/admin/login',[AdminController::class,'AdminLoginForm']); 
//Route::post('/admin/login',[AdminController::class,'AdminLogin']); 




Route::middleware(['Admin'])->group(function () {
    
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard'); 
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');

    

    //admin profile
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');






    //backend  Team  part

     Route::get('/add/team',[TeamController::class,'addTeam'])->name('add.team');
     Route::post('/store/team',[TeamController::class,'StoreTeam'])->name('store.team');
     Route::get('/all/team',[TeamController::class,'allTeam'])->name('all.team');

     Route::get('/edit/team/{id}',[TeamController::class,'editTeam'])->name('edit.team');
     Route::get('/delete/team/{id}',[TeamController::class,'deleteTeam'])->name('delete.team');



    //backend  Services part
     Route::get('/all/services',[ServicesController::class,'allServices'])->name('services.all');
     Route::get('/add/services',[ServicesController::class,'addServices'])->name('services.add');
     Route::post('/store/services',[ServicesController::class,'storeServices'])->name('services.store'); 

     Route::get('/delete/services/{id}',[ServicesController::class,'deleteServices'])->name('delete.services');

       //backend  subcategory  part


Route::get('/all/career',[CareerController::class,'allCareer'])->name('all.career');
Route::get('/add/career',[CareerController::class,'addCareer'])->name('add.career');

Route::post('/store/career',[CareerController::class,'storeCareer'])->name('store.career');
Route::get('/delete/career/{id}',[CareerController::class,'deleteCareer'])->name('delete.career');


Route::get('/all/contact',[ContactController::class,'contactAllBackend'])->name('all.contact.backend');


});

