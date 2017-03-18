<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/administratorPanel', array('uses'=>"AdministratorController@index",'as'=>'administratorPanel'));
Route::get('/administratorPanel2', array('uses'=>"AdministratorController@index2",'as'=>'administratorPanel2'));
Route::get('/administratorPanel3', array('uses'=>"AdministratorController@index3",'as'=>'administratorPanel3'));
Route::get('/form', array('uses'=>"AdministratorController@form",'as'=>'form'));
Route::get('/form_advanced', array('uses'=>"AdministratorController@form_advanced",'as'=>'form_advanced'));
Route::get('/form_buttons', array('uses'=>"AdministratorController@form_buttons",'as'=>'form_buttons'));
Route::get('/form_upload', array('uses'=>"AdministratorController@form_upload",'as'=>'form_upload'));
Route::get('/form_validation', array('uses'=>"AdministratorController@form_validation",'as'=>'form_validation'));
Route::get('/form_wizzard', array('uses'=>"AdministratorController@form_wizzard",'as'=>'form_wizzard'));
Route::get('/general_elements', array('uses'=>"AdministratorController@general_elements",'as'=>'general_elements'));
Route::get('/media_gallery', array('uses'=>"AdministratorController@media_gallery",'as'=>'media_gallery'));
Route::get('/typography', array('uses'=>"AdministratorController@typography",'as'=>'typography'));
Route::get('/icons', array('uses'=>"AdministratorController@icons",'as'=>'icons'));
Route::get('/glyphicons', array('uses'=>"AdministratorController@glyphicons",'as'=>'glyphicons'));
Route::get('/widgets', array('uses'=>"AdministratorController@widgets",'as'=>'widgets'));
Route::get('/invoice', array('uses'=>"AdministratorController@invoice",'as'=>'invoice'));
Route::get('/inbox', array('uses'=>"AdministratorController@inbox",'as'=>'inbox'));
Route::get('/calendar', array('uses'=>"AdministratorController@calendar",'as'=>'calendar'));
Route::get('/tables', array('uses'=>"AdministratorController@tables",'as'=>'tables'));
Route::get('/tables_dynamic', array('uses'=>"AdministratorController@tables_dynamic",'as'=>'tables_dynamic'));
Route::get('/chartjs', array('uses'=>"AdministratorController@chartjs",'as'=>'chartjs'));
Route::get('/chartjs2', array('uses'=>"AdministratorController@chartjs2",'as'=>'chartjs2'));
Route::get('/echartjs', array('uses'=>"AdministratorController@echartjs",'as'=>'echartjs'));
Route::get('/morisjs', array('uses'=>"AdministratorController@morisjs",'as'=>'morisjs'));
Route::get('/other_charts', array('uses'=>"AdministratorController@other_charts",'as'=>'other_charts'));
Route::get('/contacts', array('uses'=>"AdministratorController@contacts",'as'=>'contacts'));
Route::get('/ecommerce', array('uses'=>"AdministratorController@ecommerce",'as'=>'ecommerce'));
Route::get('/profile', array('uses'=>"AdministratorController@profile",'as'=>'profile'));
Route::get('/projects', array('uses'=>"AdministratorController@projects",'as'=>'projects'));
Route::get('/project_detail', array('uses'=>"AdministratorController@project_detail",'as'=>'project_detail'));

Route::get('/page_404', array('uses'=>"AdministratorController@page_404",'as'=>'page_404'));
Route::get('/page_500', array('uses'=>"AdministratorController@page_500",'as'=>'page_500'));
Route::get('/login', array('uses'=>"AdministratorController@login",'as'=>'login'));
Route::get('/plain_page', array('uses'=>"AdministratorController@plain_page",'as'=>'plain_page'));
Route::get('/pricing_tables', array('uses'=>"AdministratorController@pricing_tables",'as'=>'pricing_tables'));