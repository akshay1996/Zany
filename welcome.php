<?php
include('includes/template.php');
$msg="";
$post_update="";
if(isset($_POST['action'])){
if($_POST['action']=="status"){
$msg=$_POST['status'];
$post_update="<span class='whoposted'>".$_SESSION['login_user']." posted an update <span class='glyphicon glyphicon-bullhorn'></span> </span><br><h3>".$msg."</h3>";

}
}
?>
<!DOCTYPE html>
<html>
<body>
<main>
<center>
  <br>
<div id="Main_Content">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <textarea cols="100" rows="8" name="status" id="Post-Txt" placeholder="Post Status Updates...">
  </textarea>
  <br>
  <input name="action" type="hidden" value="status" >
  <input type="submit" class="btn btn-info" value="Post Status">
</form>
</div>
<br>
<hr>
<div class="Feeds">
<?php echo $post_update; ?>
</div>
</center></main>
</body>
</html>
