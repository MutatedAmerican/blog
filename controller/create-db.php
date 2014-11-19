<?php
//create connection to the server
    require_once("../model/database.php");

//create active connection to the database to use the mysql server  
    $connection= new mysqli($host, $username, $password);
    
//check for connection errors   
    if($connection->connect_error){
        die ("Error: ". $connection->connect_error);
    }
    else{
        echo "Success: ". $connection->host_info;
    }
   
    $connection->close();