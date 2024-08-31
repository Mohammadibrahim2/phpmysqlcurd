
<?php 
include "db_conn.php";

if(isset($_POST['submit']))
{
    $NAME=$_POST['name'];
    $EMAIL=$_POST['email'];


    $sql="INSERT INTO `userinfo`(`ID`, `NAME`, `EMAIL`)
     VALUES (Null,'$NAME',' $EMAIL')";

     $result=mysqli_query($conn,$sql);

if($result){
    header("location:index.php?msg=an user is created successfully");

}
else{
    echo "failed: ".mysqli_error($conn);
}


}




?>







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
<div class="container">
   <div class="text-center">
   <h3>
Add new user
    </h3>
    <p>complete the new user by fill up the from</p>
   </div>
<div class="container">
    <form action="" method="post" class="w-100 min-width-300px">

    <div class="mb-3 row">
    <label for="staticName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="staticName" placeholder="User name">
    </div>
    <div class="mb-3 row mt-3">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10 ">
      <input type="email" name="email"  class="form-control" id="staticEmail" placeholder="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword"  class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div  class="text-center">
  <button type="submit" class="btn btn-success " name="submit" >Send</button>
  <a href="index.php"  class="btn btn-danger ">cencel</a>
 
</div>

    </form>

</div>

</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>