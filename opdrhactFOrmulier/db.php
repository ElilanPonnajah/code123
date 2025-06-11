<?php



$host = 'localhost';
$dbname = 'registratie';
$username = 'root';
$password = '';


try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    die("Kan geen verbinding maken met de database: " . $e->getMessage());
}

return $pdo;
?>