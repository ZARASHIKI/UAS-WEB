<?php 
 
session_start();
session_destroy();
 
header("Location: http://localhost/UAS_WEB/index.php");
 
?>