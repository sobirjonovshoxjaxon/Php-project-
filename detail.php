<?php 
    $title = 'Product Detail';
    require 'includes/header.php';
    require 'adminpanel/connect.php';

    $id = $_GET['id'];

    $statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $statement->execute([$id]);
    $post = $statement->fetch();

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
        <div class="center_title_bar"><?= $post['name']; ?></div>
        <div class="prod_box_big">
            <div class="center_prod_box_big">
            <div class="product_img_big"> <a href="javascript:popImage('assets/images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img style="width: 100px;" src="adminpanel/posts/<?= $post['image']; ?>" alt=""  /></a>
                <div class="thumbs"> 

                    <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]">
                        <img src="assets/images/thumb1.jpg" alt=""  />
                    </a> 
                    <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]">
                        <img src="assets/images/thumb2.jpg" alt=""  />
                    </a> 
                    <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]">
                        <img src="assets/images/thumb1.jpg" alt=""  />
                    </a> 
                    
                </div>
            </div>
            <div class="details_big_box">
                <div class="product_title_big"><?= $post['name']; ?></div>
                <div class="specifications"> Available: <span class="blue"><?= $post['available']; ?></span><br />
                Warranties: <span class="blue"><?= $post['warranties']; ?></span><br />
                Transport: <span class="blue"> delivery services company</span><br />
                Include :<span class="blue"> TVA</span><br />
                Description :<span class="blue"><?= $post['description']; ?></span><br />
                </div>
                <div class="prod_price_big"><span class="reduce"><?= $post['oldprice']; ?></span> <span class="price"><?= $post['price']; ?></span></div>
                <a href="#" class="prod_buy">add to cart</a> <a href="#" class="prod_compare">compare</a> </div>
            </div>
        </div>
        </div>
        <!-- end of center content -->


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
