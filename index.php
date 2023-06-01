<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<!--What's On-->

    <section class="container-fluid text-center" id="whats-on">
        <div class="container">
                <div>
                    <h2 class="text-center">What's On</h2>
                        <p class="text-center tagline">Check out the upcoming concerts at the FAC.</p>
                </div>

            <div class="row"><!--  a row that gives us access to the BS columns-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Ruel" src="http://170.187.231.66/~mesh6/wp-content/themes/ConcertSeries/Images/Ruel.jpg">
                    <h4 class="artist-title">Ruel</h4>
                    <p class="text-center">The young Aussie pop-sensation. Touring his brand new album ‘4th Wall’.</p>
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Spacey Jane Band" src="http://170.187.231.66/~mesh6/wp-content/themes/ConcertSeries/Images/Spacey Jane.jpg">
                    <h4 class="artist-title">Spacey Jane</h4>
                    <p class="text-center">The local indie-rock group, who’ve cemented their place as one of Australia’s most loved bands.</p>
                </div> <!--col-md-4-->
                <div class="col-md-4">
                    <img class="img-fluid artist-img" alt="Ocean Alley Band" src="http://170.187.231.66/~mesh6/wp-content/themes/ConcertSeries/Images/Ocean Alley.jpg">
                    <h4 class="artist-title">Ocean Alley</h4>
                    <p class="text-center">The popular psychedelic-surf-rock band are touring their new album ‘Low Altitude Living’.</p>
                <div> <!--col-md-4-->
                </div><!-- row-->
            </div><!-- container-->
            <button type="button" class="btn btn-primary" id="calendar-btn">Calendar</button>
           </section><!-- container-fluid-->

<!--What's On-->

<!--Historical Venue-->

    <section class="container-fluid" id="historical-venue">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1">
                </div> col-md-1 -->
                <!-- <div class="col-md-10"> -->
                    <h2 class="historical-venue-heading">Historical Venue</h2>
                <!-- </div> col-md-10 -->
                <!-- <div class="col-md-1"> -->
                <!-- </div> --> <!--col-md-1-->
            </div> <!--row-->     

            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 hist">
                    <h4 class="historical-venue-quote">The best local live music acts, amongst a fascinating backdrop.</h4>
                    <p class=" hist-venue-p">Jazz, Reggae, Classical and Rock music, with a series of food and craft markets.<br><br>
                        <strong>culturally enriching experience in the city of
                        Fremantle.</strong></p>
                        <button type="button" class="btn btn-primary" id="venue-btn">Venue</button>
                </div> <!--col-md-6-->
                <div class="col-md-5">
                    <img class="img-fluid hist-img" alt="historical building" src="http://170.187.231.66/~mesh6/wp-content/themes/ConcertSeries/Images/Historical-Building-FAC.jpg">
                </div>
                <div class="col-md-1">
                </div>
            </div> <!--row-->
        </div> <!--container-->
    </section><!-- container-fluid-->

<!--Historical Venue-->

<!--Support Us-->

    <section class="container-fluid" id="support-us">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1"> -->
                <!-- </div> --> <!--col-md-1-->
                <!-- <div class="col-md-5"> -->
                    <h2 class="support-us-heading">Support us</h2>
                <!-- </div> --><!--col-md-5-->
            </div> <!--row-->

            <div class="row">
                <div class="col-md-1">
                </div> <!--col-md-1-->
                <div class="col-md-5">
                    <img class="img-fluid" alt="Fremantle Arts Centre Grounds" src="http://170.187.231.66/~mesh6/wp-content/themes/ConcertSeries/Images/FAC-Grounds.jpg">
                </div> <!--col-md-5-->
                <div class="col-md-5">
                    <p class="support-p"><strong>Become a member</strong> and
                        receive great benefits like
                        discounts to events and early access to tickets. <br><br>
                        Your support helps us create great events for you.</p>
                    <button type="button" class="btn btn-primary" id="membership-btn">Membership</button>
                </div> <!--col-md-5-->
                <div class="col-md-1">
                </div> <!--col-md-1-->
            </div> <!--row-->
        
            <div class="row">
                <div class="col-md-2">
                </div> <!--col-md-2-->
                <div class="col-md-8 sup">
                    <p class="pull-quote"><strong>“You have to see this please.</strong>
                        They had free music every Sunday 
                        in the courtyard... <strong>excellent</strong>. It is
                        such a pretty place and the gallery
                        is great too.” - <em>Opal Bin</em></p>
                </div>
                <div class="col-md-2">      
                </div> <!--col-md-2-->
            </div> <!--row-->  
        </div><!--container-->
    </section><!--container-fluid-->
    <?php get_footer();?>