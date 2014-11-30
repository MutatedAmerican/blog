<?php
//create connection to the server
//Fix PHP regarding path(__DIR__ .)
    require_once(__DIR__ ."/../model/database.php");

//create active connection to the database to use the mysql server  
    $connection= new mysqli($host, $username, $password);
    
//check for connection errors   
    if($connection->connect_error){
        die ("Error: ". $connection->connect_error);
    }

    //select database on file
    $exists= $connection->select_db($database);
    
    //test if exists
    if(!$exists){
        echo "Database does not exists";
    }
    
//run   
    $connection->close();