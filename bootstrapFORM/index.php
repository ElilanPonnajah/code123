<?php
require 'db.php';
global $db;


$query = $db->prepare('SELECT * FROM gegevens');
$query->execute();
$games = $query->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];

    $sth = $db->prepare("INSERT INTO gegevens (name, review) VALUES (:name, :review)");
    $sth->bindParam(':name', $name);
    $sth->bindParam(':review', $review);
    $sth->execute();
}
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</head>
<body>
<main>
    <h1>Review</h1>
    <form method="post">
        <div>
            <label for="name">Naam:</label>
            <input class="form-control " type="text" name="name" id="name">
        </div>

        <div>
            <label for="review">Review:</label>
            <input class="form-control " type="input" name="review" id="review">
        </div>



        <div>
            <label for="terms">Accepteer de voorwaarden</label>
            <input  type="checkbox">
        </div>
        <div>
            <button class="btn btn-primary" type="submit"> Verzenden</button>
        </div>
    </form>
</main>


</html>

