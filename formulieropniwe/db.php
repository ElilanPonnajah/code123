<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=registratie', 'root', '');
} catch (PDOException $e){
    die('error');
}

?>