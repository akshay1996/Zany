<!-- ZANY Official Social Networking Website Source Code
Created on: 15 March 2016
---------------------Developers----------------------
 Sooraj Soman
 P.S.Narayanan
 Harikrishnan V
-->
<?php ob_start();

          $msg = '';

          if (isset($_POST['login']) && !empty($_POST['username'])
             && !empty($_POST['password'])) {

             if ($_POST['username'] == 'PSN' &&
                $_POST['password'] == '123456') {
                  $_SESSION['user']=$_POST['username'];
                header("location: welcome.php");
             }else {
                $msg = 'Wrong username or password';
             }
          }
          ob_end_flush();
       ?>
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
    <p>Copyright&copy; 2016 ZanY&trade; Networks</p>
  </footer>
</body>
</html>
