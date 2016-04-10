<?php
include('includes/session.php');
include('includes/mysql_connection.php');
$msg="TEST";
$post_update="";
if(isset($_POST['action'])){
if($_POST['action']=="status"){
$msg=$_POST['status'];
$post_update="".$_SESSION['login_user']." posted an update <span class='glyphicon glyphicon-bullhorn'></span> <br><h3>".$msg."</h3>";

}
}
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
  <link rel="stylesheet" href="css/welcome_style.css" type="text/css">
</head>
<body>
  <header>
    <div id="navbar">
   <a id="userwel" href=#user><img id="#dp"><?php echo "Hello, ".$_SESSION['login_user']; ?></a>
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
 <center>
   <br>
 <div id="Main_Content">
 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
   <textarea cols="100" rows="8" name="status" id="Post-Txt" placeholder="Post Status Updates...">
   </textarea>
   <br>
   <input name="action" type="hidden" value="status" >
   <input type="submit" class="btn btn-info" value="Post Status">
 </form>
 </div>
 <br>
 <hr>
 <div class="Feeds">
 <?php echo $post_update; ?>
 </div>
 </center>
</body>
</html>
