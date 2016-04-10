<?php ob_start();
include('includes/mysql_connection.php');
          session_start();
         error_reporting(E_ALL|E_STRICT);
         ini_set('display_errors',true);
          $msg = '';
          if(isset($_POST['action'])){
          if($_POST['action']=="login"){
               $user=$_POST['username'];
               $pass=$_POST['password'];
               if(!empty($user) && !empty($pass)){
                $sql="SELECT password from mysql.Registration_Zany where name ='".$user."'";
                $res=mysqli_query($con,$sql);
                if(mysqli_num_rows($res)>0){
                  $row=mysqli_fetch_assoc($res);
                  if($row["password"]==$pass){
                   $_SESSION['login_user']=$user;
                   $msg= $_SESSION['login_user'];
                   header("Location: welcome.php");
                   exit();
                 }
              }
              else{
               $msg = '<div class="alert alert-danger">
      <strong>Error!</strong> Wrong username or Password.
    </div>';
              }
             }
             else{
                $msg = '<div class="alert alert-danger">
       <strong>Error!</strong> Please enter all fields!
     </div>';
               }
       }
       elseif($_POST['action']=="register"){
         $user=$_POST['rusername'];
         $pass=$_POST['rpassword'];
         $email=$_POST['remail'];
         echo $user;
         echo $pass;
         echo $email;
         if(!empty($user) && !empty($pass)){
           $sql="INSERT INTO mysql.Registration_Zany ('name','email','password') VALUES (".$user."','".$email."','".$pass."')";
           mysqli_query($con,$sql);
           $msg='<div class="alert alert-success">
  <strong>Success</strong> Succesfully Registered!</div>';

         }
         else{
           $msg='<div class="alert alert-danger">
  <strong>Error!</strong> Please enter all fields!
</div>';
                  }
       }
     }
ob_flush(); ?>

<!DOCTYPE HTML>
<html>
<head><title>ZanY&trade; Welcome</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css"></head>
<body>

  <header>
  <h1 id="loginhead">ZaNy<span style="font-size:20px;">&trade;</span></h1>
</header>
<center>
  <div class="jumbotron">
  <h1>Welcome to Zany&trade; Networks</h1>
  <p>Please Login or Register</p>
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Login</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg1">Register</button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

  <div class="container">
  <h2>Login to ZanY</h2>
  <p>The test form</p>
  <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" name="username" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd">
       <input name="action" type="hidden" value="login" >
      <input type="submit" name="login-btn" value="Login">
   <?php echo $msg; ?>
   </div>
</form>

</div>
</div>
</div>
</div>
<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">



      <div class="container">
        <h2 style="text-align:center;">Registration form</h2>



        <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
          <div class="form-group">
            <label class="control-label col-sm-2" for="fn">First Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rusername" id="fn" placeholder="Enter First Name">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="ln">Last Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ln" placeholder="Enter Last Name">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="remail" id="email" placeholder="Enter email">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="rpassword" id="pwd" placeholder="Enter password">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="cp">Confirm Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="cp" placeholder="Confirm password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <input name="action" type="hidden" value="register" >
              <input type="submit" name="registration-btn" value="Register" class="btn btn-default">
            </div>
               <?php echo $msg; ?>
          </div>
        </form>
      </div>
</form>
</div>
</div>
</div>
</div>
</center>
  <footer>
    <p>Copyright&copy; 2016 ZanY&trade; Networks inc. All rights Reserved.&nbsp;&nbsp;&nbsp;<em>Hand-made with Love.</em></p>
  </footer>
</body>
</html>
