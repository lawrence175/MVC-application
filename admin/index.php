<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
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
<div class="form">
<p align="left">Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is the administration interface for managing volunteers of TMA.</p>
<p><a href="dashboard.php">DashBoard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
