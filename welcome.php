<?php
session_start();
if(!isset($_SESSION['user']) )
{
header('Location: index.php');
}
?>

<html>
<head>
  <title><?php echo $_SESSION['user']."Home"; ?></title>
  <link rel="stylesheet" href="css/welcome_style.css" type="text/css">
</head>
<body>
  <header>
    <a href=#user><?php echo "Hello, ". $_SESSION['user']; ?></a>
  </header>

</body>
</html>
