<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sqlinjection';

// Maak een verbinding met MySQLi zonder een specifieke database
try {
    $db = new PDO("mysql:host=localhost;dbname=sqlinjection", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}