<?php
//create connection to the server
//Fix PHP regarding path(__DIR__ .)
    require_once(__DIR__ ."/../model/config.php");

//create active connection to the database to use the mysql server  
    $connection= new mysqli($host, $username, $password);
    
//check for connection errors   
    if($connection->connect_error){
        die ("<p>Error: ". $connection->connect_error."</p>");
    }

    //select database
    $exists= $connection->select_db($database);
    
    //test if exists
    if(!$exists){
        
        //query and create database
        $query= $connection->query("CREATE DATABASE $database");
        
        //check if query was successful
        if ($query){
            echo "<p>Successfully created database: ". $database."</p>";
        }
        
    }
    
    //if database already exists
    else{
        echo "<p>Database already exists</p>";
    }
    
    //create table within database
    $query= $connection->query("CREATE TABLE posts ("
            ."id int(11) NOT NULL AUTO_INCREMENT,"
            ."title varchar(255) NOT NULL,"
            ."post text NOT NULL,"
            ."PRIMARY KEY(id))");
    
    //test if create table was successful
    if($query){
        echo "<p>Successfully create table: posts</p>";
    }
    
    //if table already exists
    echo "<p>$connection->error</p>";
    
//run   
    $connection->close();