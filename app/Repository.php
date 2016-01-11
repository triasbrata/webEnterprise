<?php
/**
 * Created by PhpStorm.
 * User: triasbrata
 * Date: 12/22/15
 * Time: 8:01 PM
 */

namespace App;

use InterfaceModel as Model;
class Repository
{
    private $model;
    private $fromQuery;
    protected $data;
    /**
     * ProvinsiRepository constructor.
     */
    function __construct(Model $model)
    {
        $this->setData($model->all());
        $this->model = $model;
    }
    function find(){
        return $this->dataRun('find',func_get_args());

    }
    function get(){
        if($this->formQuery){
           return $this->modelRun('get',func_get_args());
        }
        return $this->dataRun('get',func_get_args());
    }
    function all(){
        return $this->data;
    }
}

    /**
     * @return mixed
     */
    function save(){
        $ret = $this->modelRun('save',func_get_args());
        $this->setData($this->modelRun('all',[]));
        return $ret;
    }
    /**
     * @param $data
     */
    private function setData($data)
    {
        $this->data = $data;
    }
    private function dataRun($method,$args){
        return array_map($this->arrayMapData($method),$args);

    /**
     * @param $method
     * @return array
     */
    private function arrayMapData($method)
    {
        return [$this->data, $method];
    }
    private function modelRun($method,$args){
        return array_map($this->arrayMapModel($method),$args);
    }

    /**
     * @param $method
     * @return array
     */
    private function arrayMapModel($method)
    {
        return [$this->model, $method];
    }
}