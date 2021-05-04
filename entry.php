<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["Username"]))  
 {  
    header("Location:login.php"); 
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
      </head>  
      <body>  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["Username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>  
      </body>  
 </html>  