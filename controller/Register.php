<?php 
include_once("../model/Model.php"); 
PRINT_R($_POST);
EXIT;
include_once("../model/Model.php"); 

$model = new Model();

 if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['email'])){
			$name = $_POST['name'];	
			$password= $_POST['password'];	
			$email = $_POST['email'];
			$country = $_POST['country'];
			if(empty($name)||empty($password)||empty($email)||empty($country)){
		   header("location:http://localhost/view/regform.php?id=empty");
		    }
		else{
	
			$model->insert($name,$password,$email,$country);
			header("location:http://localhost/login/index.php?id=added");
}
 }
	



?>