<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class StatusHubungan extends Model
{
	
	protected $table = 'status_hubungan';
	public $timestamps = false;
	protected $fillable = ['title'];
	
}