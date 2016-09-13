 <?php session_start();
   
   if(session_destroy()) {
     header("Location:https://".$_SERVER['SERVER_NAME'].'/index.php?id=logout');
     //header("location:http://localhost/login/index.php?id=logout");
   }

   ?>