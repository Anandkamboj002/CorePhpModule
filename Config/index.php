<?php
   $conn = mysqli_connect("localhost","root","","corephp");
   if($conn){
      echo "Connection Is Successfully";
   }else{
    echo "Connection Is Not Successfull";
   }
?>