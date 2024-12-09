<?php 

class Controller{
    public function view($view, $data = []){
        require_once "../2app/views/" . $view . ".php";
    }
}