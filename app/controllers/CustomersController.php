<?php

namespace app\controllers;

use app\models\Customers;
use app\helpers\isValidEmail;


class CustomersController extends Controller
{
    public function index()
    {
        $this->view('customers');
    }

    public function create($params)
    {
        $name = $params->name;
        $email = $params->email;

        if (empty($name) || empty($email)) {
            echo ("Nome e e-mail são campos obrigatórios.  <a href='/customers'>Voltar</a>");
            die;

        } else if (!isValidEmail::isValid($email)) {
            echo ("O formato do e-mail é inválido.  <a href='/customers'>Voltar</a>");
            exit;
        }
        $customer = new Customers;

        $customer->name = $name;
        $customer->email = $email;
        $customer->registerCustomers();
        header("Location: / ");
    }
//Update customer
    public function update($params) {
        $id = $params->id;
        $customer = Customers::getCustomer($id);
        $this->view('customers-edit', ['customer' => $customer]);
        
        
        $id = $params->id;
        
        if(!isset($id) || !is_numeric($id)){
            header('location: /notid');
            exit;
          }
        $customer = Customers::getCustomer($id);

        if(!$customer instanceof Customers){
            header('location: /insta ');
            exit;
          }
        if(empty($_POST['name'])){
            die;
        }
        if(isset($_POST['name'])){

            $customer->name    = $_POST['name'];
            $customer->updateCustomers();
          
            header('location: /');
            exit;
          }
    }

    public function delete($params) {
        $id = $params->id;
        $customer = Customers::getCustomer($id);
        $this->view('customers-del', ['customer' => $customer]);
        
        
        
        if(!isset($id) || !is_numeric($id)){
            header('location: /notid');
            exit;
          }
        

        if(!$customer instanceof Customers){
            header('location: /insta ');
            exit;
          }
        if(isset($_POST['delete'])){

            $customer->deleteCustomers();
          
            header('location: /');
            exit;
          }
    
    }
}
