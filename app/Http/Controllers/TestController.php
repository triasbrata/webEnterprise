<?php namespace App\Http\Controllers;
/**
* 
*/
use App\Http\Controllers\Controller as BaseController;
use View;
use App\Provinsi;
class TestController extends BaseController
{
	public function test($i)
	{
		$data = Provinsi::find($i);
        dd($data);
        return view('tes',compact('data'));
	}
}