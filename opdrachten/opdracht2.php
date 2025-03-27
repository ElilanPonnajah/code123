<?php

if(isset($_POST['submit'])){ 
    $getal1 = filter_input(INPUT_POST, 'getal-1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); 
    $getal2 = filter_input(INPUT_POST, 'getal-2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); 
    $optellen = filter_input(INPUT_POST, 'optellen', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); 
    $vermenigvuldigen = filter_input(INPUT_POST, 'vermenigvuldigen', FILTER_SANITIZE_NUMBER_INT); 
    $delen = filter_input(INPUT_POST, 'delen', FILTER_SANITIZE_NUMBER_INT); 
    $aftrekken = filter_input(INPUT_POST, 'aftrekken', FILTER_SANITIZE_NUMBER_INT); 
    

  echo $optellen = $getal1 + $getal2; 
  echo $vermenigvuldigen = $getal1 * $getal2; 
  echo $delen = $getal1 / $getal2; 
  echo $aftrekken = $getal1 - $getal2; 




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht2</title>
</head>
<body>
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

    <label for="getal-1">Getal 1</label>
    <input type="number" name="getal-1" id="getal-1" > <br>

    <input type="radio" name="optellen" id="optellen" >
    <label for="getal-1">Optellen</label>

    <input type="radio" name="aftrekken" id="Aftrekken" >
    <label for="getal-1">Aftrekken</label>

    <input type="radio" name="vermenigvuldigen" id="vermenigvuldigen" >
    <label for="getal-1">Vermenigvuldigen</label>

    <input type="radio" name="delen" id="delen" >
    <label for="getal-1">Delen</label> <br>

    
    <label for="getal-2">Getal 2</label>
    <input type="number" name="getal-2" id="getal-2" > <br>



    <button name="submit">Uitrekenen </button> <br>
</form>
</body>
</html>

</body>
</html>