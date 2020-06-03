<?php  
//echo '0';
 
 session_start();
 if(isset($_SESSION['email']))  
 {  
      echo '0';     //session not expired       
 }  
 else  
 {  
      echo '1';     //session expired  
 }
