<?php
if(@$_GET['id'] =='enter'){?>

		<div class="alert alert-danger">
		  <strong>Danger!</strong>   FILL ALL THE FIELDS.
		</div>
			
<?php }


elseif(@$_GET['id'] =='notmached'){ ?>
	
		<div class="alert alert-danger">
		  <strong>Danger!</strong> Password not Matched.
		</div>
		<?php }
elseif(@$_GET['id'] =='notlog'){ ?>
		<div class="alert alert-danger">
		  <strong>Danger!</strong> PLEASE Login TO Acess the page.
		</div>
	   <?php
		}	
elseif(@$_GET['id'] =='logout'){ ?>
		<div class="alert alert-success">
		  <strong>Danger!</strong> Successfully logged out.
		</div>
		<?php 
		}
elseif(@$_GET['id'] =='added'){ ?>
		<div class="alert alert-success">
		  <strong>Danger!</strong> Successfully added.
		</div>
<?php	}
elseif(@$_GET['id'] =='edit'){ ?>
		<div class="alert alert-success">
		  <strong>Danger!</strong> Successfully added. PLEASE Login again with your changed username & password 
		</div>
<?php	}
 ?>
  
 <form role="form" method="post" action="<?php echo $_SERVER['SERVER_NAME']; ?>/controller/Login.php" class="form-inline">
	  <div class="form-group">
			<label for="email">User Name</label>
			<input type="text" class="form-control" id="email" name="name" onkeypress="return noenter()">
	  </div>
	  <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="password" onkeypress="return noenter()">
	  </div>

	  <input type="submit" name="login" value="log" class="btn btn-default"> 
</form>
