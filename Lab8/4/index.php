<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Lab8-4</title>
</head>
<body>
    <style>
        body {
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

        form {
            max-width: fit-content;
            margin: auto;
        }

        form#myForm input[type=text] {
            margin-right: -5px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px #9e9e9e9e solid;
            width: 95%;
            padding: 5px;
            margin-top: 10px;
            height: 20px;
        }

        .sm {
            background-color: aquamarine;
        }

        .container {
            background: rgb(240, 188, 223);
            padding: 3em;
            border-radius: 4px;
            max-width: 50vw;
            margin: auto;
        }
    </style>

    <div class="container">
        <form action="show.php" id="myForm" onsubmit="return validateForm()" method="post">
            <p><label for='IDCard'>หมายเลขบัตรประชาชน:</label><br>
                <input class="bootstrap" type="text" id="IDCard" name="IDCard" maxlength="13" /></p>
            <p><label for='FirstName'>ชื่อ­:</label><br>
                <input class="bootstrap" type="text" id="FirstName" name="FirstName"/></p>
            <p><label for='LastName'>นามสกุล:</label><br>
                <input class="bootstrap" type="text" id="LastName" name="LastName"/></p>
            <p><label for='Address'>ที่อยู่:</label></p>
                <input class="bootstrap" type="text" id="Address" name="Address"/><br>
            <p><label for='Address'>อำเภอ/เขต:</label><br>
                <input class="bootstrap" type="text" id="dis" name="dis"/></p>
            <p><label for='Address'>จังหวัด:</label><br>
                <input class="bootstrap" type="text" id="pro" name="pro"/></p>
            <p><label for='Address'>รหัสไปรษณีย์:</label><br>
                <input class="bootstrap" type="text" id="code" name="code"/></p>
            <p><label for='Phone'>เบอร์โทรศัพท์:</label><br>
                <input class="bootstrap" type="text" id="Phone" name="Phone"/></p>
            <p><input class="bootstrap" type="submit" name="submit" class="sm" value="สมัครสมาชิก"></p>
        </form>
    </div>
</body>

</html>