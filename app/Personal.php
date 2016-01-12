<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Personal extends Model
{
	protected $table = 'penduduks';
	public $timestamps = false;
	protected $guarded = ['id'];

	public function agama(){
		return $this->belongsTo(Agama::class);
	}
	public function pendidikan(){
		return $this->belongsTo(Pendidikan::class);
	}
	public function pekerjaan(){
		return $this->belongsTo(Pekerjaan::class);
	}
	public function status_perkawinan(){
		return $this->belongsTo(StatusPerkawinan::class);
	}
	public function status_keluarga(){
		return $this->belongsTo(StatusHubungan::class);
	}
	public function jenis_kelamin(){
		return $this->belongsTo(JenisKelamin::class);
	}
}