<?php 
Route::get('/','SessionController@login');
Route::resource('provinsi','ProvinsiController');
Route::resource('agama','AgamaController');
Route::resource('statushubungan','StatusHubunganController');
Route::resource('kabupaten','KabupatenController');
Route::resource('penduduk','PersonalController');
Route::resource('pekerjaan','PekerjaanController');
Route::resource('pendidikan','PendidikanController');
Route::resource('statusperkawinan','StatusPerkawinanController');
