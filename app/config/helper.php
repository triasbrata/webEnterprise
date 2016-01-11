<?php 
if(!function_exists('app_path')){
	function app_path($path = '')
	{
		global $basePath;
		return str_finish($basePath.'app','/').$path;
	}
}
public function assets($url)
{
	return str_finish('');
}