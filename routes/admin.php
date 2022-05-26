<?php

use Illuminate\Support\Facades\Route;

// Dashboard

Route::get('/', 'HomeController@index')->name('home');


Route::get('/list', 'NftController@list')->name('nftlist');
Route::get('/create', 'NftController@create')->name('nftcreate');
Route::get('/edit/{nft}', 'NftController@edit')->name('nftedit');
Route::get('/view/{nft}', 'NftController@view')->name('nftview');
Route::post('/save', 'NftController@save')->name('nftsave');
Route::get('/delete/{id}', 'NftController@destroy')->name('nftdestroy');
Route::get('/changestatus/{id}', 'NftController@change_status')->name('nftstatus');
Route::post('/update', 'NftController@update')->name('nftupdate');


Route::get('/newslist', 'NewsController@list')->name('newslist');
Route::get('/newscreate', 'NewsController@create')->name('newscreate');
Route::get('/newsedit/{new}', 'NewsController@edit')->name('newsedit');
Route::get('/newsview/{new}', 'NewsController@view')->name('newsview');
Route::post('/newssave', 'NewsController@save')->name('newssave');
Route::get('/newsdelete/{id}', 'NewsController@destroy')->name('newsdestroy');
Route::post('/newsupdate', 'NewsController@update')->name('newsupdate');


Route::get('/faqslist', 'FaqsController@list')->name('faqslist');
Route::get('/faqscreate', 'FaqsController@create')->name('faqscreate');
Route::post('/faqssave', 'FaqsController@save')->name('faqssave');
Route::get('/faqsedit/{faq}', 'FaqsController@edit')->name('faqsedit');
Route::get('/faqsview/{faq}', 'FaqsController@view')->name('faqsview');
Route::post('/faqssave', 'FaqsController@save')->name('faqssave');
Route::get('/faqsdelete/{id}', 'FaqsController@destroy')->name('faqsdestroy');
Route::post('/faqsupdate', 'FaqsController@update')->name('faqsupdate');


Route::get('/contactlist', 'ContactController@list')->name('contactlist');
Route::get('/contactview/{id}', 'ContactController@view')->name('contactview');
Route::get('/contactdelete/{id}', 'ContactController@destroy')->name('contactdestroy');
Route::get('/response/{id}', 'ContactController@change_response')->name('response');





Route::get('/advirtismentlist', 'AdvirtismentController@list')->name('advirtismentlist');
Route::get('/advirtismentcreate', 'AdvirtismentController@create')->name('advirtismentcreate');
Route::get('/advirtismentedit/{advirtisment}', 'AdvirtismentController@edit')->name('advirtismentedit');
Route::get('/advirtismentdelete/{id}', 'AdvirtismentController@destroy')->name('advirtismentdestory');
Route::post('/advsave', 'AdvirtismentController@save')->name('advsave');
Route::post('/advupdate', 'AdvirtismentController@update')->name('advupdate');


Route::get('/userlist', 'AdminController@list')->name('userlist');
Route::get('/usercreate', 'AdminController@create')->name('usercreate');
Route::post('/usersave', 'AdminController@save')->name('usersave');
Route::get('/userdelete/{id}', 'AdminController@destroy')->name('userdestroy');
Route::get('/useredit/{user}', 'AdminController@edit')->name('useredit');
Route::post('/userupdate', 'AdminController@update')->name('userupdate');



// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');



