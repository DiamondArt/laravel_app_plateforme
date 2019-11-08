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

// Home page
Route::view('/', 'home')->name('home');

// Authentication Routes...
Route::prefix('connexion')->group(function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/', 'Auth\LoginController@login');
});
Route::post('deconnexion', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::prefix('enregistrement')->group(function () {
    Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/', 'Auth\RegisterController@register');
});

// Password Reset Routes...
Route::prefix('passe')->group(function () {
    Route::get('change', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('change/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('change', 'Auth\ResetPasswordController@reset')->name('password.update');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// authentification avec un compte facebook et google

Route::get('{provider}/auth',[
    'uses'=>'SocialsController@auth',
    'as'=> 'social.auth'
]);
Route::get('{provider}/redirect',[
    'uses'=>'SocialsController@auth_callback',
    'as'=> 'social.callback'
]);

// confirm register route
Route::get('/confirmRegister', function () {
    return view('auth/confirmRegister');
});

// agent dashboard route

    Route::group(['prefix'=>'utilisateur','middleware'=>'user'],function() {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('actives', 'UserController@actives')->name('user.actives');
        Route::get('obsoletes', 'UserController@obsoletes')->name('user.obsoletes');
        Route::get('attente', 'UserController@attente')->name('user.attente');
        Route::get('email', 'UserController@emailEdit')->name('user.email.edit');
        Route::post('email', 'UserController@emailUpdate')->name('user.email.update');
        Route::get('abonnement','AbonnementsController@index')->name('user.abonnement.edit');
        Route::get('abonnementList/{id}','AbonnementsController@show')->name('user.abonnement.liste');

        Route::get('donnees', 'UserController@data')->name('user.data');
    });

// admin dashboard
Route::group(['prefix'=>'admin', 'middleware'=>'admin'],function() {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('email', 'AdminController@emailEdit')->name('user.admin.edit');
        Route::post('email', 'AdminController@emailUpdate')->name('user.admin.update');
        Route::get('donnees_membres_freelance', 'AdminController@freelanceListe')->name('user.admin.freelance');
        Route::get('donnees_membres_client', 'AdminController@clientListe')->name('user.admin.client');
        Route::post('Categories','CategoryController@store')->name('admin.categories.store');
        Route::get('abonnementInsert','AbonnementsController@create')->name('admin.abonnement.create');
        Route::post('abonnements','AbonnementsController@store')->name('admin.abonnement.store');
        Route::get('CategoriesCreate','CategoryController@create')->name('admin.categories.create');
        Route::get('CategoriesDelete','CategoryController@delete');
});


// client dashboard
Route::group(['prefix'=>'employeur','middleware'=>'employer'],function() {
    Route::get('/', 'EmployerController@index')->name('employer.index');
        Route::get('email', 'EmployerController@emailEdit')->name('user.employer.edit');
        Route::post('email', 'EmployerController@emailUpdate')->name('user.employer.update');
        Route::get('donnees', 'EmployerController@data')->name('user.data');
});
//  les profiles professionnel
Route::get('/pro', [
    'uses'=>'ProfileController@index',
    'as'=>'pros'
]);
Route::prefix('ProViews')->group(function(){
Route::get('/details{id}','ProfileController@show')->name('Prosviews');
});
Route::get('/update/todo/{id}',[
        'uses'=>"TodoController@update",
        'as'=>"todo.update"
        ]);
