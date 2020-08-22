<?php 
include('header.php');
$query = $conn->prepare("SELECT * FROM students ");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($results); die;
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<?php if(isset($_SESSION['student_management_system'])){ ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
  <div class="row mt-5 mb-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table class="table table-striped table-sm">
                <thead>
                        <tr>
                            <th style="width: 3%">
                              Sr.
                            </th>
                            <th style="width: 15%">
                                Student Id
                            </th>
                            <th style="width: 15%">
                                Name
                            </th>
                            <th style="width: 15%">
                                Standard
                            </th>
                            <th style="width: 25%">
                                Address
                            </th>
                            <th style="width: 7%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%" class="text-center">
                              Action
                            </th>
                        </tr>
                    </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach ($results as $key => $student) { ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $student['student_id']; ?></td>
                    <td><?php echo $student['student_name']; ?></td>
                    <td><?php echo $student['standard']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td class="text-center">
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm" href="/projects_point_projects/student_management_system/edit_student.php?id=<?php echo $student['student_id']; ?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/projects_point_projects/student_management_system/delete_student.php?id=<?php echo $student['student_id']; ?>"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                <?php $i++; }?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
<?php }else{ ?>
<p>please login to continue</p>
<?php }?>
</main>

<?php 
include('footer.php');
?>