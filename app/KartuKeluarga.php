<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class KartuKeluarga extends Model
{
	protected $table = 'keluargas';
	public $timestamps = false;
	protected $guarded = ['id'];

	public function kepala_keluarga(){
		return $this->belongsTo(Personal::class,'kepala_keluarga_id');
	}
	public function kelurahan(){
		return $this->belongsTo(Kelurahan::class,'kelurahan_id');
	}
	public function kecamatan(){
		return $this->kelurahan->kecamatan();
	}
	public function provinsi()
	{
		return $this->kabupaten->provinsi();
	}
	public function kabupaten()
	{
		return $this->kecamatan->kabupaten();
	}
	public function penduduk(){
		return $this->belongsToMany(Personal::class,'keluarga_penduduk','keluarga_id','penduduk_id');
	}

	
}