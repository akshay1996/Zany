<?php
include('includes/session.php');
?>
<html>
<head>
  <title><?php echo "Home"; ?></title>
  <link rel="stylesheet" href="css/welcome_style.css" type="text/css">
</head>
<body>
  <header>
    <div id="navbar">
   <a id="userwel" href=#user><?php echo "Hello, ".$_SESSION['login_user']; ?></a>
   <a id="logo" href="welcome.php">Test</a>
   <a id="logout" href="/logout.php">Logout</a>
 </div>
 </header>
 <div id="sidebar">
 </div>
 <div id="main">
 <form method="post" action="">
   <textarea cols="60" rows="10">
   </textarea>
   <input type="submit" value="Post Status"> 
 </form>
 </div>
</body>
</html>
