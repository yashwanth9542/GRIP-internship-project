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
    include 'connection.php' ;
    $pk = $_GET['del'];

    $query="DELETE FROM history WHERE s_no = '$pk'";
    $data=mysqli_query($conn,$query);
    header('Location:history.php');
    ?>
</body>
</html>