<?php

$update = $_GET['update_id'];

$url = "http://localhost:3000/posts/$update";

$curl = curl_init();

curl_setopt($curl,CURLOPT_URL,$url);

curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($curl);

$res = json_decode($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>PHP: CRUD using JSON Web Server</h4>
</div><br> 

<div class="container">
  <h4 class="text-center  ml-4  mb-5">Update Records</h4>
   <form action="update_record.php" method="POST"> 
    <table class="table table-hover table-bordered ml-4 ">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php  
         
            ?>
            <tr>
            <td><?php echo  $res->id;?></td>
            <td><input type="text" name="title" value="<?php echo  $res->title;?>"></td>
            <td><input type="text" name="author" value="<?php echo  $res->author;?>"></td>
            <td><input type="text" name="desc" value="<?php echo  $res->desc;?>"></td>
            <input type="hidden" name="update_id" value="<?php echo  $res->id;?>">
            <td><input type="submit" name="submit" class="btn btn-primary btn-block" style="float:right;" value="Submit"></td>
            </tr>
        <?php  ?>
        </tbody>
    </table>
  </form>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>    