 <?php session_start();
   
   if(session_destroy()) {
     header("location:http://localhost/login/index.php?id=logout");
   }

   ?>