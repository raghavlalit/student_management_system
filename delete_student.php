<?php 
include('con_pdo.php');

$id = $_GET['id'];

$delete_student = "DELETE FROM students WHERE student_id='$id'";
$query = $conn->prepare($delete_student);
if($query->execute()) {
	$message = "Student Deleted !!!";
    header("Location:http://localhost/projects_point_projects/student_management_system/index.php?success=".$message);
}else{
    $message = "Couldn't delete Student !!!";
    header("Location:http://localhost/projects_point_projects/student_management_system/index.php?error=".$message);
}
?>