<?php 
$s = '"location:"';
echo $s.$_SERVER['SERVER_NAME'].'/login/view/home.php';
exit;
session_start();
include_once("view/header.php");
?>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">  <?php if (!isset($_SESSION['user'])){ include_once("view/loginform.php");  ?>   </div>
  <div class="col-sm-4">
  <a href="view/regform.php" class="btn btn-info" role="button">Sign UP</a>
   </div>  
<div>
  
  
  <?php } else { 	header("location:".<?php echo $_SERVER['SERVER_NAME']; ?>."/login/view/home.php"); } ?>


<?php include_once("view/footer.php"); ?>


