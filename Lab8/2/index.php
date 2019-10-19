<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Lab8-2</title>
</head>
<body>
    <h1>เดือนตุลาคม 2562</h1>
    <table class="row" border="1">
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
<?php
    $day = 1;
    for ($row = 0; $row < 5; $row ++) {
        echo "<tr>";
        for ($col = 0; $col < 7; $col ++) {
            echo "<td>";

            if ($day > 31){
                echo "</td>";
            }
            else{
                if (($col > 1) && ($row == 0)){
                    echo $day++;
                }
                if (($col >= 0) && ($row >= 1)){
                    echo $day++;
                }
                echo "</td>";
            }
            
        }
        echo "</tr>";
    }
?>
 </table>
</body>
</html>