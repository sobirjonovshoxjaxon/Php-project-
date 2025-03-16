<?php 
    $logout = "../logout.php";
    $categories = "../categories/index.php";
    $posts = 'index.php';
    require '../requires/header.php';
    require '../connect.php';

    $id = $_GET['id'];
    $statement = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $statement->execute([$id]);
    $post = $statement->fetch();
?>

     <!-- Main Content -->
     <div class="main-content">
        <section class="section">

            <h3>Name: <?= $post['name']; ?></h3>
            <h3>Image: <img width="100px;" src="<?= $post['image']; ?>" alt=""></h3>
            <h3>Available: <?= $post['available']; ?></h3>
            <h3>Warranties: <?= $post['warranties']; ?></h3>
            <h3>Description: <?= $post['description']; ?></h3>
            <h3>Price: <?= $post['price']; ?></h3>
            <h3>Old Price: <?= $post['oldprice']; ?></h3>
            <h3>Created_at: <?= date('d.m.Y', strtotime($post['created_at'])) ?> year</h3>
         
            <a href="index.php" style="color: white;" class="btn btn-dark">Back</a>
        </section>
      </div>


<?php
    require '../requires/footer.php';
?>