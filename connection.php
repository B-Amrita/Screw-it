<?php

class Screw_it {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=Screw-It', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
}


class Db {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
       $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Screw-it";
        self::$instance = new mysqli($server,$username, $password, $dbname);
      }
      return self::$instance;
    }
}
 