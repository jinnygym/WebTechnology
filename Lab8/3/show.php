<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <style> 
    body {
            font-size: 20px;
            font-family: 'Kanit', sans-serif;
            padding: 2em;
            border-radius: 4px;
            position: relative;
            max-width: 50vw;
            margin: auto;
            background: -webkit-linear-gradient(-135deg,#c850c0,#4158d0);
            background: -o-linear-gradient(-135deg,#c850c0,#4158d0);
            background: -moz-linear-gradient(-135deg,#c850c0,#4158d0);
            background: linear-gradient(-135deg,#c850c0,#4158d0);
        }
        .container {
            background: rgb(240, 188, 223);
            padding: 3em;
            border-radius: 4px;
            position: relative;
            max-width: 50vw;
            margin: auto;
        }
    </style>
    <div class="container">
    <?php
        $Card = $_POST['IDCard'];
        $First = $_POST['FirstName'];
        $Last = $_POST['LastName'];
        $Add = $_POST['Address'];
        $diss = $_POST['dis'];
        $provi = $_POST['pro'];
        $idcode = $_POST['code'];
        $phone = $_POST['Phone'];

            if(strlen($Card) < 5){
                echo "<p>" . "<li style='color: red'>" . "หมายเลขบัตรประชาชน:" . $Card . "</li>"  . "</p>";
            } else {
                echo "<p>" . $Card . "</p>";
            }
            
            if(strlen($First) < 5){
                echo "<p>" . "<li style='color: red'>" . "ชื่อ:" . $First . "</li>" . "</p>";
            } else {
                echo "<p>" . $First . "</p>";
            }
            
            if(strlen($Last) < 5){
                echo "<p>" . "<li style='color: red'>" . "นามสกุล:" . $Last . "</li>" . "</p>";
            } else {
                echo "<p>" . $Last . "</p>";
            }

            if(strlen($Add) < 5){
                echo "<p>" . "<li style='color: red'>" . "ที่อยู่:" . $Add . "</li>" . "</p>";
            } else {
                echo "<p>" . $Add . "</p>";
            }

            if(strlen($diss) < 5){
                echo "<p>" . "<li style='color: red'>" . "อำเภอ/เขต:" . $diss . "</li>" . "</p>";
            } else {
                echo "<p>" . $diss . "</p>";
            }

            if(strlen($provi) < 5){
                echo "<p>" . "<li style='color: red'>" . "จังหวัด:" . $provi . "</li>" . "</p>";
            } else {
                echo "<p>" . $provi . "</p>";
            }

            if(strlen($idcode) < 5){
                echo "<p>" . "<li style='color: red'>" . "รหัสไปรษณีย์:". $idcode . "</li>" . "</p>";
            } else {
                echo "<p>" . $idcode . "</p>";
            }

            if(strlen($phone) < 5){
                echo "<p>" . "<li style='color: red'>" . "เบอร์โทรศัพท์:" . $phone . "</li>" . "</p>";
            } else {
                echo "<p>" . $phone . "</p>";
            }
    ?>
    </div>
</body>
</html>