<!-- Author:lawrence k. -->
<!-- True Mercy Africa -->
<!-- ############################################################################################################## -->
<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$created_date = date("Y-m-d H:i:s");
$gender =$_REQUEST['gender'];
$surname = $_REQUEST['surname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$country = $_REQUEST['country'];
$department = $_REQUEST['department'];
$message = $_REQUEST['message'];
$submittedby = $_SESSION["username"];
$ins_query="insert into volunteer(`created_date`,`gender`,`surname`,`lastname`,`email`,`age`,`country`,`department`,`message`,`submittedby`)
values('$created_date','$gender','$surname','$lastname','$email','$age','$country','$department','$message','$submittedby')";
mysql_query($ins_query) or die(mysql_error());
$status = "New Volunteer Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Volunteer Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>True Mercy Africa</title>
<link rel="stylesheet" href="../layout/styles/_style.css" />
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="../favicon_tma.png" type="image/png" sizes="32x32">


<style>

#clr{
    
    color: black ;

  }

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
<body>
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
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Volunteer Records</a> | <a href="logout.php">Logout</a></p>
<div id="#">
<h1>Insert New Volunteer Record</h1>
<p style="color:#FF0000;"><?php echo $status; ?></p>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<label for="#">Select Gender</label>
<p><select type="text" id="#" name="gender" required>
                  <option></option>
                  <option value="male">MALE</option>
                  <option value="female">FEMALE</option>
                </select>
</p>
<p><input type="text" name="surname" placeholder="Enter Surname" required /></p>
<p><input type="text" name="lastname" placeholder="Enter lastname" required /></p>
<p><input type="email" name="email" placeholder="Email" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input type="text" name="country" placeholder="Enter Country" required /></p>
<p><input type="text" name="department" placeholder="Department" required /></p>
<p id="clr"><textarea class="#" type="text" name="message" style="margin: 0px; width: 399px; height: 80px;"placeholder="Write here your message..." required=""></textarea></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
</div>
</div>
</body>
</html>
