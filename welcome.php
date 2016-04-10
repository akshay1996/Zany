<?php
include('includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo "Home"; ?></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/welcome_style.css" type="text/css">
</head>
<body>
  <header>
    <div id="navbar">
   <a id="userwel" href=#user><?php echo "Hello, ".$_SESSION['login_user']; ?></a>
      <a id="logo" href="welcome.php">
        <img alt="Brand" src="/images/logo.png"></img></a>

        <form class="navbar-form navbar-left" role="search" id="Search_Bar">
  <div class="form-group" >
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-small">Submit</button>
</form>
   <a id="logout" href="/logout.php">Logout</a>
  <a id="msg" href="#"> <button class="btn btn-warning" type="button">
Notifications <span class="badge">14</span>
</button></a>
<a id="msg" href="#"> <button class="btn btn-primary" type="button">
Messages <span class="badge">4</span>
</button></a>
 </div>
 </header>

 <div id="Profile_Head">
   This area is for Uploading profile pic and time line.
 </div>
 <div id="sidebar">
 </div>
 <div id="Main_Content">
 <form method="post" action="">
   <textarea cols="80" rows="5" id="Post-Txt" placeholder="Post Status Updates..." autofocus="true">
   </textarea>
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="submit" class="btn btn-info" value="Post Status">
 </form>
 </div>
</body>
</html>
