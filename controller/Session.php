<?php
    $user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
    

	 $conn = new mysqli("sql6.freemysqlhosting.net","sql6135475","8zKGpAzm6J", "sql6135475");
	 $sql = "SELECT * FROM reg where Name='$user' AND Password= '$pass'";
	 $result = mysqli_query($conn, $sql)
	 $row = mysqli_fetch_assoc($result);
	 print_r($row);
	 $login_session = $row['Name'];
   if(!isset($_SESSION['user'])){
   header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=notlog');
      //header("location:http://localhost/login/index.php?id=notlog");
   } 