<?php namespace App;
/**
* 
*/
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
	public $timestamps = false;
	protected $fillable = ['label'];

	public function kabupaten(){
		return $this->belongsTo(Kabupaten::class,'kabupaten_id');
	}
	public function provinsi()
	{
		return $this->kabupaten->provinsi();
	}
	public function kelurahan()
	{
		return $this->hasMany(Kelurahan::class,'kelurahan_id');
	}
}
