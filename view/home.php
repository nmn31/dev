<?php

    session_start();
    include_once("../controller/Session.php"); 
	include_once("../controller/Fetchcontroller.php"); 

	include_once("../model/Fetch.php");
    include_once("../view/header.php");
	

?>


  <div class="col-sm-2"> 
 <?php if(@$_GET['id'] =='uploaded'){?>

		<div class="alert alert-danger">
		  <strong>Danger!</strong>   FILL ALL THE FIELDS.
		</div>
			
<?php } ?>
  
  
	 <form action="<?php echo $_SERVER['SERVER_NAME']; ?>/login/controller/Image.php" method="post" enctype="multipart/form-data">
     Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="pic">
	<input name="id" type="hidden" id="id" value="<?php echo $num_rows[0]; ?>"/>
   </form>

   </div>
  <div class="col-sm-4"><div>
 <table class="table">
    <thead>
      <tr>
	    <th></th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Country</th>
		<th>PIC</th>

      </tr>
    </thead>
   <tbody>
	   <tr class="success">
	   <td></td>
        <td><?php echo $num_rows[1]; ?></td>
        <td><?php echo $num_rows[2]; ?></td>
        <td><?php echo $num_rows[3]; ?></td>
		<td><?php echo $num_rows[4]; ?></td>
		<td><img src = "<?php echo $num_rows[5]; ?>"</td>
		</td>
		<td><a href="updateform.php" class="btn btn-info" role="button">Edit</a></td>
      </tr>
 
  </table>
</div>  </div>
  <div class="col-sm-2"></div>  
