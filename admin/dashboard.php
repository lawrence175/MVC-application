<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>True Mercy Africa</title>
<link rel="stylesheet" href="../layout/styles/_style.css" />
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="../favicon_tma.png" type="image/png" sizes="32x32">

</head>
<body>
<br/>
<div class="form">
<p align="center">TMA Volunteer Management Dashboard.</p>
<br/><br/>
<p><table>
          <thead>
            <tr>
              <th align="center"><a href="index.php">Home</a></th>
              <th align="center"><a href="insert.php">Insert New Volunteer Records</a></th>
              <th align="center"><a href="view.php">View Volunteer Records</a></th>
              <th align="center"><a href="view_contacts.php">View Contact Records</a></th>
              <th align="center"><a href="logout.php">Logout</a></th>
            </tr>
          </thead>
</table></p>
</div>
</body>
</html>
