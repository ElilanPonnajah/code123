<?php
require 'db.php';
global $db;

$errors = [];
$inputs = [];

const NAME_REQUIRED = 'vul je naam in';
const MIN_BET_REQUIRED = 'vul een minimale inzet in';


if (isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($name)){
        $errors['name'] = NAME_REQUIRED;
    } else {
        $inputs ['name'] = $name;
    }
}

if (isset($_POST['submit'])){
    $minBet = filter_input(INPUT_POST, 'min_bet', FILTER_VALIDATE_INT);

    if (empty($minBet)){
        $errors['min-bet'] = MIN_BET_REQUIRED;
    } else {
        $inputs ['min_bet'] = $minBet;
    }
    if (count($errors)=== 0){
        $query = $db->prepare('INSERT INTO games (name, min_bet)VALUES (:name, :min_bet)');
        $query->bindParam('name', $inputs['name']);
        $query->bindParam('min_bet', $inputs['min_bet']);
        $query->execute();

        header('Location: index.php');
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
</head>
<body>

<form method="post">
    <label for="name "> Naam</label>
    <input type="text" name="name" id="name " value="<?= $inputs['name'] ?? '' ?>">
    <div><?= $errors['name'] ?? '' ?> </div>
    <label for="min_bet "> minimale inzet</label>
    <input type="number" name="min_bet" id="min_bet " value="<?= $inputs['name'] ?? '' ?>" >
    <button name="submit">Verzenden </button>

</form>
</body>
</html>
