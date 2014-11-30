<?php
//require header
require_once(__DIR__ ."/view/header.php");
//require navigation
require_once(__DIR__ ."/view/navigation.php");
//bring and run all coding from create-db.php
//Fix PHP regarding path(__DIR__ .) 
require_once(__DIR__ ."/controller/create-db.php");
//require footer
require_once(__DIR__ ."/view/footer.php");
?>
