<?php 

require_once 'config.php';

class Database 
{
 private $dsn;
 private $username;
 private $pwd;
 private $options;
 
 public $conn;

 public function __construct()
 {
    $this->dsn = DSN;
    $this->username = USERNAME;
    $this->pwd = PWD;
    $this->options = OPTIONS;
 }
 public function connect() 
 {
    try{
        $this->conn= new PDO($this->dsn,$this->username,$this->pwd,$this->options);
      //  echo"connexion établie";
    }catch(PDOException $error){
       // echo 'Error : '.$error->getMessage();
    }

    return $this->conn;
 }
}

$objet = new Database();
$pdo = $objet->connect();