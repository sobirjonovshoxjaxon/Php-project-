<?php 
    $logout = "../logout.php";
    $categories = "../categories/index.php";
    $posts = "index.php";
    require '../requires/header.php';
    require '../connect.php';

    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll();


    //Delete Code 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DELETE'])){

      $id = $_POST['post_id'];

      //Faylni id bo'yicha olish
      $statement = $pdo->prepare("SELECT image FROM posts WHERE id = ?");
      $statement->execute([$id]);
      $post = $statement->fetch();

      if($post){

        $image = $post['image'];

        if(file_exists($image)){
          unlink($image);
        }

        $statement = $pdo->prepare('DELETE FROM posts WHERE id = ?');
        $statement->execute([$id]);

        $_SESSION['post-deleted'] = "Post deleted successfully";
      }else{

        $_SESSION['post-deleted'] = 'Post not found';
      }

      header('location: index.php');
      exit;

      ob_end_flush();
    }
  
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

                    <?php if(isset($_SESSION['post-created'])): ?>
                      <div class="alert alert-success" role="alert">
                        <?= $_SESSION['post-created']; ?>
                        <?php unset($_SESSION['post-created']); ?>
                      </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['post-deleted'])): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['post-deleted']; ?>
                        <?php unset($_SESSION['post-deleted']); ?>
                      </div>
                    <?php endif; ?>

                    
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

                        <?php foreach($posts as $post): ?>
                          <tr>
                              <td><?= $post['id'] ?></td>
                              <td><?= $post['name'] ?></td>
                              <td>
                                <img style="width: 100px;" src="<?= $post['image'] ?>" alt="">
                              </td>
                              <td><?= $post['available']; ?></td>
                              <td><?= $post['warranties']; ?></td>
                              <td><?= $post['description']; ?></td>
                              <td><?= $post['price']; ?></td>
                              <td><?= $post['oldprice']; ?></td>
                              <td><?= $post['created_at']; ?></td>
                              <td>
                                <a href="show.php?id=<?= $post['id']; ?>" class="btn btn-primary">Show</a>
                              </td>
                              <td>
                                <a href="edit.php?id=<?= $post['id']; ?>" class="btn btn-warning">Edit</a>
                              </td>
                              <td>
                                <form action="" method="POST">

                                  <input type="hidden" name="DELETE">
                                  <input type="hidden" name="post_id" value="<?= $post['id']; ?>">

                                  <input type="submit" class="btn btn-danger" value="Delete">
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