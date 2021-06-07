<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grip Project</title>
  <script src="https://kit.fontawesome.com/45c924f266.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Signin form</title>
  
<style>
  body{
    border:3px solid #AA0000;
  }
    <?php
  include 'style.css';
  ?>
</style>
</head>

<body>

  <div class="navbar">
    <div class="logo">
      <img src="images/logo_00000.png" alt="" width="130" />
    </div>
    <nav class="menu">
      <ul>
        <li> <a href="index.php" style="color: white;
          background:#AA0000;border: 1px solid #888888;"><i class="fas fa-home" style="color: white;"></i>Home</a> </li>
        <li> <a href="viewallcustomers.php">View all customers</a></li>
        <li> <a href="history.php">Transaction history</a> </li>
      </ul>
    </nav>
  </div>
  <hr />

  <div class="banner">
    <div class="banner_img">
      <img src="" name="slide"  >
    </div>
    <div class="sample_buttons">
        <ul>
          <li> <img src="q1.png" alt=""> Online Account Opening</li>
          <li>E-Filing Of IT Returns</li>
          <li>SIBer Trade/Online Trading</li>
          <li>Online Ticket Booking</li>
          <li>Press Release</li>
          <li>Loan Enquiry Form</li>
          <li>Complaint Registration  </li>
        </ul>
    </div>
  </div>
  <div class="dashed-lines">
    <hr>
    <hr>
    <hr>
  </div>

<footer>
<ul>
  <li>created by @ k.yashwanth | </li>
  <li> DisclosuresTerms & Conditions    | </li>
  <li> Privacy PolicyDisclaimer         | </li>
  <li> Contact through </li>
  <li><i class="fab fa-twitter"></i></li>
  <li></i><i class="fab fa-google-plus-g"></i></li>
  <li><i class="fab fa-facebook"></i></li>
  <li><i class="fab fa-spotify"></i></li>
</ul>
</footer>
</body>
<script>
var images = [];
images[0] = 'images/slideshow img_00000.png';
images[1] = 'images/sample grip img 2_00000.png';
images[2] = 'images/sib2.jpg';
var i=0;
function change_img() {
  document.slide.src=images[i];
  console.log(i);
  if(i<2) {
    console.log(i);
i++;
  }
  else{
i=0;    
  }
  

 
}
setInterval(change_img,3000);
window.onload = change_img;
</script>
</html>