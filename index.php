<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <div class="card">
  <div class="card-header">
   <h1> student crud application</h1>
  </div>
  <div class="card-body">
   <button class="btn btn-success"><a href="add.php" class="text-light">ADD NEW</a></button>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">mobile</th>
      <th scope="col">option</th>
    </tr>
  </thead>
  <tbody>
    <?php

           $connection = mysqli_connect("localhost","root","");
           $db = mysqli_select_db($connection,"dbcrud1");


           $sql = "select * from student";
           $run = mysqli_query($connection,$sql);

           $id= 1;

           while($row = mysqli_fetch_array($run))
           {
            $uid = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $mobile = $row['mobile'];


    ?>

        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $mobile ?></td>

            <td>
                                        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> &nbsp;
                                       <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button>
                                        </td>
        </tr>


        <?php  $id++;} ?>
   



  </tbody>
</table>
    


 

  </div>
  
</div>

            </div>

        </div>

    </div>
    
</body>
</html>
