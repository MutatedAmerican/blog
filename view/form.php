<!have access to path variable>
<?php
//require config
require_once(__DIR__ ."/../model/config.php");
?>

<!file specific for post>
<h1>Create Blog Post</h1>

<!take in submitted info. and send to table>
<form method="post" action="<?php echo $path. "controller/create-post.php";?>">
    <div>
    
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
 
    <div> 
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
<!display submit button>    
    <div>
        <button type="submit">
            Submit
        </button>
    </div>

</form>