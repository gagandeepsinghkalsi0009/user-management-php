<?php
include('connection.php');
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "insert into `user` (name,email,mobile,password)
  values('$name','$email','$mobile','$password')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header('location:display.php');
  }
  else{
    echo "Data not Inserted";
  }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <div class="container my-5 " >
       <h2>Add User Details</h2>
      <form method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="mobile" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="password">
    <br><br>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
  
</html>