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


Route::get('/', 'IndexController@index');





Auth::routes();
Route::get('auth/facebook', 'SocialAuthFacebookController@redirect');
Route::get('auth/facebook/callback', 'SocialAuthFacebookController@callback');
Route::get('auth/google', 'SocialAuthFacebookController@redirectg');
Route::get('auth/google/callback', 'SocialAuthFacebookController@callbackg');
Route::get('auth/twitter', 'SocialAuthFacebookController@redirectt');
Route::get('auth/twitter/callback', 'SocialAuthFacebookController@callbackt');
Route::get('/home', 'IndexController@index')->name('home');

Route::get('/profile','ProfileController@profile');
Route::get('/showprofile','ProfileController@index');
Route::post('/addProfile','ProfileController@addProfile');

Route::get('/changepass','ChangePasswordController@index')->name('changepass');
Route::post('/changepass','ChangePasswordController@addcreditcard');

Route::get('/stripe','StripeController@payWithStripe')->name('stripform');
Route::post('/stripe', 'StripeController@postPaymentWithStripe')->name('paywithstripe');
Route::get('/addcard', 'StripeController@addcard')->name('addcard');
Route::post('/addcard', 'StripeController@addcreditcard');

Route::get('/test',function(){
    return view('/auth/passwords/test');
});
Route::post('/read','ReadController@index');

/*
Route::get('/detail', function () {
    return view('bookDetail');
});
*/
Route::get('/detail','BookController@index');


Route::get('/addbook','BookController@addbook')->name('addbook');
Route::post('/addbook', 'BookController@addbooks')->name('addbook');
Route::post('/comment', 'BookController@addcomment');
Route::post('/dcomment', 'BookController@dcomment');
Route::post('/ecomment', 'BookController@ecomment');
Route::get('/mybook', 'MybookController@mybook');




