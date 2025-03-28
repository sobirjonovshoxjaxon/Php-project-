<?php 
    $title = 'Techno Shop';
    require 'includes/header.php';
    require 'adminpanel/connect.php';

    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll();

?>

    <div id="main_content">
        
        <!-- start of menu_tab -->
        <?php 
            require 'includes/menu_tab.php';
        ?>
        <!-- end of menu_tab -->

      <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>

      <!-- start of left content -->
        <?php 
            require 'includes/leftContent.php';
        ?>
      <!-- end of left content -->


      <div class="center_content">
        <div class="oferta"> <img src="assets/images/p1.png" width="165" height="113" class="oferta_img" alt="" />
          <div class="oferta_details">
            <div class="oferta_title">Power Tools BST18XN Cordless</div>
            <div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
            <a href="#" class="prod_buy">details</a> </div>
        </div>
        <div class="center_title_bar">Latest Products</div>

        <?php foreach($posts as $post): ?>
          <div class="prod_box">
            <div class="center_prod_box">
              <div class="product_title"><a href="#"><?= $post['name']; ?></a></div>
              <div class="product_img"><a href="#"><img style="width: 100px;" src="adminpanel/posts/<?= $post['image']; ?>" alt="" /></a></div>
              <div class="prod_price"><span class="reduce"><?= $post['oldprice']; ?></span> <span class="price"><?= $post['price']; ?></span></div>
            </div>
            <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="detail.php?id=<?= $post['id']; ?>" class="prod_details">Details</a> </div>
          </div>
        <?php endforeach; ?>
       
        <div class="center_title_bar">Recomended Products</div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#">Makita 156 MX-VL</a></div>
            <div class="product_img"><a href="#"><img src="assets/images/p7.jpg" alt="" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
          </div>
          <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#">Bosch XC</a></div>
            <div class="product_img"><a href="#"><img src="assets/images/p1.jpg" alt="" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
          </div>
          <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#">Lotus PP4</a></div>
            <div class="product_img"><a href="#"><img src="assets/images/p3.jpg" alt="" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
          </div>
          <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
        </div>
      </div>
     

      <!-- end of right content -->
        <?php 
            require 'includes/rightContent.php';
        ?>
      <!-- end of right content -->


    </div>
    <!-- end of main content -->

<?php 
    require 'includes/footer.php';
?>
   