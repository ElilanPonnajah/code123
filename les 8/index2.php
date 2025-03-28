
<?php

require 'db.php';
const GENDER_REQUIRED = "Vul uw geslacht in.";
const AGE_REQUIRED = "Vul uw leeftijd in.";
const NAME_REQUIRED = "Vul uw naam in.";
const EMAIL_REQUIRED = "Vul uw email in.";

$errors = [];
$inputs = [];


if(isset($_POST['submit'])){ //kijkt of die var is geset.
     $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);

     if (empty($gender)){
         $errors['gender'] = GENDER_REQUIRED;
     } else {
         $inputs['gender'] = $gender;
     }


    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

    if (empty($age)){
        $errors['age'] = AGE_REQUIRED;
    } else {
        $inputs['age'] = $age;
    }


    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email)){
        $errors['email'] = EMAIL_REQUIRED;
    } else {
        $inputs['email'] = $email;
    }



    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($name)){
        $errors['name'] = NAME_REQUIRED;

    } else {
        $inputs['name'] = $name;


    }


if (count($errors) === 0){

    global $db;
    // zolang de 2e maar gelijk is aan de eerste, bijv de eerste van de values moet gender zijn en de eerste insert ook gender
    $query = $db->prepare('INSERT INTO user (gender,name,age,email) VALUES(:gender, :name, :age, :email)');
    $query->bindParam('gender', $gender);
    $query->bindParam('name', $name);
    $query->bindParam('age', $age);
    $query->bindParam('email', $email);
    $query->execute();

    header('Location: users.php');


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
    <input type="radio" name="gender" id="man" value="Meneer" <?php if (isset($inputs['gender']) && $inputs['gender'] === 'Meneer'){echo 'checked';} ?>>
    <label for="man">Man</label><br>

    <input type="radio" name="gender" id="woman" value="Mevrouw" <?php if (isset($inputs['gender']) && $inputs['gender'] === 'Mevrouw'){echo 'checked';} ?>>
    <label for="woman">Vrouw</label><br>
    <input type="radio" name="gender" id="different" value="Anders" <?php if (isset($inputs['gender']) && $inputs['gender'] === 'Anders'){echo 'checked';} ?>>
    <label for="different">Ander</label><br>
    <label for="name">Naam:</label>
    <input type="text" name="name" id="name"  value="<?= $inputs['name'] ?? '' ?>"> <br>
    <div><?= $errors['name'] ?? ''?> </div>
    <label for="age">Leeftijd: </label>
    <input type="number" name="age" id="age" value="<?= $inputs['age'] ?? '' ?>"> <br>
    <div><?= $errors['age'] ?? ''?> </div>


    <label for="email">Email:</label>
    <input type="email" name="email" id="name" value="<?= $inputs['email'] ?? '' ?>"> <br>
    <div><?= $errors['email'] ?? ''?> </div>
    <button name="submit">Verzenden </button>
</form>
</body>
</html>
