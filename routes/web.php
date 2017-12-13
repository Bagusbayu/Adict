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

Route::resource('profilecompany','profilecompany');
Route::resource('viewartikel','CArtikel');
Route::resource('feed','CFeed');
Route::resource('viewabout','CAbout');
Route::resource('vportfolio','CPortfolio');
Route::resource('mypage','CIndexs');
//Route::get('mypage/')
Route::resource('photo','CPhoto');
//Route::post('/mypage','feed@CFeed');

//Route::get('/', function () {
//    return view('indexs','CIndexs@index');
//});

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/index', function () {
//    return view('index');

//});

//Route::get('/indexs', function () {
//    return view('indexs');

//Route::get('/profilecompany','profilecompany@index');
Route::get('/profileinput','profilecompany@create');
//Route::get('/viewartikel','CArtikel@index');
Route::get('/vartikelinput','CArtikel@create');
Route::get('/vaboutinput','CAbout@create');
Route::get('/vportfolioinput','CPortfolio@create');
Route::get('/photoinput','CPhoto@create');
Route::get('/portfolio','CIndexs@portfolio');
Route::get('/artikel','CIndexs@artikel');

Route::get('/index', 'CAdmin@index');
Route::get('/login', 'CAdmin@login');
Route::post('/loginPost', 'CAdmin@loginPost');
Route::get('/logout', 'CAdmin@logout');
//Route::get('/mypage', 'CIndexs@post');