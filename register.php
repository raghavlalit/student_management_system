<?php 
// include('header.php');
session_start();
if(isset($_SESSION['login_system'])){
  header("Location:http://localhost/projects_point_projects/login_system/index.php");
  die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Student Management System</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/projects_point_projects/student_management_system/">Student Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="/projects_point_projects/student_management_system/">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <?php if (!isset($_SESSION['student_management_system']['user_email'])) { ?>
          <li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="register.php">register</a>
          </li>
      <?php } else { ?>
          <li class="nav-item">
              <a class="nav-link">Welcome <?php echo $_SESSION['student_management_system']['name'];?></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php } ?>
                    
        </ul>
    </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-8 mt-5">
      <form action="backend_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputName" aria-describedby="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword2">
  </div>
  
  <button type="submit" name="type" value="register" class="btn btn-primary">Register</button>
</form>
    </div>
  </div>
</div>


<?php 
include('footer.php');
?>