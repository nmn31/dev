<?php
     $user = $_SESSION['user'];
     $link = @mysql_connect("localhost", "root", "");
       mysql_select_db("login", $link);

       $result = @mysql_query('SELECT * FROM reg where Name ="'.$user.'" ', $link);
       $num_rows = @mysql_fetch_row($result);
       
?>