<?php 
Route::get('/',function () use ($app)
{
	return "selamat Datang";
});
Route::resource('provinsi','ProvinsiController');
Route::resource('agama','AgamaController');