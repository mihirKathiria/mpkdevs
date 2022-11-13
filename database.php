<?php
   $db = new mysqli("localhost","root","","star-gas");
   if($db->connect_error){
       die("Database Not found");
   }
?>