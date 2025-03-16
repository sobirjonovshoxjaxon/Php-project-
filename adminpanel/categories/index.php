<?php 
    $logout = "../logout.php";
    $categories = 'index.php';
    $posts = '../posts/index.php';
    require '../requires/header.php';
    require '../connect.php';

    $statement = $pdo->prepare("SELECT * FROM categories");
    $statement->execute();
    $categories = $statement->fetchAll();


    //Delete category
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DELETE'])){

      $category_id = $_POST['category_id'];

      $statement = $pdo->prepare("DELETE FROM categories WHERE id = ?");
      $statement->execute([$category_id]);

      $_SESSION['category-deleted'] = 'Category deleted successfully';
      header('location: index.php');
      exit;
    }

    ob_end_flush();
?>


    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <?php if(isset($_SESSION['category-created'])): ?>
              <div class="alert alert-success" role="alert">
                <?= $_SESSION['category-created']; ?>
                <?php unset($_SESSION['category-created']); ?>
              </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['category-deleted'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?= $_SESSION['category-deleted']; ?>
                  <?php unset($_SESSION['category-deleted']); ?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['category-updated'])): ?>
              <div class="alert alert-warning" role="alert">
                <?= $_SESSION['category-updated']; ?>
                <?php unset($_SESSION['category-updated']); ?>
              </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories Table</h4>
                    <a href="create.php" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>N\R</th>
                          <th>Category</th>
                          <th>Created At</th>
                          <th colspan="3">Action</th>
                        </tr>

                        <?php foreach($categories as $category): ?>
                          <tr>
                            <td><?= $category['id']; ?></td>
                            <td><?=  $category['category']; ?></td>
                            <td><?= $category['created_at']; ?></td>
                            <td>
                              <a href="show.php?id=<?= $category['id']; ?>" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="edit.php?id=<?= $category['id']; ?>" class="btn btn-warning">Update</a>
                            </td>
                            <td>
                              <form action="" method="POST">

                                  <input type="hidden" name="DELETE">
                                  <input type="hidden" name="category_id" value="<?= $category['id']; ?>">
                                  <input type="submit" value="Delete" class="btn btn-danger">

                              </form>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                       
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