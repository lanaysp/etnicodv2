<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
// home
Route::post('/', 'HomeController@update')->name('root');


Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
// blog


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/cari', 'BlogController@cari')->name('cari');
Route::get('/detail-blog/{id}', 'BlogController@detail')->name('detail-blog');

Route::get('/blogcategories', 'BlogcategoryController@index')->name('blogcategories');
Route::get('/blogcategories/cari', 'BlogcategoryController@cari')->name('cari');
Route::get('/blogcategories/{id}', 'BlogcategoryController@detail')->name('blogcategories-detail');


// Registrasi email
Route::view('verifikasi-email', 'email')->middleware('verified');

Route::view('verifikasi-email', 'email')->middleware('verified');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/confirm', 'CartController@index')->name('cart');
    Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');

    Route::post('/checkout', 'CheckoutController@process')->name('checkout');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/product', 'DashboardController@product')->name('product');
    Route::get('/billing', 'DashboardController@billing')->name('billing');

    Route::get('/dashboard/products', 'DashboardProductController@index')
        ->name('dashboard-product');
    Route::get('/dashboard/products/create', 'DashboardProductController@create')
        ->name('dashboard-product-create');
    Route::post('/dashboard/products', 'DashboardProductController@store')
        ->name('dashboard-product-store');
    Route::get('/dashboard/products/{id}', 'DashboardProductController@details')
        ->name('dashboard-product-details');
    Route::post('/dashboard/products/{id}', 'DashboardProductController@update')
        ->name('dashboard-product-update');


    Route::post('/dashboard/products/gallery/upload', 'DashboardProductController@uploadGallery')
        ->name('dashboard-product-gallery-upload');
    Route::get('/dashboard/products/gallery/delete/{id}', 'DashboardProductController@deleteGallery')
        ->name('dashboard-product-gallery-delete');

    Route::get('/dashboard/transactions', 'DashboardTransactionController@index')
        ->name('dashboard-transaction');
    Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')
        ->name('dashboard-transaction-details');
    Route::post('/dashboard/transactions/{id}', 'DashboardTransactionController@update')
        ->name('dashboard-transaction-update');


    Route::get('/dashboard/settings', 'DashboardSettingController@store')
        ->name('dashboard-settings-store');
    Route::get('/dashboard/account', 'DashboardSettingController@account')
        ->name('dashboard-settings-account');
    Route::post('/dashboard/account/{redirect}', 'DashboardSettingController@update')
        ->name('dashboard-settings-redirect');
    Route::post('/dashboard/settings/{redirect}', 'DashboardSettingController@update_store')
        ->name('dashboard-settings-store-redirect');

// Ganti Password
    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');


});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('suport', 'SuportController');
        Route::resource('portfolio', 'PortfolioController');
        Route::resource('team', 'TeamController');
        Route::resource('user', 'UserController');
        Route::resource('blogcategory','BlogcategoryController');
        Route::resource('blog','BlogController');
    });

// Auth::routes();

