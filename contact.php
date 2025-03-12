<?php
    $title = 'Tools - Contact';
    require 'includes/header.php';
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
        <div class="center_title_bar">Contact Us</div>
        <div class="prod_box_big">
            <div class="center_prod_box_big">
            <div class="contact_form">
                <div class="form_row">
                <label class="contact"><strong>Name:</strong></label>
                <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                <label class="contact"><strong>Email:</strong></label>
                <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                <label class="contact"><strong>Phone:</strong></label>
                <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                <label class="contact"><strong>Company:</strong></label>
                <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                <label class="contact"><strong>Message:</strong></label>
                <textarea class="contact_textarea" ></textarea>
                </div>
                <div class="form_row"> <a href="#" class="prod_details">send</a> </div>
            </div>
            </div>
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