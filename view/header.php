
<?php

 ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>login program made by Narender</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
   function noenter() {
  return !(window.event && window.event.keyCode == 13); }
</script>
</head>
<body>
<div class="container-fluid">
			<nav class = "navbar navbar-default" role = "navigation">
					   <div class="row">
						<div class="col-sm-4">   <div class = "navbar-header">
						 <a class = "navbar-brand" href = "#"><?php if(isset($_SESSION['user'])){  echo "WELCOME".' </BR>  '.$_SESSION['user']; } else { echo "LOGIN SYSTEM";}?></a>
						</div></div>
								  <div class="col-sm-7"> </div>
								  <div class="col-sm-1"><?php if(isset($_SESSION['user'])){?> <a href = "http://localhost/login/controller/sessiondestroy.php">Logout </a> <?php } ?></div>  
						</div>
					 
						 
			 
			 
			   
			</nav>