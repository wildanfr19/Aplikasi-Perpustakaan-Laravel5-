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
Route::get('/', function () {
	return view('welcome');
});
Route::get('/guest', 'GuestController@index');
// Route::get('/', 'GuestController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin',  'middleware'=>['auth', 'role:admin']], function () {
	Route::resource('authors', 'AuthorsController');
	Route::resource('books', 'BooksController');
	Route::resource('members', 'MembersController');
	Route::get('statistics', [
		'as'=>'statistics.index',
		'uses'=>'StatisticsController@index'
	]);
	Route::get('export/books', [
		'as' => 'export.books',
		'uses' => 'BooksController@export'
	]);
	Route::post('export/books', [
		'as' => 'export.books.post',
		'uses' => 'BooksController@exportPost'
	]);
	Route::get('template/books', [
		'as' => 'template.books',
		'uses' => 'BooksController@generateExcelTemplate'
	]);
	Route::post('import/books', [
		'as' => 'import.books',
		'uses' => 'BooksController@importExcel'
	]);

	Route::get('roles',
	[
		'as'=>'roles.index',
		'uses'=>'RoleController@index',
		'middleware' => ['permission:role-list|role-create|role-edit|role-delete']
	] );

	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
});
Route::get('books/{book}/borrow', [
	'middleware' => ['auth', 'role:member'],
	'as' => 'guest.books.borrow',
	'uses' => 'BooksController@borrow'
]);
Route::put('books/{book}/return', [
	'middleware' => ['auth', 'role:member'],
	'as' => 'member.books.return',
	'uses' => 'BooksController@returnBack'
]);
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::post('settings/profile', 'SettingsController@updateProfile');
Route::get('settings/password', 'SettingsController@editPassword');
Route::post('settings/password', 'SettingsController@updatePassword');


