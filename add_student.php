<?php
if(!isset($_SESSION['student_management_system'])){
  header("Location:http://localhost/projects_point_projects/student_management_system/login.php");
  die;
}
include('header.php');

// $projects_category = "SELECT * FROM project_categories";
// $query = $conn->prepare($projects_category);
// $query->execute();
// $projects = $query->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($projects); die;
?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Student</h1>
        
        </div>

          <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 mb-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="backend_handler.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText">Student Name</label>
                    <input type="text" name="student_name" class="form-control" id="exampleInputText" placeholder="Student Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Father's Name</label>
                    <input type="text" name="father_name" class="form-control" id="exampleInputText" placeholder="Father's Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputText">Standard</label>
                    <select type="text" name="standard" class="form-control" id="exampleInputText" placeholder="Standard">
                      <option>Select</option>
                      <option>6th</option>
                      <option>7th</option>
                      <option>8th</option>
                      <option>9th</option>
                      <option>10th</option>
                      <option>11th</option>
                      <option>12th</option>
                    </select>
                    <!-- <input type="text" name="standard" class="form-control" id="exampleInputText" placeholder="Standard"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="Address" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Gender</label>
                    <select type="select" name="gender" class="form-control" id="exampleInputText" placeholder="Select Gender">
                      <option>Select</option>
                      <option>male</option>
                      <option>female</option>
                    </select>
                    <!-- <input type="text" name="gender" class="form-control" id="exampleInputText" placeholder="Gender"> -->
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="type" value="add_student" class="btn btn-primary">Add Student</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section>
    </main>

<?php include('footer.php');?>
