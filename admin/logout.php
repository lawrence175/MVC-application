<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>