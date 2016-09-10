<?php include_once("../model/Model.php"); 

$model = new Model();

 if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['email'])){
	        $id= $_POST['id']; 
			$name = $_POST['name'];	
			$password= $_POST['password'];	
			$email = $_POST['email'];
			$country = $_POST['country'];
			if(empty($name)||empty($password)||empty($email)||empty($country)){
		    header("location:http://localhost/login/view/updateform.php?id=empty");
		    }
		else{
	
			$model->update($name,$password,$email,$country,$id );
			session_start();
   
         if(session_destroy()) {
         header("location:http://localhost/login/index.php?id=edit");
      }

    }
}
?>
