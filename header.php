<?php
session_start();
include('con_pdo.php');

$email = isset($_SESSION['student_management_system']['user_email']) ? $_SESSION['student_management_system']['user_email'] : '';
$username = isset($_SESSION['student_management_system']['name']) ? $_SESSION['student_management_system']['name'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
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
<div class="container-fluid">
    <div class="row">
    	<?php if(isset($_SESSION['student_management_system'])){ ?>
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/projects_point_projects/student_management_system/index.php">
                  <i class="fas fa-tachometer-alt"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/projects_point_projects/student_management_system/add_student.php">
                  <i class="fas fa-plus"></i>
                  Add New Student
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/projects_point_projects/student_management_system/logout.php">
                  <i class="fas fa-power-off"></i>
                  Logout
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
    <?php }?>
        
