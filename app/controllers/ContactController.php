<?php

namespace app\controllers;

class ContactController extends Controller
{
    public function index(){
        $this->view('Contact');
    }

    public function store($params){
        var_dump($params->email);
    }
}
