<?php


      $data = array(
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'desc' => $_POST['desc']
      );
        
    // Data should be passed as json format
    $data_json = json_encode($data);

    // print_r($data_json);
    // exit;

    // API URL to update data with employee id
    $url = 'http://localhost:3000/posts/';

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));

    // SET Method as a POST
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');

    // Pass user data in POST command
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl and assign returned data
    $response  = curl_exec($ch);

    // Close curl
    curl_close($ch);

    // See response if data is posted successfully or any error
     header('Location:create.php');    
 
    




?>