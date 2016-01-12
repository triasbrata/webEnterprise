<?php 
use App\User;
$session = $app['session'];
Route::post('login',['as'=>'login','uses'=>'SessionController@login']);
Route::get('login',['as'=>'login.form','uses'=>'SessionController@form']);
Route::get('/',function ()
{
	return redirect()->route('login.form');
});
if($session->has('user')){
	if(User::find($session->get('user')->count() < 1)){
		Route::any('{tes}',function ($tes)
		{
			return redirect()->route('login.form');
		});
	}
}
if(!$session->has('user')){
	// return redirect()->route('login');
	Route::any('{tes}',function ($tes)
	{
		return redirect()->route('login');
	});
}
Route::get('logout',['as'=>'logout','uses'=>'SessionController@logout']);
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
Route::resource('penduduk','PersonalController');
Route::resource('kartu_keluarga','KartuKeluargaController');
Route::get('/kartu_keluarga/{kartu_keluarga}/penduduk',['as'=>'kartu_keluarga.penduduk','uses'=>'KartuKeluargaController@penduduk']);
Route::post('/kartu_keluarga/{kartu_keluarga}/penduduk',['as'=>'kartu_keluarga.penduduk.sync','uses'=>'KartuKeluargaController@syncPenduduk']);


