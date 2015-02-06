<?php
//creation of class
class Database{
    //create instance variables within class
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    
    //gain access to variable
    public function __construct($host, $username, $password, $database) {
        $this->host= $host;
        $this->username= $username;
        $this->password= $password;
        $this->database= $database;
    }
    
    public function openConnection(){
        
    }
    
    public function closeConnection() {
        
    }
    
    public function query($string) {
        
    }
}

