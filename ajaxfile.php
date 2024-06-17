<?php
include "init.php";
//checking if username is already present in database or not!
if(isset($_POST['username'])){
   $username = $_POST['username'];
   //using get class check method finding data...
   $result = $getFromU->checkUsername($username);
   $response = "Available.";
      if($result){
         $response = "Not Available.";
      }
   echo $response;
   die;
}
?>
