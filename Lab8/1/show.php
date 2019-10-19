<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <title>ตารางสูตรคูณ</title>
</head>
<body>
<style>
        body{
            font-family: 'Kanit', sans-serif;
        }
        hr { 
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        }
        h1{
            background-color: plum;
            text-align: center;
        }
    </style>
    <?php
        $value =  intval($_POST["txtMsg"]);
        $myarr = array(1,2,3,4,5,6,7,8,9,10,11,12);
        // $power_value = $value * $value;
        // echo "Power of " . $value . " is " . $power_value;
        echo "<h1>ตารางสูตรคูณแม่ : $value</h1>";
        for ($i = 0; $i < sizeof($myarr); $i++) {
            echo "<center>" . "<h3>". $myarr[$i] .  " x " . $value . " = " . $myarr[$i] * $value . "<hr width=30%>". "</h3>" . "<br>" . "</center>";
        }
    ?>
    <p> <?php echo $_POST["txtMsg"]; ?> </p> 
</body>
</html>