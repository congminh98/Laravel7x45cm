<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

// Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function ($route) {
        $route->get('/', [HomeController::class, 'index'])->name('home');
        // auth page
        $route->prefix('/account')->group(function ($route) {
            $route->get('/login', [LoginController::class, 'index'])->name('account.login.index')->middleware('guest');
            $route->post('/login', [LoginController::class, 'authenticate'])->name('account.login')->middleware('guest');
            $route->get('/register', [LoginController::class, 'index'])->name('account.register.index')->middleware('guest');
            $route->post('/register', [LoginController::class, 'authenticate'])->name('account.login')->middleware('guest');
            $route->post('/logout', [LoginController::class, 'logout'])->name('account.logout');
            // 
            $route->post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
            $route->post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
            $route->get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        });
        // social
        $route->prefix('/social')->group(function ($route) {
            $route->get('/google', [GoogleController::class, 'google'])->name('social.google.index')->middleware('guest');
            $route->get('/google/callback', [GoogleController::class, 'googleCallback'])->name('social.google.callback')->middleware('guest');
            $route->get('/facebook', [FacebookController::class, 'facebook'])->name('social.facebook.index')->middleware('guest');
            $route->get('/facebook/callback', [FacebookController::class, 'facebookCallback'])->name('social.facebook.callback')->middleware('guest');
            // 
            $route->get('/zalo', [ZaloController::class, 'zalo'])->name('social.zalo.index')->middleware('guest');
            $route->get('/zalo/callback', [ZaloController::class, 'zaloCallback'])->name('social.zalo.callback')->middleware('guest');
            //
            $route->post('/phone', [PhoneController::class, 'phoneRegister'])->name('social.phone.register')->middleware('guest');
        });
        // collections
        $route->prefix('/collections')->group(function ($route) {
            $route->get('/app-products', [CollectionController::class, 'allProducts'])->name('collections.products.all');
            $route->get('/accessories', [CollectionController::class, 'accessories'])->name('collections.accessories');
            $route->get('/shop', [CollectionController::class, 'shop'])->name('collections.shop');
            $route->get('/categories', [CollectionController::class, 'categories'])->name('collections.categories');
        });
        // produuct
        $route->prefix('/products')->group(function ($route) {
            $route->get('/{slug}', [ProductController::class, 'productsDetail'])->name('products.detail');
        });
        // contact
        $route->prefix('/contact')->group(function ($route) {
            $route->get('/', [ContactController::class, 'index'])->name('contact.index');
            $route->get('/version-2', [ContactController::class, 'index'])->name('contact.version2');
        });
        // about
        $route->prefix('/about')->group(function ($route) {
            $route->get('/', [AboutController::class, 'index'])->name('about.index');
            $route->get('/me', [AboutController::class, 'aboutMe'])->name('about.me');
            $route->get('/agency', [AboutController::class, 'aboutAgency'])->name('about.agency');
        });
        // faqs
        $route->prefix('/faqs')->group(function ($route) {
            $route->get('/', [FaqsController::class, 'index'])->name('faqs.index');
            $route->get('/version-2', [FaqsController::class, 'versionSecond'])->name('faqs.version2');
        });
        // cart
        $route->prefix('/cart')->group(function ($route) {
            $route->get('/', [CartController::class, 'index'])->name('cart.index');
        });
        // blog
        $route->prefix('/blog')->group(function ($route) {
            $route->get('/news', [BlogsController::class, 'news'])->name('blog.news');
            $route->get('/news/{slug}', [BlogsController::class, 'detail'])->name('blog.detail');
            $route->get('/masonry', [BlogsController::class, 'masonry'])->name('blog.masonry');
        });
    }
);
