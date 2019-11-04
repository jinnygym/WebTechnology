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
    <title>Lab9-3</title>
</head>
<body>
    <center>
    <div class="list-group">
        <h2 href="#!" class="list-group-item list-group-item-action
        list-group-item-light">Country</h2>
    </div>
    </center>

    <table width="100%" class="table table-bordered">
        <?php
        $url = "http://10.0.15.12/lab9/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);
        echo"<tr>";
        foreach ($result as $country) {
            $jef = 2;
            echo "<td height='100'>&emsp; Name : <b>$country->name</b><br>";
            echo "&emsp; Capital : $country->capital<br>";
            echo "&emsp; Population : $country->population<br>";
            echo "&emsp; Region : $country->region<br>";
            echo "&emsp; Location : ";
            foreach ($country->latlng as $local){
                echo "$local"." ";
            }
            echo "&emsp; <br>";
            echo "&emsp; Borders : ";
            foreach ($country->borders as $bor){
                echo "$bor"." ";
                $jef += 1;
                if ($jef >=7) {
                $jef = 0;
                echo "&emsp; <br> &emsp; ";
                }
            }
            echo "</td><td><img src='$country->flag' , 'width='150' height='150'><br></td> ";
        echo"</tr>";
        }
    ?>
    </table>

<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
</style>
</body>
</html>
