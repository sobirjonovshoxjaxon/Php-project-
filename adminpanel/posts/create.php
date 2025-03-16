<?php 
    $logout = "../logout.php";
    $categories = "../categories/index.php";
    $posts = 'index.php';
    require '../requires/header.php';
    require '../connect.php';
                    
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $name = $_POST['name'];
      $image = $_FILES['image'];
      $available = $_POST['available'];
      $warranties = $_POST['warranties'];
      $price = $_POST['price'];
      $oldprice = $_POST['oldprice'];
      $description = $_POST['description'];
    
    

      // Faylni yuklash jarayoni 
      $imagePath = 'uploads/'.basename(rand().$image['name']);

      if(move_uploaded_file($image['tmp_name'],$imagePath)){
        
      
        $statement = $pdo->prepare("INSERT INTO posts (name,image,available,warranties,price,oldprice,description) VALUES (:name,:image,:available,:warranties,:price,:oldprice,:description)");

        $statement->execute([

            'name'=> $_POST['name'],
            'image'=> $imagePath,
            'available'=> $_POST['available'],
            'warranties'=> $_POST['warranties'],
            'price'=> $_POST['price'],
            'oldprice'=> $_POST['oldprice'],
            'description'=> $_POST['description']

        ]);

        $_SESSION['post-created'] = 'Post created successfully';
        header('location: index.php');
        exit;

      }else{

        echo "Rasm yuklanmadi";
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
                    <h4>Create Post Form</h4>

                    <a href="" style="color: white;" class="btn btn-dark">Back</a>

                  </div>
                  <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                        <label>Available</label>
                        <input type="text" class="form-control" name="available">
                        </div>

                        <div class="form-group">
                        <label>Warranties</label>
                        <input type="text" class="form-control" name="warranties">
                        </div>
                        
                        <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price">
                        </div>

                        <div class="form-group">
                        <label>Old Price</label>
                        <input type="text" class="form-control" name="oldprice">
                        </div>
                    
                        <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
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