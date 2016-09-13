<?php
     $conn = new mysqli("sql6.freemysqlhosting.net","sql6135475","8zKGpAzm6J", "sql6135475");
	 $sql = "SELECT * FROM reg where Name='$user' AND Password= '$pass'";
	 $result = mysqli_query($conn, $sql)
	 
       
?>