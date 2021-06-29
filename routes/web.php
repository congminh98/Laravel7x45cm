<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Blogs\BlogsController;
use App\Http\Controllers\Collections\CartController;
use App\Http\Controllers\Collections\CollectionController;
use App\Http\Controllers\Collections\ProductController;
use App\Http\Controllers\Communicaties\AboutController;
use App\Http\Controllers\Communicaties\ContactController;
use App\Http\Controllers\Communicaties\FaqsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Social\FacebookController;
use App\Http\Controllers\Social\GoogleController;
use App\Http\Controllers\Social\PhoneController;
use App\Http\Controllers\Social\ZaloController;
use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        // auth page
        Route::prefix('/account')->group(function () {
            Route::get('/login', [LoginController::class, 'index'])->name('account.login.index')->middleware('guest');
            Route::post('/login', [LoginController::class, 'authenticate'])->name('account.login')->middleware('guest');
            Route::post('/logout', [LoginController::class, 'logout'])->name('account.logout');
        });
        // social
        Route::prefix('/social')->group(function () {
            Route::get('/google', [GoogleController::class, 'google'])->name('social.google.index')->middleware('guest');
            Route::get('/google/callback', [GoogleController::class, 'googleCallback'])->name('social.google.callback')->middleware('guest');
            Route::get('/facebook', [FacebookController::class, 'facebook'])->name('social.facebook.index')->middleware('guest');
            Route::get('/facebook/callback', [FacebookController::class, 'facebookCallback'])->name('social.facebook.callback')->middleware('guest');
            // 
            Route::get('/zalo', [ZaloController::class, 'zalo'])->name('social.zalo.index')->middleware('guest');
            Route::get('/zalo/callback', [ZaloController::class, 'zaloCallback'])->name('social.zalo.callback')->middleware('guest');
            //
            Route::post('/phone', [PhoneController::class, 'phoneRegister'])->name('social.phone.register')->middleware('guest');
        });
        // collections
        Route::prefix('/collections')->group(function () {
            Route::get('/app-products', [CollectionController::class, 'allProducts'])->name('collections.products.all');
            Route::get('/accessories', [CollectionController::class, 'accessories'])->name('collections.accessories');
            Route::get('/shop', [CollectionController::class, 'shop'])->name('collections.shop');
            Route::get('/categories', [CollectionController::class, 'categories'])->name('collections.categories');
        });
        // produuct
        Route::prefix('/products')->group(function () {
            Route::get('/{slug}', [ProductController::class, 'productsDetail'])->name('products.detail');
        });
        // contact
        Route::prefix('/contact')->group(function () {
            Route::get('/', [ContactController::class, 'index'])->name('contact.index');
            Route::get('/version-2', [ContactController::class, 'index'])->name('contact.version2');
        });
        // about
        Route::prefix('/about')->group(function () {
            Route::get('/', [AboutController::class, 'index'])->name('about.index');
            Route::get('/me', [AboutController::class, 'aboutMe'])->name('about.me');
            Route::get('/agency', [AboutController::class, 'aboutAgency'])->name('about.agency');
        });
        // faqs
        Route::prefix('/faqs')->group(function () {
            Route::get('/', [FaqsController::class, 'index'])->name('faqs.index');
            Route::get('/version-2', [FaqsController::class, 'versionSecond'])->name('faqs.version2');
        });
        // cart
        Route::prefix('/cart')->group(function () {
            Route::get('/', [CartController::class, 'index'])->name('cart.index');
        });
        // blog
        Route::prefix('/blog')->group(function () {
            Route::get('/news', [BlogsController::class, 'news'])->name('blog.news');
            Route::get('/news/{slug}', [BlogsController::class, 'detail'])->name('blog.detail');
            Route::get('/masonry', [BlogsController::class, 'masonry'])->name('blog.masonry');
        });
    }
);
