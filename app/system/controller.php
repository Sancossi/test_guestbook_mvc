<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 14:22
 */
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {

    }

}