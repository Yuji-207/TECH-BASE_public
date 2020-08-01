<?php


  class DataBase {


    public $pdo;

    
    function __construct() {

      $dsn = 'mysql:dbname=dbname;host=localhost';
      $user = 'user';
      $password = 'password';

      $this->pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }


    // エスケープ処理

    function escape(string $string=NULL) {
      return htmlspecialchars($string, ENT_QUOTES|ENT_HTML5, 'UTF-8');
    }

    
  }
?>