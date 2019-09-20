<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>
<?php 
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM volunteer WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: view.php"); 
 ?>
