<!-- ZANY Official Social Networking Website Source Code
Created on: 15 March 2016
---------------------Developers----------------------
 Sooraj Soman
 P.S.Narayanan
 Harikrishnan V
-->
<html>
<head><title>ZanY&trade;-Welcome</title>
<link rel="stylesheet" href="css/style.css" type="text/css"></head>
<body>
  <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'PSN' &&
                  $_POST['password'] == '123456') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'PSN';

                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
  <header>
  <h1 id="loginhead">ZaNy<span style="font-size:20px;">&trade;</span></h1>
</header>
  <div id="loginform" >

    <fieldset>
      <legend><em>Login Form</em></legend>
      <h4 class = "error-message"><?php echo $msg; ?></h4>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method="post" id="login">

      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <input type="submit" name="login" value="Submit">
    </form>
    </fieldset>
  </div>
  <footer>
    <p>Copyright&copy; 2016 ZanY&trade; Networks</p>
  </footer>
</body>
</html>
