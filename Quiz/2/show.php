<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Action</title>
</head>
<body>
    <?php
        $url = "https://www.jacktnp.com/api/steam";
        $response = file_get_contents($url);
        $result = json_decode($response);
    foreach($result as $tream){

    }
    ?>
</body>
</html>
