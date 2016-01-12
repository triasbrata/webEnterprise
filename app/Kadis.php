<?php namespace App;
/**
* 
*/
use Illuminate\Database\Eloquent\Model;

class Kadis extends Model
{
	protected $table = 'kepala_dinas';
	public $timestamps = false;
	protected $fillable = ['nama','nip'];
	
}