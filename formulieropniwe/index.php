<?php
require 'db.php';
global $db;

$query = $db->prepare('SELECT * FROM data');
$query->execute();

$games = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<main>
    <h1>Registratie Formulier</h1>
    <form method="post">
    <div>
        <label for="name">Naam: </label>
        <input class="form-control" type="text" name="name" id="name">
    </div>

        <div>
            <label for="password">Password: </label>
            <input class="form-control" type="text" name="password" id="password">
        </div>

        <div>
            <label for="email">Email: </label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <div>
            <button class="btn btn-primary" type="submit"> Submit</button>
        </div>







    </form>
</main>
</body>
</html>
