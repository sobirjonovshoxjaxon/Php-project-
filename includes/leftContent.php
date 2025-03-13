<?php 

  require 'adminpanel/connect.php';

  $statement = $pdo->prepare('SELECT * FROM categories');
  $statement->execute();
  $categories = $statement->fetchAll();

?>
    
    
    <div class="left_content">
        <div class="title_box">Categories</div>
        <ul class="left_menu">

        <?php foreach($categories as $category): ?>
          <li class="odd"><a href="#"><?= $category['category']; ?></a></li>
        <?php endforeach; ?>

        </ul>
        <div class="title_box">Special Products</div>
        <div class="border_box">
          <div class="product_title"><a href="#">Makita 156 MX-VL</a></div>
          <div class="product_img"><a href="#"><img src="assets/images/p1.jpg" alt="" /></a></div>
          <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="title_box">Newsletter</div>
        <div class="border_box">
          <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
          <a href="#" class="join">subscribe</a> </div>
        <div class="banner_adds"> <a href="#"><img src="assets/images/bann2.jpg" alt="" /></a> </div>
    </div>