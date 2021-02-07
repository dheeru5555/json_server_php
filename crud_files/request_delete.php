<?php

  $delete = $_GET['del_id'];

  $url = "http://localhost:3000/posts/$delete";

  $ch =  curl_init();

  curl_setopt($ch,CURLOPT_URL,$url);
  
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

  $response  = curl_exec($ch);

  // Close curl
  curl_close($ch);

  // See response if data is posted successfully or any error
   header('Location:create.php');   


?>