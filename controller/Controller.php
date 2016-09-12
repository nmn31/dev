<?php 

echo "hi";
exit;
include_once("../model/Model.php");  


if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['email'])){
	$name = $_POST['name'];	
	$password= $_POST['password'];	
	$email = $_POST['email'];
	$this->model->insert($name,$password,$email);
}
	  
	 
	
      
    

	 
?>