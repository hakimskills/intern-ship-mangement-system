<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfferController;



Route::post('store-form', [FormController::class, 'store']);


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
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user','prevent-back-history'])->group(function () {
    Route::get('form', [FormController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/offer', [OfferController::class, 'index'])->name('offer');
    Route::get('/recentReq', [EmployeeController::class, 'index2'])->name('recentReq');
});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin','prevent-back-history'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');


    Route::get('/list', [EmployeeController::class, 'index'])->name('list');

    Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');

    Route::post('/employees/{id}/accept', [EmployeeController::class, 'acceptEmployee'])->name('acceptEmployee');
    Route::post('/employees/{id}/refuse', [EmployeeController::class, 'refuseEmployee'])->name('refuseEmployee');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager','prevent-back-history'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/list2', function () {
        return view('list2');
    });
    Route::get('/offerInternship', function () {
        return view('/entreprise/offre2');
    });

});

