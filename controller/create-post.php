<!create post and put online database to server!>
    <?php
    //require database
    require_once(__DIR__ ."/../model/config.php");
    //create connection
    $connection= new mysqli($host, $username, $password, $database);
//receive info and store into variable
    //filter input from title and make sure its a string
    $title= filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //filter input from title and make sure its a string
    $post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //send info to query
    $query= $connection->query("INSERT INTO posts SET title= '$title', post= '$post'");
    //whether it is a true statement or not
    //true
    if($query){
        echo "<p>Successfully inserted post: $title</p>";
    }
    //false
    else{
        echo "<p>$connection->error</p>";
    }
    //close connection
    $connection->close();