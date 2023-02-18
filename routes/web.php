<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\adminController;

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
    return view('First');
});

//['verify'=> true ]
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::get('/admin/logout', [HomeController::class, 'adminlogout'])->name('admin.logout')->middleware('is_admin');
    Route::get('/user/logout', [HomeController::class, 'userlogout'])->name('user.logout');
    Route::get('/take/room', [HomeController::class, 'getRoom'])->name('get.room');

    Route::get('/add-relative', [adminController::class, 'addRelative'])->name('relative');
    Route::get('/add-Supervisors', [adminController::class, 'addSupervisors'])->name('Supervisors');
    Route::get('/add-Guards', [adminController::class, 'addGuards'])->name('Guards');
    Route::get('/add-Faculties', [adminController::class, 'addFaculties'])->name('Faculties')->middleware('is_admin');
    Route::get('/add-Sections', [adminController::class, 'addSections'])->name('Sections');
    Route::get('/add-Students', [adminController::class, 'addStudents'])->name('Students');
    Route::view('/reg-success','re-success')->name('success');
    

});
