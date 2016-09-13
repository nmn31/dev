<?php
include_once("../model/model.php"); 
$model = new Model(); 
$model->login('narender','kumar');
exit;
 
/* if(isset($_POST['login'])||isset($_POST['name'])||isset($_POST['password']))
{
	
	    $name = $_POST['name'];	
		$password= $_POST['password'];	
	     if(!empty($name)&&!empty($password)){
		 print_r($_POST);
	     include_once("../model/Loginmodel.php");
			 /*
		    if($name==$dbname&&$password==$dbpass){
				session_start();
				$_SESSION['user']= $name;
				header("Location:https://".$_SERVER['SERVER_NAME'].'/view/home.php');
				//header("location:http://localhost/login/view/home.php");
			}else{
			    header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=notmached');
				//header("location:http://localhost/login/index.php?id=notmached" );
			} */
	}else{
	header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=enter');
	//header("location:http://localhost/login/index.php?id=enter" );
	} 
	
} */


 ?>