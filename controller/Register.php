<?php 
 $include = "https://".$_SERVER['SERVER_NAME'].'/model/Model.php';
 include_once($include); 

$model = new Model(); */
            //PRINT_R($_POST);
			$name = $_POST['name'];	
			$password= $_POST['password'];	
			$email = $_POST['email'];
			$country = $_POST['country'];
			if(empty($name)||empty($password)||empty($email)||empty($country)){
					header("Location:https://".$_SERVER['SERVER_NAME'].'/view/regform.php?id=empty');
					//header("location:http://localhost/view/regform.php?id=empty");
		    }
		else{
	          
			$model->insert($name,$password,$email,$country);
			header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=added');
			//header("location:http://localhost/login/index.php?id=added");
   }

	



?>