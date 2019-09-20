<!--  True Mercy Africa -->
<!-- ######################################################################################################### -->
<?php 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>True Mercy Africa</title>
<link rel="stylesheet" href="../layout/styles/_style.css" />
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="../favicon_tma.png" type="image/png" sizes="32x32">

<style>
  #chk{

height: 300px;
width: 800px;
overflow: scroll;
overflow-y: scroll;
  }

  #clr{
    
    color: darkgreen;
    height: 300px;
    width: 800px;
    overflow: scroll;
     overflow-y: scroll;

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
<body align="center">

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
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Volunteer Record</a> | <a href="view_contacts.php">View Contacts Records</a> |<a href="logout.php">Logout</a></p>
<h2>View Volunteer Records</h2>
<div id="#">
<table width="100%" border="1" style="#" id="clr" align="center">
<thead align="center">
<tr><th><strong>ID.No</strong></th><th><strong>Gender</strong></th><th><strong>Surname</strong></th><th><strong>Lastname</strong></th><th><strong>Email</strong></th><th><strong>Age</strong></th><th><strong>Country</strong></th><th><strong>Section</strong></th><th><strong>Message</strong></th><th><strong>Date</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from volunteer ORDER BY id desc;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr align="center"><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["gender"]; ?></td><td align="center"><?php echo $row["surname"]; ?></td><td align="center"><?php echo $row["lastname"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><?php echo $row["country"]; ?></td><td align="center"><?php echo $row["department"]; ?></td><td align="center"><?php echo $row["message"]; ?></td><td align="center"><?php echo $row["created_date"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script> 
<script src="../layout/scripts/tabslet/jquery.tabslet.min.js"></script>
<!-- //JAVASCRIPTS -->
</body>
</html>
