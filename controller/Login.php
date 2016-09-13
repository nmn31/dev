<?php
include_once("../model/model.php"); 
$model = new Model(); 
$model->login('c','kumar'); 
if(isset($_POST['login'])||isset($_POST['name'])||isset($_POST['password']))
{
	
	    $name = $_POST['name'];	
		$password= $_POST['password'];
		 echo "<pre>";
	     if(!empty($name)&&!empty($password)){
		// print_r($_POST);
		  if($model->login($name,$password)==true){
				session_start();
				$_SESSION['user']= $name;
				$_SESSION['pass']= $password;
				header("Location:https://".$_SERVER['SERVER_NAME'].'/view/home.php');
			
			}else{
			    header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=notmached');
			
			}
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
	
}


 ?>