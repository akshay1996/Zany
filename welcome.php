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
   <a id="userwel" href=#user><?php echo "Hello, ".$_SESSION['login_user']; ?></a>
   <a id="logo" href="welcome.php">Test</a>
   <a id="logout" href="/logout.php">Logout</a>
 </header>
</body>
</html>
