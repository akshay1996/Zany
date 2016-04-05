<?php
global $con;
$con=mysqli_connect("localhost:8889","root","root") or die(mysql_error());
mysqli_select_db("Registration_Zany");
?>
