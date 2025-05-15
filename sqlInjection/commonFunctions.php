<?php
// Shows the data in a table format
function PrintData($fetchedObject){
    echo "<table border='1'>";
    echo "<tr>";
    foreach($fetchedObject[0] as $key => $value){
        echo "<th>$key</th>";
    }
    echo "</tr>";
    foreach($fetchedObject as $row){
        echo "<tr>";
        foreach($row as $key => $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>