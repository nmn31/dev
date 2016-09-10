<?php
   
    $user = $_SESSION['user'];
    $link = @mysql_connect("localhost", "root", "");
    mysql_select_db("login", $link);

    $result = @mysql_query('SELECT * FROM reg where Name ="'.$user.'" ', $link);
   
    $login_session = $result['Name'];
   if(!isset($_SESSION['user'])){
      header("location:http://localhost/login/index.php?id=notlog");
   }