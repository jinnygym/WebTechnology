<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <title>football</title>
</head>
<body>

<?php
    $url = "https://jacktnp.github.io/webtech2019/quiz/api/01/football.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    foreach ($result as $football){
    echo "<tr>"; //สร้างตาราง
        foreach($football->teams as $team){
            echo "&emsp; Tag: $football->teams<br>";
        }

        // foreach ($football->area as $area){
        //     echo "&emsp; <b>$team->area</b>";
        //     echo "$team"." ";
        // }

    echo "</tr>";
    }

?>
</body>
</html>
