<?php
    include "connect.php";
    $birthday=$_POST['birthday'];
    $sql = "SELECT * FROM casi where NgaySinh='$birthday'";
    $results = $connect->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Tên casi</th></tr>";
    while($row=$results->fetch_row())
    {
        echo "<tr><td>$row[1]</td></tr>";
        
    }
    echo "</table>";
?>
