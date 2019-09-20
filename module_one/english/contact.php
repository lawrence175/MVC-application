<!DOCTYPE html>
<!--
Author: lawrence k
//True Mercy Africa
-->
<html>
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

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(25, 42, 190);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #152a88;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
        <li><a href="../index.php">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
          <li><a href="../index.php">English</a></li>
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
        <li><a class="drop" href="#">WHAT WE DO</a>
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
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <h1>Contact Us</h1><br>
      <b>TRUE MERCY AFRICA HEADQUATERS</b><br>
      Lugazi Municipality,Central - Uganda.East Africa<br><br>
      <label>Telephone:</label>
      <label>Fax:</label>
      <br>
      <!-- contact description to be added here!! -->
      <b>If you have a specific enquiry concerning the following aspects, please fill the form below :</b>
     <ol>
       <li>Donation:</li>
       <li>Volunteering:</li>
       <li>Partnership:</li>
     </ol>      
      </div>
<!-- </div> -->
<div class="container">
  <div class="container">
    <form action="pro.php" method="POST">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option></option>
          <option value="male">MALE</option>
          <option value="female">FEMALE</option>
        </select>
        <div class="form-group">
            <label>SurName:</label>
            <input type="text" name="surname" class="form-control" placeholder="Your First name...." required>
        </div>
        <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Your email address..." required>
        </div>
        <label for="country">Country</label>
        <select id="country" name="country" required>
            <option value="#"></option>
            <option value="korea">Korea</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="germany">Germany</option>
          <option value="united-kingdom">United Kingdom</option>
        </select>
        <label for="field">Choose your Area of Interest</label>
        <select id="field" name="field" required>
            <option value="#"></option>
            <option value="evangelism">EVANGELISM</option>
          <option value="teaching">TEACHING CHILDREN</option>
          <option value="agriculture">AGRICULTURE</option>
          <option value="health">HEALTH CARE</option>
          <option value="#">Other</option>

        </select>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" type="text" name="message"  style="height:200px" placeholder="Write here your message..." required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</div>

</body>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="../images/demo/worldmap.png" alt="">
        <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
          True Mercy Africa Central Uganda<br>
          Namengo<br>
          Lugazi Municipality,Buikwe District<br>
          P.O BOX 50,Lugazi<br>
          <br>
          <i class="fa fa-phone pright-10"></i>+256772301936<br>
          <i class="fa fa-phone pright-10"></i>+256704856381<br>
          <i class="fa fa-envelope-o pright-10"></i> <a href="#">truemercyafrica@gmail.com</a>
          </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear"><br><br>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="../index.php">True Mercy Africa</a></p>
        <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- /JAVASCRIPTS -->
</body>
</html>