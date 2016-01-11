<?php namespace App;
use Illuminate\Support\Str;

use Illuminate\Container\Container;

class Application extends Container
{
    protected $basePath;

    /**
     * Application constructor.
     * @param $basePath
     */
    function __construct( $basePath )
    {
        $this->setBasePath($basePath);
    }

    /**
     * @param $basePath
     */
    public function setbasePath( $basePath )
    {
        $this->basePath =$basePath;
    }

    /**
     * @return mixed
     */
    public function basePath()
    {
        return $this->basePath;
    }
}