<?php 

    require '../requires/header.php';
?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

        <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts Table</h4>
                    <a href="create.php" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>N/R</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Available</th>
                          <th>Warranties</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Old Price</th>
                          <th>Created_at</th>
                          <th colspan="3">Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Name</td>
                          <td>Image</td>
                          <td>Available</td>
                          <td>Warranties</td>
                          <td>Description</td>
                          <td>Price</td>
                          <td>Old price</td>
                          <td>45.56.122</td>
                          <td>
                            <a href="" class="btn btn-primary">Show</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-warning">Edit</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
         
        </section>
      </div>



<?php 
    require '../requires/footer.php';
?>