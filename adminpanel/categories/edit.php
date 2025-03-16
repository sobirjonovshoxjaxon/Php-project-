<?php 
    $logout = "../logout.php";
    $categories = 'index.php';
    $posts = "../posts/index.php";
    require '../requires/header.php';
    require '../connect.php';

    $category_id = $_GET['id'];

    $statement = $pdo->prepare('SELECT * FROM categories WHERE id = ?');
    $statement->execute([$category_id]);
    $category = $statement->fetch();

    //edit category 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['PUT'])){

        $id = $_POST['category_id'];

        $statement = $pdo->prepare("UPDATE categories SET category = :category WHERE id = :id ");
        $statement->execute([

            'id' => $id,
            'category' => $_POST['category'],
        ]);

        $_SESSION['category-updated'] = 'Category updated successfully';
        header('location: index.php');
        exit;
    }

    ob_end_flush();
?>


    <div class="main-content">
        <section class="section">

        <div class="col-12 col-md-6 col-lg-6">
                <div class="card">  
                  <div class="card-header">
                    <h4>Category Edit Form</h4>
                    <a href="index.php" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                    
                    <form action="" method="POST">

                        <input type="hidden" name="PUT">
                        <input type="hidden" name="category_id" value="<?= $category['id']; ?>">

                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" class="form-control" name="category" value="<?= $category['category']; ?>">
                        </div>

                        <button type="submit" class="btn btn-warning">Edit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                    
                  </div>
                 
                </div>
                
               
               
                
              </div>
         
        </section>
      </div>


<?php 
    require '../requires/footer.php';
?>