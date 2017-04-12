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


Route::get('/','homeController@index');
Route::post('/search','homeController@search');
Route::get('chitiet/{id}','homeController@chitiet');
Route::post('chitiet/{id}','homeController@postComment');


Route::get('register', 'registerController@register');
Route::post('register', 'registerController@postRegister');

Route::get('login','loginController@login');
Route::post('login','loginController@postLogin');

Route::get('logout','loginController@logout');

Route::get('forgot-password','forgotPasswordController@forgotPassword');
Route::post('forgot-password','forgotPasswordController@postForgotPassword');

Route::get('reset-password/{email}/{resetCode}','forgotPasswordController@resetPassword');
Route::post('reset-password/{email}/{resetCode}','forgotPasswordController@postResetPassword');

Route::get('activate/{email}/{activationCode}','activationController@activate');

Route::group(['prefix' => 'admin','middleware' =>'admin'], function () {
  Route::get('dashboard','dashboardController@dashboard');
  Route::group(['prefix' => 'categories'], function () {
    Route::get('all','categoriesManagementController@all');

    Route::get('add','categoriesManagementController@getAdd');
    Route::post('add','categoriesManagementController@postAdd');

    Route::get('edit/{id}','categoriesManagementController@getEdit');
    Route::post('edit/{id}','categoriesManagementController@postEdit');

    Route::get('delete/{id}','categoriesManagementController@delete');
  });
  Route::group(['prefix' => 'posts'], function () {
    Route::get('all','postsManagementController@all');

    Route::get('add','postsManagementController@getAdd');
    Route::post('add','postsManagementController@postAdd');

    Route::get('edit/{id}','postsManagementController@getEdit');
    Route::post('edit/{id}','postsManagementController@postEdit');

    Route::get('delete/{id}','postsManagementController@delete');
  });
  Route::group(['prefix' => 'user-setting'], function () {
    Route::get('list-user','UserSettingsController@listUser');
    Route::get('activations','UserSettingsController@activations');
    Route::get('user-role','UserSettingsController@userRole');
  });
    Route::group(['prefix' => 'comment'], function () {
    Route::get('all','commentController@all');

    Route::get('edit/{id}','commentController@all@getEdit');
    Route::get('edit/{id}','commentController@postEdit');

    Route::get('commentByPost/{id}','commentController@commentByPost');

    Route::get('duyetComment/{id}','commentController@duyetConmment');
    Route::post('duyetComment/{id}','commentController@duyetComment');

    Route::get('delete/{id}','commentController@delete');
  });
});
