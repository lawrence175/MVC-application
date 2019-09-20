<!DOCTYPE html>
<!--
Author: lawrence k
//True Mercy Africa
-->
<head>
<title>True Mercy Africa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="../favicon_tma.PNG" type="image/png" sizes="32x32">
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#000051;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- start of scroll up button -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
          <li><a href="index.php">English</a></li>
          <li><a href="../kr.php">Korean</a></li>
        <li><a href="../fr.php">French</a></li>
        <li><a href="../es.php">Spanish</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.php">True Mercy Africa</a></h1>
      <p>"Luke 6:36,therefore be merciful,just as your father also is merciful"</p>
    </div>
    
<!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../index.php">HOME</a></li>
        <li><a class="#" href="about.php">WHO WE ARE</a>
          <li><a class="drop" href="#">GET INVOLVED</a>
            <ul>
              <li><a href="donate.php">Donate</a></li>
              <li><a href="fundraise.php">Fundraise</a></li>
              <li><a href="volunteer.html">Volunteer</a></li>
            </ul>
          </li>
        </li>
        <li><a class="drop" href="#">WHAT WE DO </a>
          <ul>
            <li><a href="evangelism.php">Evangelism</a></li>
            <li><a href="child-outreach.php">Children Outreach</a></li>
            <li><a href="community-outreach.php">Community Outreach</a></li>
            <li><a href="agriculture.php">Agriculture</a></li>
            <li><a href="#">Education & Trainning</a></li>
            <li><a href="#">Child Health Care</a></li>
          </ul>
          <li><a class="drop" href="#">PROGRAM REGIONS</a>
            <ul>
              <li><a href="full-width.php">TMA-Central Uganda</a></li>
              <li><a href="full-width.php">TMA-Eastern Uganda</a></li>
              <li><a href="full-width.php">TMA-Western Uganda</a></li>
              <li><a href="full-width.php">TMA-Northern Uganda</a></li>
              <li><a href="full-width.php">TMA-Southern Uganda</a></li>
              <li><a href="full-width.php">rest of Africa</a></li>
             </ul>
          </li>
          <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<br><br><br><br><br>
<p align="center">
<?php
require('config.php');

extract($_POST);

$sql = "INSERT into contactus (gender,surname,lastname,email,country,field,message,created_date) VALUES('" . $gender . "','" . $surname . "','" . $lastname . "','" . $email . "','" . $country . "','" . $field . "','" . $message . "' ,'" . date('Y-m-d') . "')";

$success = $mysqli->query($sql);
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo " <b>Thank You For Contacting Us <a href=../index.php>
Click here to go back.</a> We shall get in touch with you Soon.</b>";

 exit;
?>
</p>

<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>