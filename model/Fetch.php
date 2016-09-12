<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6135475";
$password = "8zKGpAzm6J";
    
	$user = $_SESSION['user'];
    $link = @mysql_connect($servername, $username, $password);
    mysql_select_db("sql6135475", $link);
	$result = @mysql_query('SELECT * FROM reg where Name ="'.$user.'" ', $link);
    $num_rows = @mysql_fetch_row($result);
       
?>