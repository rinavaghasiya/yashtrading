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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/adminlogin', 'AdminLoginController@index');
Route::post('admin_login', 'AdminLoginController@adminlogin');
Route::get('adminforgotpass', 'AdminLoginController@forgotpass');

Route::post('adminresendmail', 'AdminLoginController@adminresendmail');
Route::get('/adminresetpass/{token}', 'AdminLoginController@adminresetpass');
Route::post('/adminreset', 'AdminLoginController@adminresetpass1');

// Route::get('admindemo','AdminLoginController@demo');



    Route::group(['middleware' => 'admin'], function () {
	Route::get('admindashboard', 'AdminLoginController@admindash');
	Route::get('adminprofile', 'AdminLoginController@profileindex');
	Route::post('profileupdate', 'AdminLoginController@profileupdate');
	Route::get('adminlogout', 'AdminLoginController@adminlogout');
	

	Route::get('showcontact', 'AdminCategoryController@showcontact');
	Route::get('deletecontact/{id}', 'AdminCategoryController@deletecontact');
	
	

	Route::get('showsocial', 'AdminCategoryController@showsocial');
	Route::post('editsocialmedia', 'AdminCategoryController@editsocialmedia');
	Route::get('editsocialmedia/{id}', 'AdminCategoryController@editsocial');

	Route::get('showaddress', 'AdminCategoryController@showaddress');
	Route::post('adressedit', 'AdminCategoryController@editaddress');
	Route::get('adressedit/{id}', 'AdminCategoryController@address');
	
	Route::get('categoryindex', 'AdminCategoryController@categoryindex');
	Route::get('showcategory', 'AdminCategoryController@showcategory');
	Route::post('insertcategory', 'AdminCategoryController@insertcategory');
	Route::get('update/{id}', 'AdminCategoryController@update');
	Route::post('adminedit', 'AdminCategoryController@adminedit');
	Route::get('admindelete/{id}', 'AdminCategoryController@admindelete');
	

	
	Route::get('addsubcategory','SubCategoryController@addsubcategoryindex');
	Route::post('addsubcategory','SubCategoryController@subcategory');
	Route::get('updatesubcat/{id}','SubCategoryController@updatesubcat');
	Route::post('editsubcat','SubCategoryController@editsubcat');
	Route::get('subcategorydelete/{id}','SubCategoryController@subcategorydelete');
	Route::get('showsubcategory','SubCategoryController@showsubcategory');


	Route::get('addproduct','ProductController@addproductindex');
	Route::post('addproduct','ProductController@addproduct');
	Route::get('showproduct','ProductController@showproduct');
	Route::get('showproductdetail/{id}','ProductController@showproductdetail');
	Route::get('productdelete/{id}','ProductController@productdelete');
	Route::get('updatemyitem/{id}','ProductController@updatemyitem');
	Route::post('editmyitem','ProductController@editmyitem');

	// Route::post('updateorder/{id}','AdminOrderTrack@updateorder');
});


route::get('/', 'HomeController@home');
route::get('about', 'HomeController@about');
route::get('marketing', 'HomeController@marketing');
route::get('contact', 'HomeController@contact');
route::post('addcontact','HomeController@addcontact');

route::get('product/{sub_cat}', 'HomeController@productpg');

