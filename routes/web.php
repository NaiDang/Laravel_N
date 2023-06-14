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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('calculationView');
// });

// Route::get('/welcome', function () {
//     return 'Chào mừng đến với PNV';
// });
// Route::get('/xinchao', [App\Http\Controllers\ExController::class,'xinchao']);
    
// Route::get('/tinhtong',[App\http\Controllers\tinhTongController::class,'tinhtong']);

// Route::post('/tinhtong',[App\http\Controllers\tinhTongController::class,'tinhtong']);

// Route::get('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);

// Route::post('/computeArea',[App\http\Controllers\AreaofshapeController::class,'computeArea']);

// Route::get('/displayInfo',[App\http\Controllers\FormController::class,'index']);
// Route::post('/displayInfo',[App\http\Controllers\FormController::class,'displayInfo']);

// Route::get('form-signup',"FormController@index");
// Route::post('form-signup',"FormController@displayInfo");

Route::get('/home',[App\Http\Controllers\PageController::class,'getIndex']);
 
Route::get('/detail/{id}', [App\Http\Controllers\PageController::class,'getDetail']);

Route::get('/type/{id}', [App\Http\Controllers\PageController::class,'getLoaiSp']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);																										
Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');														
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);												
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [App\Http\Controllers\PageController::class, 'postAdminEdit']);																
Route::post('/admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete'])->name('delete-product');
Route::post('/admin-export', [App\Http\Controllers\PageController::class, 'exportAdminProduct'])->name('export');


Route::get('/register', function () {return view('users.register');});
Route::post('/register',[App\Http\Controllers\UserController::class,'Register']);						

Route::get('/login', function () { return view('users.login');});	
Route::post('/login',[App\Http\Controllers\UserController::class,'login']);


Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');											
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');											










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

			
// Route::get('/register', function () {		
// 	return view('users.register');		
// 	});		

// Route::get('/login', function () {		
//     return view('users.login');		
//     });	

// Route::get('/mas', [App\Http\Controllers\PageController::class,'getIndex']);
// Route::get('/detail/{id}', [App\Http\Controllers\PageController::class,'getDetail']);

// Route::get('/type/{id}', [App\Http\Controllers\PageController::class,'getLoaiSp']);

// Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);												
														
// Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');														
// Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);												
// Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
// Route::post('/admin-edit', [App\Http\Controllers\PageController::class, 'postAdminEdit']);
																
// Route::post('/admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete'])->name('delete-product');
// Route::post('/admin-export', [App\Http\Controllers\PageController::class, 'exportAdminProduct'])->name('export');
