<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Provinsi extends Model
{
	
	public $timestamps = false;
	protected $fillable = ['label'];

	public function kabupaten()
	{
		return $this->hasMany(Kabupaten::class,'kelurahan_id');
	}
	
}