<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
  }
/* body{
  height: 140vh;
} */

.modal-bg{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.315);
}
.bg-close{
  display: none;
    visibility: hidden;
    opacity: 0;
  }
 .container{
    width: 337.34px;
    height: 384px;
    background: rgb(199, 199, 199);
    filter: drop-shadow(2px 8px 16px rgba(0, 0, 0, 0.25));
    background: #FFFFFF;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: fixed;
    border-radius: 15px;
  }
  .container h3 {
    /* position: absolute; */
    
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: black;

/* meroon */
background: white;
  }
  .container p{
    display: block;
    font-size: 15px;
  }
  .container img{
    height: 141px;
    margin: 25px;
    width: auto;
  }
  . button{
    width: 120px;
  }
  .button {
  background-color: #AA0000;
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover{
  color: black;
}
</style>
<body>
  <div class="modal-bg" id="close">
  <div class="container">
    <h3>Transaction Successful!</h3>
    <div><p>Your transaction is successful</p></div>
    
    <img src="images/anmimatedtickmark.gif" alt="" >
    <a href="history.php" class="button">History</a> 

  </div>
</div>
</body>

</html>