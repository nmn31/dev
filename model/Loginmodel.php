<?php
    $link = @mysql_connect("localhost", "root", "");
    mysql_select_db("login", $link);

    $result = @mysql_query('SELECT * FROM reg where Name ="'.$name.'" ', $link);
    $num_rows = @mysql_fetch_row($result);
	echo $dbname = $num_rows[1];
	echo $dbpass = $num_rows[2];
?>