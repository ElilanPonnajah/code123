<?php

$pdo = require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $voornaam = $_POST['name'];
    $achternaam = $_POST['lastname'];
    $email = $_POST['email'];
    $geboortedatum = $_POST['birthday'];
    $geslacht = $_POST['gender'];
    $woonplaats = $_POST['place'];
    $opleiding = $_POST['school'];
    $akkoord_voorwaarden = isset($_POST['news-check']) ? 1 : 0;


    $sql = "INSERT INTO gebruikers (voornaam, achternaam, email, geboortedatum, geslacht, woonplaats, opleiding, akkoord_voorwaarden)
            VALUES (:voornaam, :achternaam, :email, :geboortedatum, :geslacht, :woonplaats, :opleiding, :akkoord_voorwaarden)";


    $stmt = $pdo->prepare($sql);

    // Bind de parameters
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':geboortedatum', $geboortedatum);
    $stmt->bindParam(':geslacht', $geslacht);
    $stmt->bindParam(':woonplaats', $woonplaats);
    $stmt->bindParam(':opleiding', $opleiding);
    $stmt->bindParam(':akkoord_voorwaarden', $akkoord_voorwaarden);

    // Voer de query uit
    if ($stmt->execute()) {
        echo "<p>Gegevens succesvol opgeslagen!</p>";
    } else {
        echo "<p>Er is iets misgegaan bij het opslaan van je gegevens.</p>";
    }
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
    <h1>Registreren</h1>
    <form method="post">
        <div>
            <label for="name">Voornaam:</label>
            <input class="form-control " type="text" name="name" id="name">
        </div>

        <div>
            <label for="lastname">Achternaam:</label>
            <input class="form-control " type="text" name="lastname" id="lastname">
        </div>

        <div>
            <label for="email">Email: </label>
            <input class="form-control" type="email" name="email" id="email">
        </div>


        <div>
            <label for="birthday">Geboortedatum:</label>
            <input  class="form-control " type="date" name="birthday">
        </div>


        <div>
            <label for="gender">Geslacht:</label>
            <label for="man">Man</label>
            <input  class="form-check-input"  type="radio" name="gender" id="man" value="man">
            <label for="woman">Vrouw</label>
            <input class="form-check-input" type="radio" name="gender" id="woman" value="woman">
        </div>


        <div>
            <label for="place">Woonplaats:</label>
            <input class="form-control " type="text" name="place" id="place">
        </div>


        <div>
            <label for="school">Opleding:</label>
            <select class="form-control " id="school" name="school">
                <option value="Software-developer">Software Developer</option>
                <option value="Zorg">Zorg</option>
                <option value="economie">Economie</option>
                <option value="loodgieter">Loodgieter</option>
            </select>
        </div>
        <div>
            <label for="news-check">Ik ga akkoord met de voorwaarden</label>
            <input  type="checkbox">
        </div>
        <div>
            <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
    </form>
</main>


</html>
