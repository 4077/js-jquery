<?php namespace js\jquery\controllers;

class Main extends \Controller
{
    public function __create()
    {
        $this->js('jquery');
        $this->js('cookie jquery.cookie');
    }
}
