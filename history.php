<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  <?php
  include 'style.css';
  ?>
.content-table{
border-collapse: collapse;
margin:25px 0;
font-size:0.9em;
min-width: 400px;

box-shadow: 0 0 20px rgba(0,0,0,0.15);
}
.content-table thead tr {
  background:#AA0000;
  color:white;
  text-align:left;
  font-weight:bold;
}
.content-table th{
  text-transform:uppercase;
}
.content-table th,.content-table td {
  padding: 15px 20px;
}
.content-table tbody tr {
  border-bottom:1px solid #dddddd;
}
.content-table tbody tr :nth-child(odd) {
  background: #f3f3f3 ;
}
.tableflex{
  display: flex;
  justify-content: center;
}
</style>

<div class="navbar">
    <div class="logo">
      <img src="logo_00000.png" alt="" width="130" />
    </div>
    <nav class="menu">
      <ul>
        <li> <a href="index.php" style="    font-size: 18px;
    background: linear-gradient(360deg, #C4C4C4 -291.79%, rgba(196, 196, 196, 0) 150.75%);
    border: 1px solid #888888;
    color: black;
    box-sizing: border-box;
    padding: 11px 10px;
    margin: 0 3px;
    outline: none;
    text-decoration: none;
    border: 1px solid #ececec;"><i class="fas fa-home" style="color: white;"></i>Home</a> </li>
        <li> <a href="viewallcustomers.php" >View all customers</a></li>
        <li> <a href=""   style="background: #AA0000; color:white;">Transaction history</a> </li>
      </ul>
    </nav>
  </div>
<body>
  <div class="tableflex">
    <table border="2" cellspacing="5" class="content-table">
    <tr>
    <thead>
    <th>s.no</th>
    <th>SENDER'S NAME</th>
    <th>RECIEVER'S NAME</th>
    <th>AMOUNT</th>
    <th style="text-transform:uppercase;">operation</th>
    
</thead>
    </tr>
    <?php

include 'connection.php' ;
$query = "SELECT * FROM history ";
$data = mysqli_query($conn, $query);
$result  = mysqli_fetch_array($data);

// echo $result['s.no'] .$result['account_number'] .$result['name'].$result['email'].$result['current balance'] ;
echo "
<tr>
<td>".$result['s_no']."</td>
<td>".$result['sender']."</td>
<td>".$result['reciever']."</td>
<td>".$result['amount']."</td>
<td> <a href='delete.php?del=$result[s_no]'>delete</a> </td>

    </tr> " ;
while($result = mysqli_fetch_assoc($data)) {
    echo "
    <tr>
    
    <td>".$result['s_no']."</td>
    <td>".$result['sender']."</td>
    <td>".$result['reciever']."</td>
    <td>".$result['amount']."</td>
    <td> <a href='delete.php?del=$result[s_no]'>delete</a> </td>

        </tr> " ;
        
}

?>
    </table>
    </div>
</body>
</html>