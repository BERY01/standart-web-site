<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\PageController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\ReferanceController;
use App\Http\Controllers\Back\ConfigController;


/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/
//Bakım Routeu
Route::get('site-bakimda',function(){
    return view('front.widgets.offline');
});

Route::prefix('Admin')->name('admin.')->middleware('isLogin')->group(function(){
    Route::get('Giris',[AuthController::class, 'login'], 'admin.login')->name('login');
    Route::post('Giris',[AuthController::class, 'loginPost'], 'admin.login.post')->name('login.post');
});

Route::prefix('Admin')->name('admin.')->middleware('isAdmin')->group(function(){
    Route::get('Panel',[Dashboard::class, 'index'], 'admin.dashboard')->name('dashboard');
    //Yaptığımız Çalışma Routları
    Route::get('/calismalar/silinenler',[ArticleController::class, 'trashed'],'admin.trashed')->name('trashed.article');
    Route::resource('calismalar',ArticleController::class);
    Route::get('/switch',[ArticleController::class, 'switch'],'admin.switch')->name('switch');
    Route::get('/deletearticle/{id}',[ArticleController::class, 'delete'],'admin.delete')->name('delete.article');
    Route::get('/harddeletearticle/{id}',[ArticleController::class, 'harddelete'],'admin.harddelete')->name('harddelete.article');
    Route::get('/recoverarticle/{id}',[ArticleController::class, 'recover'],'admin.recover')->name('recover.article');
    //Kategori Routeları
    Route::get('/kategoriler',[CategoryController::class, 'index'],'admin.category.index')->name('category.index');
    Route::post('/kategoriler/create',[CategoryController::class, 'create'],'admin.category.create')->name('category.create');
    Route::post('/kategoriler/update',[CategoryController::class, 'update'],'admin.category.update')->name('category.update');
    Route::post('/kategoriler/delete',[CategoryController::class, 'delete'],'admin.category.delete')->name('category.delete');
    Route::get('/kategori/status',[CategoryController::class, 'switch'],'admin.category.switch')->name('category.switch');
    Route::get('/kategori/getdata',[CategoryController::class, 'getdata'],'admin.category.getdata')->name('category.getdata');
    //Hakkımızda Routları
    Route::get('/hakkimizda',[PageController::class, 'index'],'admin.page.index')->name('page.index');
    Route::get('/hakkimizda/guncelle/{id}',[PageController::class, 'edit'],'admin.page.edit')->name('page.edit');
    Route::post('/hakkimizda/guncelle/{id}',[PageController::class, 'update'],'admin.page.update')->name('page.update');
    //İletişim Routları
    Route::get('/iletisim',[ContactController::class, 'index'],'admin.contacts.index')->name('contacts.index');
    //Slider Routları
    Route::resource('slider',SliderController::class);
    Route::get('/sil/{id}',[SliderController::class, 'delete'],'admin.sil')->name('sil.slider');
    //Referans Routları
    Route::resource('referans',ReferanceController::class);
    Route::get('/delete/{id}',[ReferanceController::class, 'delete'],'admin.delete')->name('delete.referans');
    //AYAR ROUTLARI
    Route::get('/ayarlar',[ConfigController::class, 'index'])->name('config.index');
    Route::post('/ayarlar/update',[ConfigController::class, 'update'])->name('config.update');
    //Çıkış
    Route::get('cikis',[AuthController::class, 'logout'], 'admin.logout')->name('logout');

});




/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [Homepage::class, 'index'])->name('homepage');
Route::get('/hizmetler/sayfa', [Homepage::class, 'index']);
Route::get('/kategori/{category}/{id}', [Homepage::class, 'category'])->name('category');
Route::get('/{category}/{slug}', [Homepage::class, 'single'])->name('single');
Route::get('/iletisim', [Homepage::class, 'contact'])->name('contact');
Route::post('/iletisim', [Homepage::class, 'contactpost'])->name('contact.post');

