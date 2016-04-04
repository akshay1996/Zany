<?php ob_start();
          session_start();
      //    error_reporting(E_ALL);
        //  ini_set('display_errors', 'On');
          $msg = '';
          if($_SERVER["REQUEST_METHOD"] == "POST") {
             if ($_POST['username'] == 'PSN' && $_POST['password'] == '123456') {
                $user=$_POST['username'];
                $_SESSION['login_user']=$user;
                $msg= $_SESSION['login_user'];
                header("Location: welcome.php");
                exit();
             }else {
                $msg = 'Wrong username or password';
             }
          }
          ob_flush();?>

<!DOCTYPE HTML>
<html>
<head><title>ZanY&trade; Welcome</title>
<link rel="stylesheet" href="css/style.css" type="text/css"></head>
<body>

  <header>
  <h1 id="loginhead">ZaNy<span style="font-size:20px;">&trade;</span></h1>
</header>

<center>
  <div id="loginform" >

    <fieldset>
      <legend><em>Login Form</em></legend>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method="post" id="login">

      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <input type="submit" name="login" value="Submit">
      <h4 id= "error"><?php echo $msg; ?></h4>
    </form>
    </fieldset>

  </div>
</center>
  <footer>
    <p>Copyright&copy; 2016 ZanY&trade; Networks inc. All rights Reserved.</p>
  </footer>
</body>
</html>
