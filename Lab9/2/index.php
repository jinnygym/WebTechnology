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
    <title>Lab9-2</title>
</head>
<body>
    <center>
    <div class="list-group">
        <h2 href="#!" class="list-group-item list-group-item-action
        list-group-item-light">Movie List</h2>
    </div>
    </center>
    <div class="container">
    <div class="justify-content-center col-12 bg-info text-white">
    <?php
    $url = "http://10.0.15.12/lab9/restapis/movies90";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $num = 1;
    foreach ($result as $movie){
        echo "&emsp; <b>$num : $movie->title </b> ($movie->year)<br>";
        echo "&emsp; <b>Cast : </b>";
        foreach ($movie->cast as $namecast){
            echo "&emsp;- $namecast<br>";
        }
        echo "&emsp; <b>Genres : </b>";
        foreach ($movie->genres as $gen){
            echo "&emsp; $gen<br>";
        }
        echo "&emsp; <br>";
        $num ++;
    }
    ?>
    </div></div>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
    .container {
        background: white;
        padding: 2em;
        border-radius: 4px;
        position: center;
        margin: auto;
}
</style>
</body>
</html>
