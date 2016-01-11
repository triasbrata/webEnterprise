<?php namespace App;

/**
* 
*/
class Request
{
	protected $request;
	function __construct()
	{
		$this->request = $_POST;
	}
	public function __get($name)
	{
		if(isset($this->request[$name])){
			return $this->request[$name];
		}
		return null;
	}
	public function __call($name, $args)
	{
		$name = 'static'.ucfirst($name);
		if (method_exists($this,$name)) {
			return call_user_func_array([$this,$name],$args);
		}
		return null;
	}
	public static function __callStatic($name,$args)
	{

		$r = new Request();
		$m = 'static'.ucfirst($name);
		if(!method_exists($r,$m)) return null;
		return call_user_func_array([$r,$m],$args);
	}
	public function staticInput($name)
	{
		if(isset($this->request[$name])){
			return $this->request[$name];
		}
		return null;
	}
	public function staticOnly()
	{
		$args = func_get_args();
		$o = [];
		foreach ($args as $name) {
			$o[$name] = $this->staticInput($name);
		}
		return $o;
	}
}