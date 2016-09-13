<?php
echo "sdfahosdfafsdfsafdsaadsfadfsdafs";
$servername = "sql6.freemysqlhosting.net";
$username = "sql6135475";
$password = "8zKGpAzm6J";
$link = @mysql_connect($servername, $username, $password);
mysql_select_db("sql6135475", $link);

$result = @mysql_query('SELECT * FROM reg where Name ="'.$name.'" ', $link);
$num_rows = @mysql_fetch_row($result);
echo $dbname = $num_rows[1];
echo $dbpass = $num_rows[2];
	
?>