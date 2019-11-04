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
    <title>Lab9-1</title>
</head>
<body>
    <center>
    <div class="list-group">
        <h1 href="#!" class="list-group-item list-group-item-action list-group-item-primary">Currency Converter</h1>
    </div><br><br>

    <form action="index.php" method="POST">
        <label for='name'>From : </label>
            <select name="money">
            <option value="THB" selected="selected">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input class="col-sm-2 col-form-label" name="before" type="number"  placeholder="Currency input"/><br><br>
        <label for="name">To :</label>
        <select name="after">
            <option value="THB" selected="selected">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select><br><br>
        <button type="submit" class="btn btn-secondary" name="submit">Converter</button>
    </form>
    </div>
    <?php  if(isset($_POST['submit'])){
        $From = $_POST['before'];
        $curren = $_POST['money'];
        $change = $_POST['after'];

        $url = "http://10.0.15.12/lab9/restapis/latest";
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        $result = json_decode($response);
        echo "<br>";
        echo "<input value='". (($result->rates->$change)/($result->rates->$curren))*$From  . "'/> ";
    } ?>
</center>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }
</style>
</body>
</html>
