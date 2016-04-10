<?php ob_start();
include('includes/mysql_connection.php');
          session_start();
         error_reporting(E_ALL|E_STRICT);
         ini_set('display_errors',true);
          $msg = '';
          if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(isset($_POST['login'])){
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
       elseif(isset($_POST['registration'])){
         echo "Debug_module_Active";
         $user=$_POST['username'];
         $pass=$_POST['password'];
         if(!empty($user) && !empty($pass)){
           $sql="INSERT INTO mysql.Registration_Zany ('ID','name','pass') VALUES ('10','".$user."','".$pass."')";
           $msg='Succesfully Registered!';

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
      <input type="submit" name="login" value="Login">
   <?php echo $msg; ?>
</form>
    </div>
  </form>
</div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="Regform" >
        TEST
      </div>
    </div>
  </div>
</div>
</p>
</div>
</center>

<!--  -->
<center>
<a class="btn btn-success  btn-lg" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Test 1
</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-success  btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Test 2
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    <div class="row">
    <div class="col-xs-6 col-md-3">
      <a href="#" class="thumbnail">
        <img src="..." alt="...">
      </a>
    </div>
    ...
  </div>
  </div>
</div>
</center>
  <footer>
    <p>Copyright&copy; 2016 ZanY&trade; Networks inc. All rights Reserved.&nbsp;&nbsp;&nbsp;<em>Hand-made with Love.</em></p>
  </footer>
</body>
</html>
