<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PaymentController;
use App\Http\Controllers\siteadmin\HomeController as SiteadminHomeController;
use App\Http\Controllers\siteadmin\LoginController as adminLoginController;
use App\Http\Controllers\siteadmin\LogoutController;
use App\Http\Controllers\siteadmin\ReportController;
use App\Http\Controllers\siteadmin\AdminProfileController;
use App\Http\Controllers\siteadmin\RoleController;
use App\Http\Controllers\siteadmin\UserController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    dd("cache clear All");
});

Route::get('/',[HomeController::class,'index']);
Route::get('/aboutus', [HomeController::class, 'about']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/policy', [HomeController::class, 'policy']);
Route::get('/contactus', [HomeController::class, 'contact']);
Route::get('/donate', [HomeController::class, 'donate']);
Route::get('/donatenow/{id}', [PaymentController::class, 'index']);
Route::post('/savecontact', [HomeController::class, 'savecontact']);

Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);

Route::post('/ccavRequestHandler', [PaymentController::class, 'initiateTransaction']);
Route::post('/ccavResponseHandler', [PaymentController::class, 'handleResponse']);
Route::get('/sendEmail/{id}',[PaymentController::class,'sendReceiptEmail']);
Route::get('/download/{id}',[PaymentController::class,'downloadReceipt']);

Route::prefix('siteadmin')->group(function () {
    Route::get('/dashboard', [SiteadminHomeController::class, 'index'])->middleware('adminUser');  
    Route::get('/', [adminLoginController::class, 'showAdminLoginForm']);
    Route::get('/login', [adminLoginController::class, 'showAdminLoginForm']);
    Route::post('/login', [adminLoginController::class, 'adminLogin'])->name('adminlogin');
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
   
    Route::group(['prefix'=>'Role'],function(){
        Route::get('/', [RoleController::class,'index'])->middleware('viewrole')->middleware('adminUser');
        Route::get('/Add', [RoleController::class,'add'])->middleware('addrole');
        Route::get('/Add/{id}', [RoleController::class,'add'])->middleware('editrole');
        Route::get('/delete/{id}', [RoleController::class,'delete'])->middleware('deleterole');
        Route::post('/saveRole', [RoleController::class,'save']);
    });
    Route::group(['prefix'=>'User'],function(){
        Route::get('/', [UserController::class,'index'])->middleware('viewuser')->middleware('adminUser');
        Route::get('/Add', [UserController::class,'add'])->middleware('adduser');
        Route::get('/Add/{id}', [UserController::class,'add'])->middleware('edituser');
        Route::get('/delete/{id}', [UserController::class,'delete'])->middleware('deleteuser');
        Route::post('/save', [UserController::class,'save']);
    });
    Route::group(['prefix'=>'dashboard'],function(){
        Route::post('/getBoxvalue',[SiteadminHomeController::class,'getBoxvalue']);
    });
   
    Route::group(['prefix'=>'report'],function(){
        Route::get('/orderReport',[ReportController::class,'orderReport']);
        Route::get('/sendEmail/{id}',[ReportController::class,'sendEmail']);
        Route::post('/getOrderData',[ReportController::class,'getOrderData']);
        Route::get('/exportOrder',[ReportController::class,'exportOrder']);
        Route::get('/pdfOrder',[ReportController::class,'pdfOrder']); 
    });
});

Route::prefix('siteadmin')->middleware('adminUser')->group(function () {
    Route::get('profile', [AdminProfileController::class, 'index']);
    Route::post('updateprofile', [AdminProfileController::class, 'UpdateProfile']);
});

