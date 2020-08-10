<?php 
include('header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>
          <h2>Student Details</h2>
          <div class="table-responsive">
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
                <tr>
                  <td>1</td>
                  <td>1001</td>
                  <td>Lalit</td>
                  <td>10th</td>
                  <td>Sohna</td>
                  <td class="text-center">
                      <span class="badge badge-success">Success</span>
                  </td>
                  <td class="text-center">
                      <a class="btn btn-info btn-sm" href="3"><i class="fas fa-pencil-alt"></i>Edit</a>
                      <a class="btn btn-danger btn-sm" href="3"><i class="fas fa-trash"></i>Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
    </div>

<?php 
include('footer.php');
?>