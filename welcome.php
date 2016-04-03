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
    <ul>
  <li>  <a id="userwel" href=#user><?php echo "Hello, ".$_SESSION['login_user']; ?></a></li>
<li><a id="logo" href="welcome.php">Test</a></li>
  <li>  <a id="logout" href="/logout.php">Logout </a></li>
  </ul>
  </header>

</body>
</html>
