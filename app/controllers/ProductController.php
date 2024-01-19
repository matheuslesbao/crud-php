<?php

namespace app\controllers;

class ProductController extends Controller
{
    public function index($params){
        var_dump($params->name);
    }
    public function update(){
        var_dump('update product');
    }
}
