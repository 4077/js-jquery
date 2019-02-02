<?php namespace js\jquery\ui\controllers;

class Main extends \Controller
{
    public function __create()
    {
        $this->js('jquery.ui');
        $this->js('jquery.ui.touch-punch.min');

        $this->css('jquery-ui');
        $this->css('jquery-ui.structure');
        $this->css();

        if ($theme = $this->data('theme')) {
            $this->css($theme . '/css');
        }
    }
}
