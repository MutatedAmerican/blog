<!create post and put online database to server!>
    <?php
//receive info and store into variable
    //filter input from title and make sure its a string
        $title= filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //filter input from title and make sure its a string
        $post= filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //print out title    
        echo "<p>Title: ", $title,"</p>";
    //print out post
        echo "<p>Post: ", $post,"</p>";