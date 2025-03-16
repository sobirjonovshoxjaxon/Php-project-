<?php 
    $logout = "../logout.php";
    $categories = 'index.php';
    $posts = '../posts/index.php';
    require '../requires/header.php';
    require '../connect.php';

    $category_id = $_GET['id'];

    $statement  = $pdo->prepare('SELECT * FROM categories WHERE id = ?');
    $statement->execute([$category_id]);
    $category = $statement->fetch();


?>

    <div class="main-content">
        <section class="section">

            <h3>Category Name: <?= $category['category']; ?></h3>
            <a href="index.php" class="btn btn-dark">Back</a>
         
        </section>
    </div>


<?php 
    require '../requires/footer.php';
?>