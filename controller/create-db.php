<?php
//create connection to the server
//Fix PHP regarding path(__DIR__ .)
    require_once(__DIR__ ."/../model/config.php");

    //create table within database
    $query= $_SESSION["connection"]->query("CREATE TABLE posts ("
            ."id int(11) NOT NULL AUTO_INCREMENT,"
            ."title varchar(255) NOT NULL,"
            ."post text NOT NULL,"
            ."PRIMARY KEY(id))");
    
    //test if create table was successful
    if($query){
        echo "<p>Successfully create table: posts</p>";
    }
    
    //if table already exists
    echo "<p>". $_SESSION["connection"]->error."</p>";
    
    $query=$_SESSION["session"]->query("CREATE TABLE user("
            . "id int(11) NOT NULL AUTO_INCREMENT, "
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL, "
            . "password char(128) NOT NULL, "
            . "salt char(128) NOT NULL, "
            . "PRIMARY KEY(id))");
    
    if($query){
        echo '<p>Successfully created tables: users</p>';
    }
 else {
        "<p>". $_SESSION["connection"]->error. "</p>";
}