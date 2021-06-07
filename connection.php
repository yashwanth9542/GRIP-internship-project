<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost"; //connection
    $username ="root";
    $password = "";
    $database = "bankaccont";
    $conn = mysqli_connect ($servername,$username,$password,$database);
    if(!$conn) {
        die("sorry not connected".mysqli_connect_error());
    }
    else{
        // echo "<script>alert( 'succesfully connected' )</script>";
    }
    ?>
</body>
</html>