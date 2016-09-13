<?php
    $user = $_SESSION['user'];
    $link = @mysql_connect("sql6.freemysqlhosting.net", "sql6135475", "8zKGpAzm6J");
    mysql_select_db("sql6135475", $link);

    $result = @mysql_query('SELECT * FROM reg where Name ="'.$user.'" ', $link);
	print_r($result);
    /* $login_session = $result['Name'];
   if(!isset($_SESSION['user'])){
   header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=notlog');
      //header("location:http://localhost/login/index.php?id=notlog");
   } */