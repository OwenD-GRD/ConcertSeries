<footer class="container-fluid text-center" id="page_footer" style="background-size:cover; padding-top: 4%; padding-bottom: 4%; max-width: 100%; height: auto; background-image: url(<?php the_field('footerbackgroundimage') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">    
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid social-icons" alt="Facebook Icon" src="<?php the_field('footericonone'); ?>">
                    <img class="img-fluid social-icons" alt="Instagram Icon" src="<?php the_field('footericontwo'); ?>">  
                    <img class="img-fluid social-icons" alt="Twitter Icon" src="<?php the_field('footericonthree'); ?>">  
                </div> <!--col-md-4-->
                <div class="col-md-4">    
                </div> <!--col-md-4-->
            </div> <!--row-->

            <div class="row">
                <div class="col-md-2">
                </div> <!--col-md-2-->
                <div class="col-md-8 blocker">
                </div> <!--col-md-8-->
                <div class="col-md-2">
                </div> <!--col-md-2-->
            </div> <!--row-->

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                   <p class="text-align-center"><?php the_field('location'); ?></p> 
                </div> <!--col-md-6-->
                <div class="col-md-3">
                    <p class="text-align-center"><?php the_field('contactdetails'); ?></p>
                </div> <!--col-md-6-->
                <div class="col-md-3">
                </div>
            </div> <!--row-->
        </div> <!--container-->
    </footer> <!--container-fluid-->
    <?php wp_footer(); ?>
</body>
</html>