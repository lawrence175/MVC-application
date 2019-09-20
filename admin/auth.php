<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
