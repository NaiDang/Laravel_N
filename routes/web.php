<?php

use Illuminate\Support\Facades\Route;

// use laravel\app\Http\Controllers\ExController;

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

Route::get('/', function () {
    return view('calculationView');
});

Route::get('/welcome', function () {
    return 'Chào mừng đến với PNV';
});
Route::get('/xinchao', [App\Http\Controllers\ExController::class,'xinchao']);
    
Route::get('/tinhtong',[App\http\Controllers\tinhTongController::class,'tinhtong']);

Route::post('/tinhtong',[App\http\Controllers\tinhTongController::class,'tinhtong']);

Route::get('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);

Route::post('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);

Route::get('/displayInfo',[App\http\Controllers\FormController::class,'index']);
Route::post('/displayInfo',[App\http\Controllers\FormController::class,'displayInfo']);

Route::get('form-signup',"FormController@index");
Route::post('form-signup',"FormController@displayInfo");

Route::get('/n',[App\http\Controllers\PageController::class,'getIndex']);
Route::get('/sanpham',[App\http\Controllers\PageController::class,'getLoaiSp']);
Route::get('/chitietsanpham',[App\http\Controllers\PageController::class,'getChitiet']);
Route::get('/lienhe',[App\http\Controllers\PageController::class,'getLienhe']);
Route::get('/about',[App\http\Controllers\PageController::class,'getAbout']);

Route::get('database', function () {
    if (!Schema::hasTable('loaisanpham')) {
        Schema::create('loaisanpham', function ($table) {
            $table->increments('id');
            $table->string('ten', 200);
        });
        echo "Tạo bảng thành công";
    } else {
        echo "Bảng đã tồn tại";
    }
});
