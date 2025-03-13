<?php 
    $categories = "index.php";
    require '../requires/header.php'; 
    require '../connect.php';
    
                    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

       
        $category = $_POST['category'];
        
       $statement = $pdo->prepare("INSERT INTO categories (category) VALUES (:category)");
       $statement->execute([

        'category' => $_POST['category']
       ]);
      
        $_SESSION['category-created'] = "Category created successfully";
        header('location: index.php');
        exit;
    }

    ob_end_flush();
?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

        <div class="col-12 col-md-6 col-lg-6">
                <div class="card">  

                  <div class="card-header">
                    <h4>Create Category Form</h4>
                    <a href="index.php" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="" method="POST">

                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="category">
                        </div>


                        <button class="btn btn-success" type="submit">Create</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                   </form>
                 
                </div>
               
                
               
               
              </div>
            
        </section>
    </div>


<?php
    require '../requires/footer.php';
?>