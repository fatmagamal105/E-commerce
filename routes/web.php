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

/*Route::get('/', function () {
  return view('pages.home');
});*/
/*Route::get('/', function () {
  return view('admin.dashboard');
});*/

//da 7mada
route::get('/','homeC@index');
route::get('dashboard','adminC@index');// /dashboard i can name it bra7tys
route::get('login','adminC@showLogin');
route::get('/add-category','categoryC@index');
route::get('/all-category','categoryC@store');
route::get('/all-brands','brandC@index');
route::get('/add-brand','brandC@store');
route::get('/all-products','productC@index');
route::get('/add-product','productC@store');

//w da 7mada tany 5als
//category
route::post('save-category','categoryC@save_category');
route::get('/all-category','categoryC@all_category');
route::get('/edit_category/{c_id}','categoryC@edit_category');
route::post('update-category/{c_id}','categoryC@update_category');
route::get('delete_category/{c_id}','categoryC@delete_category');
Route::get('Inactive_category/{c_id}', 'categoryC@Inactive_category');
Route::get('active_category/{c_id}', 'categoryC@active_category');
//brand
route::post('save-brand','brandC@save_brand');
route::get('/all-brand','brandC@all_brand');
route::get('/edit_brand/{m_id}','brandC@edit_brand');
route::post('update-brand/{m_id}','brandC@update_brand');
route::get('delete_brand/{m_id}','brandC@delete_brand');
Route::get('Inactive_brand/{m_id}', 'brandC@Inactive_brand');
Route::get('active_brand/{m_id}', 'brandC@active_brand');
//product
route::post('save-product','productC@save_product');
route::get('/all-product','productC@all_product');
route::get('/edit_product/{p_id}','productC@edit_product');
route::post('update-product/{p_id}','productC@update_product');
route::get('delete_product/{p_id}','productC@delete_product');
Route::get('Inactive_product/{p_id}', 'productC@Inactive_product');
Route::get('active_product/{p_id}', 'productC@active_product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
