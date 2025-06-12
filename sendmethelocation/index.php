<?php
$pdo = require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titel = $_POST['title'];
    $genre = $_POST['genre'];
    $leeftijd = $_POST['age_rating'];
    $multiplayer = isset($_POST['multiplayer']) ? 1 : 0;
    $releasedatum = $_POST['release_date'];
    $beschrijving = $_POST['description'];

    $sql = "INSERT INTO games (titel, genre, leeftijd, multiplayer, releasedatum, beschrijving)
            VALUES (:titel, :genre, :leeftijd, :multiplayer, :releasedatum, :beschrijving)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titel', $titel);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':leeftijd', $leeftijd);
    $stmt->bindParam(':multiplayer', $multiplayer);
    $stmt->bindParam(':releasedatum', $releasedatum);
    $stmt->bindParam(':beschrijving', $beschrijving);

    if ($stmt->execute()) {
        echo "<p>Gamegegevens succesvol opgeslagen!</p>";
    } else {
        echo "<p>Er is iets misgegaan bij het opslaan van de gamegegevens.</p>";
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
    <title>Game Toevoegen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>
<main class="container mt-5">
    <h1>Game Toevoegen</h1>
    <form method="post" class="mt-4">
        <div class="mb-3">
            <label for="title" class="form-label">Titel van de game:</label>
            <input class="form-control" type="text" name="title" id="title" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <select class="form-control" id="genre" name="genre" required>
                <option value="">Selecteer een genre</option>
                <option value="Shooter">Shooter</option>
                <option value="RPG">RPG</option>
                <option value="Platformer">Platformer</option>
                <option value="Racing">Racing</option>
                <option value="Strategie">Strategie</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="age_rating" class="form-label">Leeftijdsclassificatie:</label>
            <select class="form-control" id="age_rating" name="age_rating" required>
                <option value="">Selecteer een classificatie</option>
                <option value="3+">3+</option>
                <option value="7+">7+</option>
                <option value="12+">12+</option>
                <option value="16+">16+</option>
                <option value="18+">18+</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Online multiplayer mogelijk?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="multiplayer" id="multiplayer_yes" value="1">
                <label class="form-check-label" for="multiplayer_yes">Ja</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="multiplayer" id="multiplayer_no" value="0" checked>
                <label class="form-check-label" for="multiplayer_no">Nee</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Releasedatum:</label>
            <input class="form-control" type="date" name="release_date" id="release_date" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving (max 500 tekens):</label>
            <textarea class="form-control" name="description" id="description" maxlength="500" rows="4" required></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="confirmation" name="confirmation" required>
            <label class="form-check-label" for="confirmation">Ik bevestig dat deze gegevens correct zijn</label>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Opslaan</button>
        </div>
    </form>
</main>
</body>
</html>