<!--Author:Lawrence k  -->
<!-- True Mercy Africa -->
<!-- ################################################################################################################### -->
<?php 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from volunteer where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
?>
<!-- #######################################################################################################3 -->
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
</style>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Volunteer Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Volunteer Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
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
$update="update volunteer set created_date='".$created_date."', gender='".$gender."', surname='".$surname."', lastname='".$lastname."', email='".$email."', age='".$age."', country='".$country."', department='".$department."', message='".$message."', submittedby='".$submittedby."' where id='".$id."'";
mysql_query($update) or die(mysql_error());
$status = "Volunteer Record Updated Successfully. </br></br><a href='view.php'>View Updated Volunteer Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="gender" placeholder="Enter gender" required value="<?php echo $row['gender'];?>" /></p>
<p><input type="text" name="surname" placeholder="Enter Surname" required value="<?php echo $row['surname'];?>" /></p>
<p><input type="text" name="lastname" placeholder="Enter lastname" required value="<?php echo $row['lastname'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter email" required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>
<p><input type="text" name="country" placeholder="Enter Country" required value="<?php echo $row['country'];?>" /></p>
<p><input type="text" name="department" placeholder="Enter Department" required value="<?php echo $row['department'];?>" /></p>
<p id="clr"><textarea class="#" type="text" name="message" style="margin: 0px; width: 399px; height: 80px;" placeholder="Write your reason..." required=""></textarea></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php }?> 
</div>
</div>
</body>
</html>
