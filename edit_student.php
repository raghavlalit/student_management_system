<?php
include('header.php');
$id = $_GET['id'];
$student_edit = "SELECT * FROM students WHERE student_id = '$id'";
$query = $conn->prepare($student_edit);
$query->execute();
$student = $query->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($student); die;
?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Student</h1>
        
        </div>

          <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 mb-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="backend_handler.php?id=<?php echo $student['student_id']; ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText">Student Name</label>
                    <input type="text" name="student_name" value="<?php echo $student['student_name']; ?>" class="form-control" id="exampleInputText" placeholder="Student Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Father's Name</label>
                    <input type="text" name="father_name" value="<?php echo $student['father_name']; ?>" class="form-control" id="exampleInputText" placeholder="Father's Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputText">Standard</label>
                    <input type="text" name="standard" value="<?php echo $student['standard']; ?>" class="form-control" id="exampleInputText" placeholder="Standard">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Address</label>
                    <input type="text" name="address" value="<?php echo $student['address']; ?>" class="form-control" id="exampleInputText" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Gender</label>
                    <input type="text" name="gender" value="<?php echo $student['gender']; ?>" class="form-control" id="exampleInputText" placeholder="Gender">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="type" value="update_student" class="btn btn-primary">Update Student</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section>
    </main>

<?php include('footer.php');?>
