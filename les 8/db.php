<?php

try{
    $db = new PDO('mysql:host=localhost; dbname=facebook', 'root', '');
}catch (PDOException $e){
    die('Error!' . $e->getMessage());
}