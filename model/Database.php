<?php

//creation of class
class Database {

    //create instance variables within class
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    //gain access to variable
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    //open up a connection
    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        //check for connection errors   
        if ($this->connection->connect_error) {
            die("<p>Error: " . $connection->connect_error . "</p>");
        }
    }

    //close the connection
    public function closeConnection() {
        //checking if there is something in the variable
       if(isset($this->connection)){
           $this->connection->close();
       } 
    }

    public function query($string) {
        
    }

}
