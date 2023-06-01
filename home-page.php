<?php
/*
Template Name: Home Page
*/
?>

<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<!--What's On-->

    <section class="container-fluid text-center" style="background-size:cover; padding-top: 5%; padding-bottom: 5%; max-width: 100%; height: auto; background-image: url(<?php the_field('backgroundimageforwhatson') ?>);">
        <div class="container">
                <div>
                    <h2 class="text-center"><?php the_field('titleforwhatson'); ?></h2>
                        <p class="text-center tagline"><?php the_field('subtitleforwhatson'); ?></p>
                </div>

            <div class="row"><!--  a row that gives us access to the BS columns-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Ruel" src="<?php the_field('whatsonartistimageone'); ?>">
                    <h4 class="artist-title"><?php the_field('whatsonartisttitleone'); ?></h4>
                    <p class="text-center"><?php the_field('whatsonartistdescriptionone'); ?></p>
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Spacey Jane Band" src="<?php the_field('whatsonartistimagetwo'); ?>">
                    <h4 class="artist-title"><?php the_field('whatsonartisttitletwo'); ?></h4>
                    <p class="text-center"><?php the_field('whatsonartistdescriptiontwo'); ?></p>
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Ocean Alley Band" src="<?php the_field('whatsonartistimagethree'); ?>">
                    <h4 class="artist-title"><?php the_field('whatsonartisttitlethree'); ?></h4>
                    <p class="text-center"><?php the_field('whatsonartistdescriptionthree'); ?></p>
                <div> <!--col-md-4-->
                </div><!-- row-->
            </div><!-- container-->
            <button type="button" class="btn btn-primary" id="calendar-btn">Calendar</button>
           </section><!-- container-fluid-->

<!--What's On-->

<!--Historical Venue-->

    <section class="container-fluid" id="historical-venue" style="background-size:cover; padding-top: 5%; padding-bottom: 5%; max-width: 100%; height: auto; background-image: url(<?php the_field('historicalvenuebackgroundimage') ?>);">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1">
                </div> col-md-1 -->
                <!-- <div class="col-md-10"> -->
                    <h2 class="historical-venue-heading"><?php the_field('titleforhistoricalvenue'); ?></h2>
                <!-- </div> col-md-10 -->
                <!-- <div class="col-md-1"> -->
                <!-- </div> --> <!--col-md-1-->
            </div> <!--row-->     

            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 hist">
                    <h4><?php the_field('historicalvenuepullquote'); ?></h4>
                    <p class=" hist-venue-p"><?php the_field('historicalvenuedescription'); ?></p>
                        <button type="button" class="btn btn-primary" id="venue-btn">Venue</button>
                </div> <!--col-md-6-->
                <div class="col-md-5">
                    <img class="img-fluid hist-img" alt="historical building" src="<?php the_field('historicalvenuefrontimage'); ?>">
                </div>
                <div class="col-md-1">
                </div>
            </div> <!--row-->
        </div> <!--container-->
    </section><!-- container-fluid-->

<!--Historical Venue-->

<!--Support Us-->

    <section class="container-fluid" id="support-us" style="background-size:cover; padding-top: 5%; padding-bottom: 5%; max-width: 100%; height: auto; background-image: url(<?php the_field('supportusbackgroundimage') ?>);">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1"> -->
                <!-- </div> --> <!--col-md-1-->
                <!-- <div class="col-md-5"> -->
                    <h2 class="support-us-heading"><?php the_field('titleforsupportus'); ?></h2>
                <!-- </div> --><!--col-md-5-->
            </div> <!--row-->

            <div class="row">
                <div class="col-md-1">
                </div> <!--col-md-1-->
                <div class="col-md-5">
                    <img class="img-fluid" alt="Fremantle Arts Centre Grounds" src="<?php the_field('supportusfrontimage'); ?>">
                </div> <!--col-md-5-->
                <div class="col-md-5">
                    <p class="support-p"><?php the_field('supportusdescription'); ?></p>
                    <button type="button" class="btn btn-primary" id="membership-btn">Membership</button>
                </div> <!--col-md-5-->
                <div class="col-md-1">
                </div> <!--col-md-1-->
            </div> <!--row-->
        
            <div class="row">
                <div class="col-md-2">
                </div> <!--col-md-2-->
                <div class="col-md-8 sup">
                    <p class="pull-quote"><?php the_field('supportuspullquote'); ?></p>
                </div>
                <div class="col-md-2">      
                </div> <!--col-md-2-->
            </div> <!--row-->  
        </div><!--container-->
    </section><!--container-fluid-->
    <?php get_footer();?>