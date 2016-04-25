<?php
include('includes/session.php');
include('includes/mysql_connection.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo "Home - ".$_SESSION['login_user']; ?></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../js/active.js"></script>
  <link rel="stylesheet" href="css/welcome_style.css" type="text/css">
</head>
<body>
  <header>
    <div id="navbar">
   <a id="userwel" href=#user><img id="#dp"><?php echo "Hello, ".$_SESSION['login_user']; ?></a>
      <a id="logo" href="welcome.php"><img alt="Brand" id="logobrand" src="/images/logo.png"></img></a>
<<<<<<< HEAD
=======
      <!--<form class="navbar-form navbar-left" role="search" id="Search_Bar">
  <input type="text" class="form-control" placeholder="Search">
<button type="submit" class="btn btn-small">Submit</button>
</form>-->
>>>>>>> master
   <a id="logout" href="/logout.php">Logout</a>

  <a id="msg" href="#"> <button class="btn btn-warning" type="button">
Notifications <span class="badge">14</span>
</button></a>
<a id="msg" href="#"> <button class="btn btn-primary" type="button">
Messages <span class="badge">4</span>
</button></a>
<a id="msg" href="#"> <button class="btn btn-warning" type="button">
Friends<span class="glyphicon glyphicon-user">24</span>
</button></a>
 </div>
 </header>

 <div id="Profile_Head">
   <button>Upload Pic</button>
   This area is for Uploading profile pic and time line.
 </div>
 <div id="sidebar">
   <ul>
     <li>
      <a href="../welcome.php"> <span class="glyphicon glyphicon-home"> Home</span></a>
     </li>
     <li>
    <a href="../friends.php"><span class="glyphicon glyphicon-user"> Friends</span></a>
     </li>
     <li>
      <a href="#"> <span class="glyphicon glyphicon-envelope"> Messages</span></a>
     </li>
     <li>
      <a href="../search.php"> <span class="glyphicon glyphicon-home"> Find Friends</span></a>
     </li>
     <li>
      <a href="#"><span class="glyphicon glyphicon-credit-card"> ResetPassword</span></a>
     </li>
   </ul>

 </div>

</body>
</html>
