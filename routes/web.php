<?php

use App\Http\Controllers\AdminPanel\AdminTransferController ;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RezervationController;
use App\Http\Controllers\UserController;
use App\Models\Rezervation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController ;
use App\Http\Controllers\AdminPanel\MessageController as AdminMessageController ;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::get('/transfer/{id}', [HomeController::class,'transfer'])->name('transfer');
Route::get('/categorytransfers/{id}/{slug}', [HomeController::class,'categorytransfers'])->name('categorytransfers');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::get('/mytransfer', [HomeController::class,'mytransfer'])->name('mytransfer');
Route::get('/mycomment', [HomeController::class,'mycomment'])->name('mycomment');
Route::get('/mymessages', [HomeController::class,'mymessages'])->name('mymessages');

////-----------admin rezervation routes-------------
Route::prefix('/rezervation')->name('rezervation.')->controller(RezervationController::class)->group(function() {
    Route::post('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}',  'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');

});
//-----------admin panel routes-------------
Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function() {
  Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    ////-----------admin general setting routes-------------
  Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting/{id}', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
    ////-----------admin category routes-------------
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
    Route::get('/',  'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}',  'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');

    });
    ////-----------admin Transfer routes-------------
    Route::prefix('/transfer')->name('transfer.')->controller(AdminTransferController::class)->group(function() {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });

    ////-----------admin image gallery routes-------------
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function() {
        Route::get('/{pid}',  'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
       Route::get('/destroy/{pid}/{id}',  'destroy')->name('destroy');


    });
    ////-----------admin  message routes-------------
    Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function() {
        Route::get('/',  'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });

    ////-----------admin  faq routes-------------
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function() {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');


    });
    ////-----------admin  comment routes-------------
        Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function() {
            Route::get('/',  'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}',  'destroy')->name('destroy');
        });

    ////-----------admin  rezervation routes-------------
    Route::prefix('/rezervation')->name('rezervation.')->controller(\App\Http\Controllers\AdminPanel\RezervationController::class)->group(function() {
        Route::get('/',  'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });
////-----------admin  user routes-------------
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function() {
        Route::get('/',  'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/destroyrole/{uid}/{rid}',  'destroyrole')->name('destroyrole');
    });




    });
Route::middleware(['auth'])->prefix('myaccount')->namespace('user')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});

