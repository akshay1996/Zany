<?php ob_start();
include('includes/mysql_connection.php');
          session_start();
         error_reporting(E_ALL|E_STRICT);
         ini_set('display_errors',true);
          $msg = '';
          if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['login']))){
               $user=$_POST['username'];
               $pass=$_POST['password'];
               if(!empty($user) && !empty($pass)){
                $sql="SELECT pass from mysql.Registration_Zany where name ='".$user."'";
                $res=mysqli_query($con,$sql);
                if(mysqli_num_rows($res)>0){
                  $row=mysqli_fetch_assoc($res);
                  if($row["pass"]==$pass){
                   $_SESSION['login_user']=$user;
                   $msg= $_SESSION['login_user'];
                   header("Location: welcome.php");
                   exit();
                 }
              }
              else{
               $msg = 'Wrong username or password';
              }
             }
             else{
                $msg = 'Please enter all fields!';
               }
       }
       elseif(isset($_POST['registration'])){
         echo "Debug_module_Active";
         $user=$_POST['username'];
         $pass=$_POST['password'];
         if(!empty($user) && !empty($pass)){
           $sql="INSERT INTO mysql.Registration_Zany VALUES('".$user."','".$pass."')";
           $msg='Succesfully Registered!';

         }
         else{
           $msg='Please enter all fields!';
                  }
       }
ob_flush(); ?>

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
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <input type="submit" name="login" value="Login">
      <input type="submit" name="register" value="Register">
      <h4 id= "error"><?php echo $msg; ?></h4>
    </form>
  </div>
</center>
  <footer>
    <p>Copyright&copy; 2016 ZanY&trade; Networks inc. All rights Reserved.</p>
  </footer>
</body>
</html>
