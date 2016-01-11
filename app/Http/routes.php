<?php 
Route::get('/',function () use ($app)
{
	return "selamat Datang";
});
Route::resource('provinsi','ProvinsiController');
Route::resource('agama','AgamaController');

Route::resource('statushubungan','StatusHubunganController');
Route::resource('kabupaten','KabupatenController');

Route::resource('pekerjaan','PekerjaanController');
Route::resource('pendidikan','PendidikanController');
Route::resource('statusperkawinan','StatusPerkawinanController');

Route::resource('kecamatan','KecamatanController');
Route::resource('kelurahan','KelurahanController');
Route::resource('kepaladinas','KadisController');
