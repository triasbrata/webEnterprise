<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
/**
* 
*/
use App;
abstract class Controller extends BaseController{
	protected $request;
	protected $validator;
	protected $app;
	protected $session;
	function __construct() {
		$app = App::getInstance();
		$this->app = $app;
		$this->session =  $app['session'];
		$this->request = $app['request'];
		$this->validator = $app['validator'];
	}

	abstract protected function rules();
	abstract protected function attributes();
	protected function validate()
	{
		return $this->validator->make($this->request->all(),$this->rules(),[],$this->attributes());
	}
}