<?php
/*
Template Name: Events
*/
?>

<?php require_once('events_header.php');?>   <!--  Tells WordPress to include header.php -->

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
            <button type="button" class="btn btn-primary" id="calendar-btn">View All Shows</button>
           </section><!-- container-fluid-->

<!--What's On-->

<!--Events Calendar-->

<section class="container-fluid text-center" style="background-size:cover; padding-top: 5%; padding-bottom: 5%; max-width: 100%; height: auto; background-image: url(<?php the_field('backgroundimageforeventscalendar') ?>);">
    <div class="container">
        <div>
            <h2 class="text-center"><?php the_field('titleforeventscalendar'); ?></h2>
            <p class="text-center tagline"><?php the_field('subtitleforeventscalendar'); ?></p>
        </div>
        <div class="row"><!--  a row that gives us access to the BS columns-->
                <div class="col-md-4">
                    <img class="img-fluid" alt="April Concerts" src="<?php the_field('aprilcalendarimage'); ?>">
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid" alt="May Concerts" src="<?php the_field('maycalendarimage'); ?>">
                <div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid" alt="June Concerts" src="<?php the_field('junecalendarimage'); ?>">
                <div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid" alt="July Concerts" src="<?php the_field('julycalendarimage'); ?>">
                <div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid" alt="August Concerts" src="<?php the_field('augustcalendarimage'); ?>">
                <div> <!--col-md-4-->
        </div><!-- row-->
    </div><!-- container-->
    <button type="button" class="btn btn-primary" id="calendar-btn">View Full Calendar</button>
</section>


<!--Events Calendar-->

<?php get_footer();?>