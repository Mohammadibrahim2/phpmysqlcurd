

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP MYSQL CURD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
  <nav class="navbar navbar-light justify-content-center" style="background-color:aquamarine;">
 
    <h1 class="">Php mysql curd </h1>
 
</nav>

 
  
<div class="">
    <a href="add_new.php" class="btn btn-dark text-start mt-4 ml-3">Add  new user</a>

</div>
<div class="table">
<table class="table">
  <thead>
    <tr scope="row" >
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  include "db_conn.php";
  $sql="SELECT * FROM `userinfo`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <th ><?php echo $row['NAME']?></th>
        <th ><?php echo $row['EMAIL']?></th>
        <th >delete</th>

    </tr>
    <?php

  }

  ?>
   
  </tbody>
</table>

</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>