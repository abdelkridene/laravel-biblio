<?php


Route::middleware(['auth'])->group(function(){
	

	Route::get('/ajouter_livre','livreController@ajouterLivre')->name('ajouter_livre');

	Route::post('/ajouter_livre','livreController@postAjouterLivre')->name('postAjouter_livre');

	Route::get('/supprimer_livre/{id}','livreController@supprimerLivre')->middleware('auth')->name('supprimerLivre');

	Route::get('/editerLivre/{id}','livreController@getEdit')->name('editerLivre');

	Route::post('/postEdit_livre/{id}','livreController@postEdit')->name('postEdit_livre');
	Route::get('/showCategories','categoriesController@showCategories')->name('showCategories');
	Route::post('/postSetCategories','categoriesController@postSetCategories')->name('postSetCategories');
	Route::get('/editeCateg/{id}','categoriesController@editeCateg')->name('editeCateg');
	Route::post('/postEditCategories/{id}','categoriesController@postEditCategories')->name('postEditCategories');
	Route::get('/supprimerCateg/{id}','categoriesController@supprimerCateg')->name('supprimerCateg');

});
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

Route::get('/','homepageController@home')->name('welcome');


Route::get('/VoirLivre/{livreid}','livreController@VoirLivre')->name('VoirLivre');
/*Route::get('/livresParCategorie/{id}','categoriesController@livresParCategorie')->name('livresParCategorie');
*/


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


/*route
*/