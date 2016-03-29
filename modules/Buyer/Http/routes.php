<?php

Route::group(['prefix' => '', 'namespace' => 'Modules\Buyer\Http\Controllers'], function()
{
	Route::get('/', 'BuyerController@index');
});