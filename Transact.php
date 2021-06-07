<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>

        .navbar,
hr {
  clear: both;
  overflow: auto;
  margin: 10px 20px;
}

nav {
  float: right;

}

.logo img {
  float: left;
  position: relative;
  left: 40px;
  height: 65px;
  width: auto;
}

.fa-home {
  padding: 2px;
  color: #aa0000;
}

ul li {
  display: inline-block;
  padding: 10px;
  font-size: 16px;
  font-family: raleway;
}

ul li a:hover {
  background: #aa0000;
  color: white;
}
.navbar a{
    font-size: 18px;
    background: linear-gradient(360deg, #C4C4C4 -291.79%, rgba(196, 196, 196, 0) 150.75%);
    border: 1px solid #888888;
    color: black;
    box-sizing: border-box;
    padding: 11px 10px;
    margin: 0 3px;
    outline: none;
    text-decoration: none;
    border: 1px solid #ececec;
}
.container_transact{
    display: flex;
    justify-content: center;
    align-items: center;
}
#recieverform{
    padding: 5px 25px;
background: #FCFCFC;
box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.15), 0px 1px 3px rgba(0, 0, 0, 0.05);
display: flex;
flex-direction: column;
align-items: flex-start;
width: 550px;

}
#recieverform h4{
    text-transform: uppercase;
}
#recieverform input {
    height: 40px;
    width: 538px;
    padding: 4px 5px;
    margin: 13px 0px;
    font-size: 15px;
    background: #FFFFFF;
border: 1px solid #E1E1E1;
box-sizing: border-box;
border-radius: 10px;
outline: none;
}
button{
    background-color: #aa0000; 
    cursor: pointer;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  margin:4px 2px ;
}

/* footer  */

footer{
display: flex;
align-items: center;
justify-content: center;


/* right: 0%; */
}
footer li{
font-size: 16px;
cursor: pointer;
}
footer li:hover{
color: #AA0000;
}
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
    </style>
</head>
<body>

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
        <li> <a href="history.php"   >Transaction history</a> </li>
      </ul>
    </nav>
  </div>
<td>
<?php
include 'connection.php';


$account_no = $_GET['an'];

$query = "SELECT * FROM  accounts where account_number=$account_no";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

?>



    <div class="container_transact">
    <!-- reciever's form -->
    </form> 
    <form method="post" id="recieverform" >
    <h2 style="text-transform:uppercase;">Transfer to:</h2>
    <h4> <p>Sender's Name:
        <?php echo $row['name'] ; ?>
        </p></h4>
    <h4> Current Balance Amount:  
        <?php echo $row['currentBalance'] ; ?></h4>
    <h4>sender(account_no):</h4>
    <input type="number" name="senderid" id="" value = "<?php echo $account_no; ?>" >
    
    <h4>Reciever(account_no):</h4> 
    <input type="number" name="recieverid" id="">
    

    <h4>Amount to be transfered ₹:</h4>
    <input type="number" name="amounttransfer" class="w3-input" id="">
    
    
    <button type="submit" class="transact_button" name="submit">Transact</button>
    </form>
    </div>

  <?php

if(isset($_POST['submit'])) {

  $amount = $_POST['amounttransfer'];

  $from = $_POST['senderid'];  
  $query1="SELECT * FROM accounts WHERE account_number = $from" ;
  $result1 = mysqli_query($conn,$query1);
  $sender= mysqli_fetch_array ($result1);
 
  
    $to = $_POST['recieverid'];
  $query2="SELECT * FROM accounts WHERE account_number = $to" ;
  $result2 = mysqli_query($conn,$query2);
  $reciever= mysqli_fetch_array($result2);
  

  if($amount>$sender['currentBalance']) {
echo "<script> alert( 'insufficient funds' );</script>" ;
}
else if($amount<0) {
echo "<script> alert( 'negetive funds cant be transfered' );</script>" ;
}
else{

  $newbalance = $reciever['currentBalance'] + $amount ;  //amount to be added for the reciever
  $query = "UPDATE accounts SET currentBalance = $newbalance WHERE account_number = $to" ;
  mysqli_query($conn,$query);
  
  
  $newbalance = $sender['currentBalance'] - $amount ;  //amount to be deducted for the sender
  $query = "UPDATE accounts SET currentBalance = $newbalance WHERE account_number = $from" ;
 $fu=mysqli_query($conn,$query);


  $sender = $sender['name'];
  $receiver = $reciever['name'];
  $sql = "INSERT INTO `history` (`sender`, `reciever`, `amount`) VALUES ('$sender', '$receiver', '$amount');";
  $result =mysqli_query($conn,$sql);
 if($result){
  if($result){
    echo "<script> 
                    window.location='popup.php';
          </script>";
}
}

  $amount=0;
  $newbalance=0;
  

}


}

    ?>







    
<footer>
    <ul>
      <li>created by @ k.yashwanth | </li>
      <li> DisclosuresTerms & Conditions    | </li>
      <li> Privacy PolicyDisclaimer         | </li>
      <li> Contact through </li>
    </ul>
    </footer>


</body> 
</html>