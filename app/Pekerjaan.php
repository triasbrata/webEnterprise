<?php namespace App;
/**
* 
*/
use Illuminate\Database\Eloquent\Model;

class Pekerjaan  extends Model
{
	public $timestamps = false;
	protected $fillable = ['title'];
}