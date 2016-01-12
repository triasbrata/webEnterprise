<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Kabupaten extends Model
{
	
	public $timestamps = false;
	protected $fillable = ['label'];

	public function provinsi(){
		return $this->belongsTo(Provinsi::class);
	}
	public function kelurahan()
	{
		return $this->hasMany(Kelurahan::class,'kelurahan_id');
	}
	
}