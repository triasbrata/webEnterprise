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
	
}