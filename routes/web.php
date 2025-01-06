<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PartyController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');


// #CONTA DO USUÁRIO FINAL (CONSUMIDOR)
Route::middleware(['auth'])->group(function() {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
    
});

// #CONTA DO ADMINISTRADOR
Route::middleware(['auth', AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/admin/cities', CityController::class)->names('admin.cities');
    Route::resource('/admin/parties', PartyController::class)->names('admin.parties');
    Route::resource('/admin/candidates', CandidateController::class)->names('admin.candidates');
    Route::resource('/admin/slides', SlideController::class)->names('admin.slides');

    #LADO SHOP
    Route::get('/shop/city/{city_slug}', [ShopController::class, 'city_index'])->name('shop.city.index');
    

    #CONTAS DE USUÁRIOS
    Route::resource('/admin/users', AccountController::class)->names('admin.account');    
});
