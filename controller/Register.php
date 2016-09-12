<?php 
 $include = "https://".$_SERVER['SERVER_NAME'].'/model/Model.php';
 include_once($include); 

            $model = new Model(); 
            //PRINT_R($_POST);
			echo $name = $_POST['name'];	
			echo $password= $_POST['password'];	
			echo $email = $_POST['email'];
			echo $country = $_POST['country'];
			echo "<pre>";
			print_r($model);
			exit;
			
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