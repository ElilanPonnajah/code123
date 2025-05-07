<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    global $db;

    $password = $_POST['password'];
    $gehashtePassword = password_hash($password, PASSWORD_DEFAULT);

    $sth = $db->prepare("INSERT INTO data (username, password, email) VALUES (:name, :password, :email)");
    $sth->bindParam(':name', $_POST['username']);
    $sth->bindParam(':password', $gehashtePassword);
    $sth->bindParam(':email', $_POST['email']);
    $sth->execute();



}
?>
