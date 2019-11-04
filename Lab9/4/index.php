<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab9-4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
    <center>
    <div class="list-group">
        <h2 href="#!" class="list-group-item list-group-item-action
        list-group-item-light">Nobel Prize 2010 - 2018</h2>
    </div>
    </center>
    <div class="container">
    <?php
    $url = "http://10.0.15.12/lab9/restapis/nobleprize100";
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo ' <table class="table table-bordered">';
    echo '<thead>
        <tr>
        <th scope="col">Year</th>
        <th scope="col">Category</th>
        <th scope="col">Laureates</th>
        </tr>
    </thead>';
    foreach ($result as $title) {
           echo "<tr>
           <td>".$title->year."</td>";
           echo "<td>".$title->category."</td><td>";
           foreach ($title->laureates as $people) {
            echo "ID : $people->id<br>";
            echo " Name: $people->firstname $people->surname ";
            echo "<br> Motivation : ";
            echo $people->motivation."<br>";
            }
        }
    ?>
    </div>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
    tr{
        background: linear-gradient(-135deg,#7be1fd,#ffb6d7);
    }
    .container {
        background: white;
        padding: 2em;
        border-radius: 4px;
        position: center;
        margin: auto;
}
</body>
</html>
