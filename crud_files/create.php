
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
 <div class="row">

    <div class="col-sm-4">
    <h4 class="text-center  ml-4 mb-5">Insert Records</h4>
     <form  action="request_create.php " method="POST">
        <div class="form-group">
     
        <input type="text" class="form-control  mb-4" name="title" placeholder="Enter title" required="">
        </div>
        <div class="form-group">
      
        <input type="text" class="form-control  mb-4" name="author" placeholder="Enter author" required="">
        </div>
        <div class="form-group">
     
        <input type="text" class="form-control mb-4" name="desc" placeholder="Enter desc" required="">
        </div>

        <input type="submit" name="submit" class="btn btn-success btn-block" style="float:right;" value="Submit">
    </form>
    </div>

  <div class="col-sm-8">
     <?php include('show.php'); ?>
  </div>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>