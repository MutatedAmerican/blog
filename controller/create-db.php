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
    else{
        echo "Success: ". $connection->host_info;
    }
//run   
    $connection->close();