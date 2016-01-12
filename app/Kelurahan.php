<?php namespace App;
/**
* 
*/
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
	public $timestamps = false;
	protected $fillable = ['label'];

	public function kecamatan(){
		return $this->belongsTo(Kecamatan::class,'kelurahan_id');
	}
	public function provinsi()
	{
		return $this->kabupaten->provinsi();
	}
	public function kabupaten()
	{
		return $this->kecamatan->kabupaten();
	}
}
