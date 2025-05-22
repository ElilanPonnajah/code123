<?php
session_start();

if($_SESSION["ingelogd"]  == true){
    echo $_SESSION["username"];
} else {
    header("Location: index.php");
}



?>
<h1>jouw account</h1>
<a href="destroy.php"> log uit </a>
