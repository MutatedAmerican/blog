<?php

require_once (__DIR__."/database.php");
//path to all our project files
$path= "/diazb-blog/";
//store database server information to connect
    $host= "localhost";
    $username= "root";
    $password= "root";
    $database= "blog_db";

    $connection= new Database($host, $username, $password, $database);