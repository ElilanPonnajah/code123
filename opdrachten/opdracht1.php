<?php ?>

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

    <label for="exBtw">Bedrag exclusief BTW:</label>
    <input type="number" name="exBtw" id="exBtw" > <br>

    <input type="radio" name="btw" id="9" value="9%">
    <label for="btw">Laag, 9%</label><br>

    <input type="radio" name="btw" id="21" value="21%">
    <label for="btw">Hoog, 21% </label><br>


    <button name="submite">Uitrekenen </button>
</form>
</body>
</html>
