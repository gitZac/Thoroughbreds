<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php do_action('thoroughbreds_homepage'); ?>

        <div class="container-fluid bg-gray-light">
            <section class="section callouts ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2 class="section__title--title">Shows and Events</h2>
                        </div><!-- /.section-title-->
                    </div>
                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(https://thethoroughbreds.dev.cc/wp-content/uploads/2020/02/mainstreet-1.jpg);">
                            </div>
                            <div class="callouts--card--content">
                            <h4 class="callouts--card--title">Christmas with the Thoroughbreds</h4>
                            <div class="callouts--card--dates">Through February 17th</div>
                            <p class="callouts--card--description">A Caribbean-infused musical fairy tale about love’s extraordinary power to tear down walls and transform our lives.</p>
                            <div class="callouts--card--link">
                                <a href="#" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Get tickets!</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(https://thethoroughbreds.dev.cc/wp-content/uploads/2020/02/drew-1.jpg);">
                            </div>
                            <div class="callouts--card--content">
                                <h4 class="callouts--card--title">Winter Song Workshop</h4>
                                <div class="callouts--card--dates">March 24th</div>
                                <p class="callouts--card--description">Our winter music workshop is here! If you're looking to brush up on your music technique, now's your chance!</p>
                                <div class="callouts--card--link">
                                    <a href="#" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Get tickets!</a>
                                </div> <!-- /.card--link -->
                            </div> <!-- /.card--content -->
                        </div> <!-- /.callouts--card -->
                    </div> <!-- /.col-sm6 -->
                </div> <!-- /.row -->
            </section> <!-- /.Callouts -->
        </div> <!-- /.container-fluid-->
        <div class="">
            <div class="section highlights">
                <div class="row">
                    <div class="section-title">
                        <h2 class="section__title--title">Hire Us!</h2>
                    </div><!-- /.section-title-->
                </div>
                <div class="row row--full-width">
                </div>
                <div class="highlights--list">
                    <div class="highlights--list--item">
                        <a href="#" class="highlights--card">
                            <div style="background-image:url(https://thethoroughbreds.dev.cc/wp-content/uploads/2020/02/west1.jpg);" class="highlights--card--image"></div>
                            <div class="highlights--card--shade"></div>
                            <div class="highlights--card--content">
                                <strong class="highlights--card--title">Chorus Show Package</strong>
                                <em class="highlights--card--subtitle">Perfect for events, galas and services.</em>
                            </div>
                        </a>
                    </div>
                </div>


            </div><!-- /.section.highlights-->
        </div><!-- /.container-fluid-->


    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>        