<?php
require 'lib/connect.php';
require 'lib/commonFunctions.php';

$username = "root";
$password = "";


try {

    $pdo = new PDO("mysql:host=localhost;dbname=sqlinjection" , $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];


        $sql = "SELECT firstname, lastname, classname FROM students WHERE id = :id";
        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


        if ($stmt->rowCount() > 0) {
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
            PrintData($students);
        } else {
            echo "No student found with ID $id.";
        }
    } else {
        echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
</head>
<body>
    <h1>View Student Information</h1>
    <p>Geef het id op van de student die je zoekt en druk op View om de klas en voor- en achternaam van de student te tonen.</p>
    <form method="get">
        <label for="id">Student ID:</label>
        <input type="text" id="id" name="id" required>
        <button type="submit">View</button>
    </form>
</body>
</html>
        ';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>