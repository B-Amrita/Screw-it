<?php

class Dbconnect {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "Screw-It";

//needsb to be protected
public function connect (){
    
    
    
    
    
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    
    try {
        $ooppdo = new PDO($dsn, $this->user, $this->pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    return $ooppdo;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
    
    
    
 
}
}

