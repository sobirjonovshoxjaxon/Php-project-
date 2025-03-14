<?php 
    require '../requires/header.php';


   
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

        <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Create Post Form</h4>

                    <?php

                        require '../connect.php';
                    
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                            $name = $_POST['name'];
                            $available = $_POST['available'];
                            $warranties = $_POST['warranties'];
                            $price = $_POST['price'];
                            $oldPrice = $_POST['old_price'];
                            $description = $_POST['description'];
                            $image = $_FILES['image'];

                           // Faylni yuklash jarayoni 
                           $imagePath = 'uploads/'.basename($image['name']);
                        }
                
                    ?>

                    <a href="" style="color: white;" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                    <form action="create.php" method="POST" enctype="multipart/form-data">

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
                        <input type="text" class="form-control" name="old_price">
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