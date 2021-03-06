<?php

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

//Site Inicio
Route::get('/', function () {
    return view('site');
});

//Route::get('/site', 'SiteController@index')->name('site');

//Site opções
Route::resource('movies', 'Site\\SiteMoviesController');
Route::resource('bookings', 'Site\\SiteBookingsController');

//Admin Inicio
Route::get('/admin', 'AdminController@index')->name('admin');

// Usuário, Login, Cadastro, Perfil, Cliente
Route::prefix('admin')->group(function(){
    Auth::routes();

    Route::group(['prefix' => 'users', 'as' => 'admin.users.'], function () {
        Route::name('settings.edit')->get('settings', 'Admin\UserSettingsController@edit');
        Route::name('settings.update')->put('settings', 'Admin\UserSettingsController@update');
    });

    Route::group([
        'namespace' => 'Admin\\',
        'as' => 'admin.',
        'middleware' => ['auth', 'can:admin']
    ], function(){
        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::group(['prefix' => '/{user}/profile'], function () {
                Route::name('profile.edit')->get('', 'UserProfileController@edit');
                Route::name('profile.update')->put('', 'UserProfileController@update');
            });
        });
        Route::resource('users', 'UsersController');
    });
});

//Admin opções
Route::resource('admin/genres', 'Admin\\GenresController');
Route::resource('admin/media-types', 'Admin\\MediaTypesController');
Route::resource('admin/movies', 'Admin\\MoviesController');
Route::resource('admin/distributors', 'Admin\\DistributorsController');
Route::resource('admin/items', 'Admin\\ItemsController');
Route::resource('admin/bookings', 'Admin\\BookingsController');
Route::resource('admin/leasings', 'Admin\\LeasingsController');
Route::resource('admin/payments', 'Admin\\PaymentsController');
Route::resource('admin/check-payments', 'Admin\\CheckPaymentsController');
Route::resource('admin/card-payments', 'Admin\\CardPaymentsController');