<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin\CaregoriesBlog;
use Illuminate\Support\Facades\Auth;

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


/*мои начало */
Route::get('/',function(){
    return view('main');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'App\Http\Controllers\EmailController@submit')->name('contact-form');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/',[App\Http\Controllers\Admin\MyHomeController::class, 'index'])->name('homeAdmin'); //admin
    Route::resource('categories_blog',CaregoriesBlog::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/work/{id}',[App\Http\Controllers\PortfolioController::class, 'getOne']);
    Route::get('/work/{id}/update',[App\Http\Controllers\PortfolioController::class, 'updateWork'])->name('work-update');
    Route::post('/work/{id}/update',[App\Http\Controllers\PortfolioController::class, 'updateWorkSubmit'])->name('work-update-submit');
    Route::get('/work/{id}/delete',[App\Http\Controllers\PortfolioController::class, 'getDelete'])->name('work-delete');
});
Route::middleware(['role:writer'])->prefix('personal_account')->group(function () {//авторизованный пользователь
    Route::get('/test1',function(){
        return view('test1');
    })->name('test1');
});


/*мои конец */


Auth::routes();
//ajax
Route::post('/ajax',[App\Http\Controllers\AjaxController::class, 'postIndex']);
//posts
Route::post('/portfolio/add',[App\Http\Controllers\PortfolioController::class, 'postIndex'])->middleware('checkauth');
//get
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth']],function(){
    //Route::get('/work/delete/{id}',[App\Http\Controllers\PortfolioController::class, 'getDelete']);
});
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'getAll']);
Route::get('/work/{id}',[App\Http\Controllers\PortfolioController::class, 'getOne']);
Route::get('{url?}', [Controllers\MaintextController::class, 'getIndex']);



