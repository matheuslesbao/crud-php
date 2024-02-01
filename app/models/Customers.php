<?php

namespace app\models;
use app\database\Database;
use PDO;

class Customers
{
    public $id;
    public $name;
    public $email;
    public $date;

    public function registerCustomers(){
        //DEFINIR A DATA
        $this->date = date('Y-m-d H:i:s');
    
        //INSERIR A VAGA NO BANCO
        $customersDatabase = new Database('customers');
        $this->id = $customersDatabase->insert([
        'name'  => $this->name,
        'email' => $this->email,
        'date'  => $this->date
        ]);
    
        //RETORNAR SUCESSO
        return true;
      }
      public function updateCustomers(){
        return (new Database('customers'))->update('id = '.$this->id,[
          'name'  => $this->name,
          'date'  => $this->date
           ]);
      }
      public function deleteCustomers(){
        return (new Database('customers'))->delete('id = '.$this->id);
      }

      public static function getCustomers($where = null, $order = null, $limit = null){
        return (new Database('customers'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
      }

      public static function getCustomer($id){
        return (new Database('customers'))->select('id = '.$id)
                                      ->fetchObject(self::class);
      }
    

}
