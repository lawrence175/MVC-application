<?php
/*
Author: lawrence k.
True Mercy Africa
*/
?>

<?php
$connection = @mysql_connect('localhost', 'root', 'cyber');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('truemercyafrica');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>