<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "Het formulier is via de POST method verstuurd"."<br>";
    echo "De naam is".$_POST['name']. "<br>";
    echo "De Email adres is ".$_POST['email']. "<br>";
    echo "De geboortedatum is ". $_POST['birthday']."<br>";
    echo "Het geslacht is".$_POST['gender'] ."<br>";
    echo "De gekozen opleiding is ". $_POST['school']."<br>";
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
    <h1>Gegevens</h1>
    <form method="post">
        <div>
            <label for="name">Naam:</label>
            <input class="form-control " type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">E-Mail:</label>
            <input class="form-control " type="email" name="email" id="email">
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
            <label for="school">Opleding:</label>
            <select class="form-control " id="school" name="school">
                <option value="Software-developer">Software Developer</option>
                <option value="Zorg">Zorg</option>
                <option value="economie">Economie</option>
                <option value="loodgieter">Loodgieter</option>
            </select>
        </div>
        <div>
            <label for="news-check">Aanmelden voor nieuwsbrief</label>
            <input  type="checkbox">
        </div>
        <div>
            <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
    </form>
</main>


</html>