<?php
session_start();
if(!isset($_SESSION['user']) )
{
header('Location: index.php');
}
?>

<html>
<body>
  <header>
    <a href=#user><?php echo $_SESSION['user']; ?></a>
  </header>

</body>
</html>
