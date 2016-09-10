<?php
 
if(isset($_POST['login'])||isset($_POST['name'])||isset($_POST['password']))
{
	
	        $name = $_POST['name'];	
			$password= $_POST['password'];	
	    if(!empty($name)&&!empty($password)){
			include_once("../model/Loginmodel.php");
		    if($name==$dbname&&$password==$dbpass){
				session_start();
				$_SESSION['user']= $name;
				header("location:http://localhost/login/view/home.php");
			}else{
				header("location:http://localhost/login/index.php?id=notmached" );
			}
	}else{
	header("location:http://localhost/login/index.php?id=enter" );
	}
	
}


 ?>