<?php
session_start();
if(!isset($_SESSION['username']) )
{
header('Location: index.php');
exit();
}
?>

<html>
<body>
Login Successful
</body>
</html>
