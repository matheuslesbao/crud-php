<?php

namespace app\controllers;
use app\models\Customers;
class HomeController extends Controller
{
    public function index(){
        $customers = Customers::getCustomers();
        $this->view('home', [
            'title' => 'Home',
            'data' => $customers,
        ]);
    }
}
