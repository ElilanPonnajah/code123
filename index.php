<?php

if(isset($_POST['submit'])){ //kijkt of die var is geset.
     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

   echo 'Beste ' . $gender . ',<br> 
Uw naam is '. $name . '.<br>
uw leeftijd is '. $age . '.<br> 
uw email is '. $email . '.<br>';


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
    <input type="radio" name="gender" id="man" value="Man">
    <label for="man">Man</label><br>

    <input type="radio" name="gender" id="woman" value="Vrouw">
    <label for="woman">Vrouw</label><br>
    <input type="radio" name="gender" id="different" value="Anders">
    <label for="different">Ander</label><br>
    <label for="name">Naam:</label>
    <input type="text" name="name" id="name" > <br>
    <label for="age">Leeftijd: </label>
    <input type="number" name="age" id="age"> <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="name" ><br>
    <button name="submit">Verzenden </button>
</form>
</body>
</html>
