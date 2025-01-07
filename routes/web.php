<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PartyController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

#AUTENTICAÇÃO
Auth::routes();

#SITE ABERTO / SEM MIDDLEWARE
Route::get('/', [HomeController::class, 'index'])->name('home.index');

#LADO SHOP
Route::get('/shop/city/{city_slug}', [ShopController::class, 'city_index'])->name('shop.city.index');

// #CARRINHO DE COMPRAS
Route::post('/cart/add/{candidateId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::delete('/cart/remove/{rowId}', [CartController::class, 'remove_item'])->name('cart.item.remove');
Route::delete('/cart/remove', [CartController::class, 'empty_cart'])->name('cart.empty');

// #CONTA DO USUÁRIO FINAL (CONSUMIDOR)
Route::middleware(['auth'])->group(function() {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
});

#CHECKOUT
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('cart.checkout');
// Route::post('/place-an-order', [CheckoutController::class, 'place_an_order'])->name('cart.place.an.order');
Route::get('/order-confirmation', [CheckoutController::class, 'order_confirmation'])->name('cart.order.confirmation');

// #CONTA DO ADMINISTRADOR
Route::middleware(['auth', AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/admin/cities', CityController::class)->names('admin.cities');
    Route::resource('/admin/parties', PartyController::class)->names('admin.parties');
    Route::resource('/admin/candidates', CandidateController::class)->names('admin.candidates');
    Route::resource('/admin/slides', SlideController::class)->names('admin.slides');

    
    
    #CONTAS DE USUÁRIOS
    Route::resource('/admin/users', AccountController::class)->names('admin.account');    
});
