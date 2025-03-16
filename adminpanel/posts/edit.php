<?php 
    $logout = "../logout.php";
    $categories = "../categories/index.php";
    $posts = "index.php";
    require '../requires/header.php';
    require '../connect.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $statement->execute([$id]);
    $post = $statement->fetch();


    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['PUT'])){

        $id = $_POST['post_id'];

        $name = $_POST['name'];
        $image = $_FILES['image'];
        $available = $_POST['available'];
        $warranties = $_POST['warranties'];
        $price = $_POST['price'];
        $oldprice = $_POST['oldprice'];
        $description = $_POST['description'];

        //File olamiz
        $statement = $pdo->prepare("SELECT image FROM posts WHERE id = ?");
        $statement->execute([$id]);
        $oldImage = $statement->fetch(); // fetchColoumn

        if(isset($image)){

            // Faylni yaratamiz
            $imagePath = 'uploads/'.basename(rand().$image['name']);

            if(move_uploaded_file($image['tmp_name'],$imagePath)){

                $image = $post['image'];

                if(file_exists($image)){
                    unlink($image);
                }

                //Yangilash
                $statement = $pdo->prepare("UPDATE posts SET name = :name, image = :image, available = :available, warranties = :warranties, price = :price, oldprice = :oldprice, description = :description WHERE id = :id"); 
                $statement->execute([

                    'id'=>$id,
                    'name'=>$name,
                    'image'=>$imagePath,
                    'available'=>$available,
                    'warranties'=>$warranties,
                    'price'=>$price,
                    'oldprice'=>$oldprice,
                    'description'=>$description,
                ]);

                $_SESSION['post-updated'] = 'Post updated successfully';
                header('location: index.php');
                exit;
            }
        }

        ob_end_flush();
    }
?>

 <!-- Main Content -->
    <div class="main-content">
        <section class="section">

        <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Edit Post Form</h4>

                    <a href="index.php" style="color: white;" class="btn btn-dark">Back</a>

                  </div>
                  <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="PUT">
                        <input type="hidden" name="post_id" value="<?= $post['id']; ?>">

                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $post['name']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <img width="100px" src="<?= $post['image']; ?>" alt="">
                        </div>

                        <div class="form-group">
                        <label>Available</label>
                        <input type="text" class="form-control" name="available" value="<?= $post['available']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Warranties</label>
                        <input type="text" class="form-control" name="warranties" value="<?= $post['warranties']; ?>">
                        </div>
                        
                        <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="<?= $post['price']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Old Price</label>
                        <input type="text" class="form-control" name="oldprice" value="<?= $post['oldprice']; ?>">
                        </div>
                    
                        <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"><?= $post['description']; ?></textarea>
                        </div>
                    
                        
                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    
                    </form>
                   
                  </div>
        </div>
         
        </section>
    </div>

<?php
    require '../requires/footer.php';
?>