<?php 

  $curl = curl_init();

  curl_setopt($curl,CURLOPT_URL,'http://localhost:3000/posts/');
  curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
  $content = curl_exec($curl);

  $result = json_decode($content);
?>

<h4 class="text-center  ml-4  mb-5">View Records</h4>
    <table class="table table-hover table-bordered ml-4 ">
        <thead>
        <tr>
            
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php  
            foreach($result as $res)
             {
            ?>
            <tr>
            <td><?php echo  $res->title; ?></td>
            <td><?php echo  $res->author; ?></td>
            <td><?php echo  $res->desc; ?></td>
            <td><a href="request_delete.php?del_id=<?php echo $res->id; ?>">
                   <i class="fa fa-trash"></i>
                </a>
                <a href="request_update.php?update_id=<?php echo $res->id; ?>">
                   <i class="fa fa-edit">
            </tr>
        <?php } ?>
        </tbody>
    </table>