<?php
include('con_pdo.php');
session_start();

$type = $_POST['type'];

switch ($type) {
  case 'login':
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE email = '" . $email. "'");
    $query->execute();
    if($row = $query->fetch(PDO::FETCH_ASSOC)){
      $password = $row['password'];
      $_SESSION['student_management_system']['user_email'] = $row['email'];
      $_SESSION['student_management_system']['name'] = $row['name'];
      header("Location:http://localhost/projects_point_projects/student_management_system/index.php");

    }else{
      $error_message = "User doesn't exist !!!";
    }

    break;

  case 'register':
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($pass!=$confirm_password){
      $message = 'Password and confirm password are not same';
      header("Location:http://localhost/projects_point_projects/student_management_system/index.php?error=".$message);
    }

    $query = $conn->prepare("SELECT id FROM users WHERE email = '" . $email. "'");
    $query->execute();
    if($row = $query->fetch(PDO::FETCH_ASSOC)){
      $message = "User already exist !!!";
      header("Location:http://localhost/projects_point_projects/student_management_system/index.php?error=".$message);

    }else{

      $insert_user = "INSERT INTO users (name, email, password) VALUES('$name','$email','$pass')";
      $stmt_insert_user = $conn->prepare($insert_user);
      if($stmt_insert_user->execute()) {
        $message = "User added successfully !!!";
        header("Location:http://localhost/projects_point_projects/student_management_system/index.php?success=".$message);
      }else{
        $message = "Couldn't add user !!!";
        header("Location:http://localhost/projects_point_projects/student_management_system/index.php?error=".$message);
      }

    }
    break;
  case 'add_student':
    // print_r($_POST); die;
    $student_name = $_POST['student_name'];
    $father_name  = $_POST['father_name'];
    $standard     = $_POST['standard'];
    $address      = $_POST['address'];
    $gender       = $_POST['gender'];

    
      $insert_student = "INSERT INTO students (student_name, father_name,standard,address, gender) VALUES('$student_name','$father_name','$standard','$address','$gender')";
      $stmt_insert_student = $conn->prepare($insert_student);
      if($stmt_insert_student->execute()) {
        $message = "Student added successfully !!!";
        header("Location:http://localhost/projects_point_projects/student_management_system/index.php?success=".$message);
      }else{
        $message = "Couldn't add Student !!!";
        header("Location:http://localhost/projects_point_projects/student_management_system/index.php?error=".$message);
      }

    break;

  default:
    // code...
    break;
}

?>
