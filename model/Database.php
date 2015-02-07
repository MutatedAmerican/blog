<?php

//creation of class
class Database {

    //create instance variables within class
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;

    //gain access to variable
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        //create active connection to the database to use the mysql server  
        $this->connection = new mysqli($host, $username, $password);

        //check for connection errors   
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }

        //select database
        $exists = $this->connection->select_db($database);

        //test if exists
        if (!$exists) {

            //query and create database
            $query = $this->connection->query("CREATE DATABASE $database");

            //check if query was successful
            if ($query) {
                echo "<p>Successfully created database: " . $database . "</p>";
            }
        }

        //if database already exists
        else {
            echo "<p>Database already exists</p>";
        }
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
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    //execute a query in database
    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);
        
        //check if query is false
        if(!$query){
            $this->error= $this->connection->error;
        }

        $this - closeConnection();

        return $query;
    }

}
