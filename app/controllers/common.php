<?php


class Controller
{
    public function model($model)
    {
        require_once "app/models/" . $model . ".php";
        $object =  str_replace("_", "", $model);
        return new $object;
    }

    public function view($layout, $data = [])
    {
        require_once "app/views/layouts/" . $layout . ".php";
    }
}
