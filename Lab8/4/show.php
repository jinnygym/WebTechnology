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
            max-width: 50vw;
            margin: auto;
        }
        table,
        th,
        tr,
        td {
            border: 1px solid black;
        }
    </style>
    <div class="container">
    <?php
        $set = array(
            'IDCard' => $_POST['IDCard'],
            'FirstName' => $_POST['FirstName'],
            'LastName' => $_POST['LastName'],
            'Address' => $_POST['Address'],
            'dis' => $_POST['dis'],
            'pro' => $_POST['pro'],
            'code' => $_POST['code'],
            'Phone' => $_POST['Phone']);

        echo "<table class='table table-striped' ><tbody>";
        echo "<tr>";
        echo "<th>ลำดับ</th><th>รายการ</th><th>ลงทะเบียน</th>";
        echo "</tr>";
    //1
    echo "<tr>";
    if (strlen($set['IDCard']) < 5) {
        echo "<td style='color:red'>1) " . "&nbsp&nbsp</td>" . "<td> หมายเลขบัตรประชาชน </td>" . "<td style='color:red'> " . $set['IDCard'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>1) " .  "&nbsp&nbsp</td>" . "<td> หมายเลขบัตรประชาชน </td>" . "<td> " . $set['IDCard'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //2
    echo "<tr>";
    if (strlen($set['FirstName']) < 5) {
        echo "<td style='color:red'>2) " . "&nbsp&nbsp</td>" . "<td> ชื่อ </td>" . "<td style='color:red'> " . $set['FirstName'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>2) " . "&nbsp&nbsp</td>" . "<td> ชื่อ </td>" . "<td> " . $set['FirstName'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //3
    echo "<tr>";
    if (strlen($set['LastName']) < 5) {
        echo "<td style='color:red'>3) " . "&nbsp&nbsp</td>" . "<td> นามสกุล </td>" . "<td style='color:red'> " . $set['LastName'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>3) " . "&nbsp&nbsp</td>" . "<td> นามสกุล </td>" . "<td> " . $set['LastName'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //4
    echo "<tr>";
    if (strlen($set['Address']) < 5) {
        echo "<td style='color:red'>4) " . "&nbsp&nbsp</td>" . "<td> อำเภอ/เขต </td>" . "<td style='color:red'> " . $set['Address'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>4) " . "&nbsp&nbsp</td>" . "<td> ที่อยู่ </td>" . "<td> " . $set['Address'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //5
    echo "<tr>";
    if (strlen($set['dis']) < 5) {
        echo "<td style='color:red'>5) " . "&nbsp&nbsp</td>" . "<td> อำเภอ/เขต </td>" . "<td style='color:red'> " . $set['dis'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>5) " . "&nbsp&nbsp</td>" . "<td> อำเภอ/เขต </td>" . "<td> " . $set['dis'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //6
    echo "<tr>";
    if (strlen($set['pro']) < 5) {
        echo "<td style='color:red'>6) " . "&nbsp&nbsp</td>" . "<td> จังหวัด </td>" . "<td style='color:red'> " . $set['pro'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>6) " . "&nbsp&nbsp</td>" . "<td> จังหวัด </td>" . "<td> " . $set['pro'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //7
    echo "<tr>";
    if (strlen($set['code']) < 5) {
        echo "<td style='color:red'>7) " . "&nbsp&nbsp</td>" . "<td> รหัสไปรษณีย์ </td>" . "<td style='color:red'> " . $set['code'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>7) " . "&nbsp&nbsp</td>" . "<td> รหัสไปรษณีย์ </td>" . "<td> " . $set['code'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    //8
    echo "<tr>";
    if (strlen($set['Phone']) < 5) {
        echo "<td style='color:red'>8) " . "&nbsp&nbsp</td>" . "<td> เบอร์โทรศัพท์ </td>" . "<td style='color:red'> " . $set['Phone'] . "&nbsp&nbsp&nbsp</td>";
    } else {
        echo "<td>8) " . "&nbsp&nbsp</td>" . "<td> เบอร์โทรศัพท์ </td>" . "<td> " . $set['Phone'] . "&nbsp&nbsp&nbsp</td>";
    }
    echo "</tr>";
    echo "</table></tbody>";
    ?>
    </div>
</body>
</html>