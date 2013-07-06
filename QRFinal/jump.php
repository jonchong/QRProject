<?php
 session_start();
 $_SESSION['views']= $_GET['userid'];
header("Location: http://skyynet.cloudapp.net:8080/index.php"); 

?>