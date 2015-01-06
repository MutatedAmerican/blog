<!create post and put online database to server!>
    <?php
    //require database
    require_once(__DIR__ ."/../model/database.php");
    //create connection
    $connection= new mysqli($host, $username, $password, $database);
//receive info and store into variable
    //filter input from title and make sure its a string
        $title= filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //filter input from title and make sure its a string
        $post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //print out title    
        echo "<p>Title: ", $title,"</p>";
    //print out post
        echo "<p>Post: ", $post,"</p>";
    //close connection
    $connection->close();