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
      <img src="images/logo_00000.png" alt="" width="130" />
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
        <li> <a href="viewallcustomers.php" style="background: #AA0000; color:white;">View all customers</a></li>
        <li> <a href="history.php">Transaction history</a> </li>
      </ul>
    </nav>
  </div>
<body>
  <div class="tableflex">
    <table   cellspacing="5" class="content-table">
      <thead>
    <tr>
    <th>s.no</th>
    <th>account_no</th>
    <th>name</th>
    <th>email</th>
    <th>current balance</th>
    <th colspan="2" align="center" >Operation</th>
    </tr></thead>
    <?php

include 'connection.php' ;
$query = "SELECT * FROM accounts ";
$data = mysqli_query($conn, $query);
$result  = mysqli_fetch_assoc($data);

// echo $result['s.no'] .$result['account_number'] .$result['name'].$result['email'].$result['current balance'] ;
while($result = mysqli_fetch_assoc($data)) {
    echo "
   <tbody>
    <tr>
    
    <td>".$result['s_no']."</td>
    <td>".$result['account_number']."</td>
    <td>".$result['name']."</td>
    <td>".$result['email']."</td>
    <td>".$result['currentBalance']."</td>
    <td>
    <a  href='Transact.php?&nm=$result[name]&an=$result[account_number]&cb=$result[currentBalance]'>
        VIEW
        </a>
    </td>
    
        </tr> 
        </tbody>" ;
    
    

}

?>
    </table>
  </div>
</body>
</html>