<?php namespace App;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class User extends Model
{
	
	public $timestamps = false;
	protected $fillable = ['password','username'];
	
}