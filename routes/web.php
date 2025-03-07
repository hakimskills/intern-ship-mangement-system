<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SendOfferController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfferController;







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
    if (!session()->has('visited')) {
        session(['visited' => true]);
        return view('getS');
    }
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All student Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user','prevent-back-history', 'first-login'])->group(function () {
    Route::get('form', [FormController::class, 'index'])->name('send.req');
    Route::get('/home', [HomeController::class,  'index'])->name('home');
    Route::post('store-form', [FormController::class, 'store']);

    Route::get('/offer', [OfferController::class, 'index'])->name('offer');
    Route::get('/recentReq', [EmployeeController::class, 'index2'])->name('recentReq');
    Route::get('/get-managers/{companyId}', function ($companyName) {
        $managers =  App\Models\User::select('users.id', 'users.name', 'users.last_name', 'users.email')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->where('companies.comp_name', $companyName)
            ->get();

        return $managers;
    });
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}/delete', [EmployeeController::class, 'delete'])->name('employees.delete');
    Route::delete('/notification/{notification}/delete', [NotificationController::class, 'delete'])->name('not.delete');
    Route::get('/update-info', [HomeController::class, 'showUpdateInfoForm'])->name('update-info-form');
    Route::put('/update-info', [HomeController::class, 'updateUserInfo'])->name('update-info');

    Route::match(['get', 'post'], 'store/{offer}', [OfferController::class, 'store'])->name('accept.offer');
    Route::get('/mark', [GradeController::class, 'mark'])->name('mark');
    Route::get('/employee/{id}/pdf', [CertificateController::class, 'createPDF'])->name('create.pdf');
    Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('more.offer');




});


/*------------------------------------------
--------------------------------------------
All head of department Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin','prevent-back-history'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/list', [EmployeeController::class, 'index'])->name('list');
    Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
    Route::post('/employees/{id}/accept/{email}/{comp_name}', [EmployeeController::class, 'acceptEmployee'])->name('acceptEmployee');

    Route::post('/employees/{id}/refuse', [EmployeeController::class, 'refuseEmployee'])->name('refuseEmployee');

});

/*------------------------------------------
--------------------------------------------
All internship manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager','prevent-back-history'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/company/list2', [EmployeeController::class, 'listInManager'])->name('list2');
    Route::get('/offerInternship', [SendOfferController::class, 'index']);
    Route::get('/student/{idAccepted}', [EmployeeController::class, 'showInManager'])->name('employees.showInManager');
    Route::post('/student/{id}/acceptByMangaer', [EmployeeController::class, 'acceptByManager'])->name('acceptByManager');
    Route::post('/student   /{id}/refuseByMangaer', [EmployeeController::class, 'refuseByManager'])->name('refuseByManager');
    Route::get('/about', [HomeController::class, 'manager'])->name('about.home');
    Route::post('store-offer', [SendOfferController::class, 'store']);
    Route::get('/interns/{id}/grade', [GradeController::class, 'index'])->name('interns.grade');
    Route::get('/internship', [GradeController::class, 'listInManager'])->name('interns');
    Route::post('/absences/{employeeId}',  [GradeController::class, 'saveAbsences'])->name('absences.save');
    Route::post('/manage-employee/{id}', [GradeController::class, 'manage'])->name('manage.employee.submit');
    Route::get('/interns/{id}/rate', [GradeController::class, 'rateForm'])->name('rate.grade');
    Route::post('/rate-employee/{id}', [GradeController::class, 'rate'])->name('rate.employee.submit');
    Route::post('/upload-logo',[HomeController::class, 'uploadLogo'] )->name('upload-logo');
    Route::get('/update-info-manager', [HomeController::class, 'UpdateInfoManager'])->name('update-info-Manager');
    Route::put('/update-info-manager', [HomeController::class, 'updateManagerInfo'])->name('update-info-manager');

});

