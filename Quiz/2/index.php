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
    <title>Steam Search</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <label for="name">ค้นหาโดย</label>
            <select name="tag1" class="selid">
                <option value="100">--- ไม่เลือกปี ---</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
            </select>
            <select name="tag2" class="selid">
                <option value="200">--- ไม่เลือกยอดเข้าชม ---</option>
                <option value="201">0-1000</option>
                <option value="202">1001-10000</option>
                <option value="203">10001-100000</option>
                <option value="204">100001-1000000</option>
                <option value="205">1 ล้านขึ้นไป</option>
            </select>
    <button type="submit" class="btn btn-secondary" name="submit">ค้นหา</button>
    <!-- <i class='fab fa-sistrix'></i> -->
</form>
    </div>
    <?php if(isset($_POST['submit'])){
        $tag01 = $_POST['tag1'];

        // $url = "https://www.jacktnp.com/api/steam";
        // $response = file_get_contents($url);
        // $result = json_decode($response);
        $url = "https://www.jacktnp.com/api/steam";
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        $result = json_decode($response);
        echo "<br>";
    foreach ($result as $stream){
        if($stream->year == $tag01){
            echo "<b>$stream->title</b>";
        echo "<br>";
        }
    }
    }?>
</body>
</html>
