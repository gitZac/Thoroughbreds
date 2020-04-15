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

        <?php //do_action('thoroughbreds_homepage'); ?>

        <?php $args = array(
            'post_type' => 'upcoming_events',							
            'posts_per_page' => 1,							
            'orderby' => 'date',
            'order' => 'DESC'
        ); ?>

        <div class="container-fluid">

            <?php $events = new WP_Query($args); while($events->have_posts()): $events->the_post(); $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

            <section class="hero hero--full">
                <div class="hero__image" style="background-image:url(<?php echo $thumbnail['0']; ?>);"></div>
                <div class="hero__shade"></div>
                <div class="hero__content">
                    <div class="hero__title">
                        <h1 class="margin-0"><?php the_title(); ?></h1>
                    </div>
                    <div class="hero__subtitle">
                        <?php the_field('event_date'); ?>
                    </div>
                    <div class="hero__cta">
                        <a href="<?php the_permalink(); ?>" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Get Tickets</a>
                    </div>
                </div>
            </section>

            <?php endwhile; wp_reset_postdata(); ?>

        </div><!-- /.container-fluid-->

        <?php $args = array(
            'post_type' => 'upcoming_events',							
            'posts_per_page' => 2,							
            'orderby' => 'date',
            'offset' => 1,
            'order' => 'DESC'
        ); ?>

        <div class="container-fluid bg-gray-light">
            <section class="section callouts ">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2 class="section__title--title">Shows and Events</h2>
                        </div><!-- /.section-title-->
                    </div>

                    <?php $events = new WP_Query($args); while($events->have_posts()): $events->the_post(); $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(<?php echo $thumbnail['0']; ?>);">
                            </div>
                            <div class="callouts--card--content">
                                <h4 class="callouts--card--title"><?php the_title(); ?></h4>
                                <div class="callouts--card--dates"><?php the_field('event_date'); ?></div>
                                <p class="callouts--card--description"><?php the_field('event_description'); ?></p>
                                <div class="callouts--card--link">
                                    <a href="<?php the_permalink(); ?>" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Get tickets!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

                </div> <!-- /.row -->
            </section> <!-- /.Callouts -->
        </div> <!-- /.container-fluid-->

        <div class="container-fluid padding-none">

            <?php $args = array(
                'post_type' => 'services',							
                'posts_per_page' => -1,							
                'orderby' => 'date',
                'order' => 'DESC'
            ); ?>

            <div class="section highlights">
                <div class="row">
                    <div class="section-title">
                        <h2 class="section__title--title">Hire Us!</h2>
                    </div><!-- /.section-title-->
                </div>
                <div class="highlights--list">
                    <div class="row row--full-width ">
                    
                        <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

                        <div class="col-sm-4 padding-none">
                            <div class="highlights--list--item">
                                <a href="<?php the_permalink(); ?>" class="highlights--card">
                                    <div style="background-image:url(<?php echo $thumbnail['0']; ?>);" class="highlights--card--image"></div>
                                    <div class="highlights--card--shade"></div>
                                    <div class="highlights--card--content">
                                        <strong class="highlights--card--title"><?php the_title(); ?></strong>
                                        <em class="highlights--card--subtitle"><?php the_field('service_subtitle'); ?></em>
                                    </div>
                                </a>
                            </div> <!-- /.highlights--list-item-->
                        </div> <!-- /.col-sm-->

                        <?php endwhile; wp_reset_postdata(); ?>

                    </div> <!-- /.row--full-width-->
                </div> <!-- /.highlights--list-->
            </div><!-- /.section.highlights-->
        </div><!-- /.container-fluid-->
        <div class="container-fluid bg-gray-light">
            <section class="section callouts ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2 class="section__title--title">Join the Thoroughbreds!</h2>
                        </div><!-- /.section-title-->
                    </div>
                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(https://thethoroughbreds.dev.cc/wp-content/uploads/2020/02/frankin-it-up.jpg);">
                            </div>
                            <div class="callouts--card--content">
                            <h4 class="callouts--card--title">Open Rehearsals</h4>
                            <p class="callouts--card--description">We rehearse every Monday starting at 7:00 PM. Swing by the Hall for a tag or three!</p>
                            <div class="callouts--card--link">
                                <a href="#" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Learn More</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(https://thethoroughbreds.dev.cc/wp-content/uploads/2020/02/tbreds.jpg);">
                            </div>
                            <div class="callouts--card--content">
                                <h4 class="callouts--card--title">Membership Info</h4>
                                <p class="callouts--card--description">Learn more about becoming a member of the Thoroughbreds, auditions, competitions and more.</p>
                                <div class="callouts--card--link">
                                    <a href="#" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Get tickets!</a>
                                </div> <!-- /.card--link -->
                            </div> <!-- /.card--content -->
                        </div> <!-- /.callouts--card -->
                    </div> <!-- /.col-sm6 -->
                </div> <!-- /.row -->
            </section> <!-- /.Callouts -->
        </div> <!-- /.container-fluid-->
        <div class="container-fluid padding-none">
            <div class="section highlights">
                <div class="row">
                    <div class="section-title">
                        <h2 class="section__title--title">Our Latest Tags</h2>
                    </div><!-- /.section-title-->
                </div>
                <div class="highlights--video">
                    <div class="row">

                        <div class="col-sm-6 padding-none">

                            <div class="highlights--video--item">

                                <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_sB3qnT4biw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                           
                                </div>
                                <div class="highlights--video--content">
                                    <h4 class="highlights--video--title">Clouds on Fire</h4>
                                    <p class="highlights--video--description">Written by Huck Hucksley</p>
                                </div> <!-- /.card--content -->
                            </div> <!-- /.highlights--list-item-->

                        </div> <!-- /.col-sm-->
                        <div class="col-sm-6 padding-none">

                            <div class="highlights--video--item">

                                <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                                    <iframe src="https://www.youtube.com/embed/50u5u40kFZM?controls=0&amp;start=5" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="highlights--video--content">
                                    <h4 class="highlights--video--title">My Old Kentucky Home</h4>
                                    <p class="highlights--video--description">Written by Borat</p>
                                </div> <!-- /.card--content -->
                            </div> <!-- /.highlights--list-item-->

                        </div> <!-- /.col-sm-->
                        <div class="col-sm-6 padding-none">
                            <div class="highlights--video--item">
                                <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                                    <iframe src="https://www.youtube.com/embed/VKBmrHGpVPI?controls=0&amp;start=5" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="highlights-ideo--content">
                                    <h4 class="highlights--video--title">Sunshine is Bidding the Day Goodbye</h4>
                                    <p class="highlights--video--description">Written by Clyde Clydesdale</p>
                                </div> <!-- /.card--content -->
                            </div> <!-- /.highlights--list-item-->

                        </div> <!-- /.col-sm-->
                        <div class="col-sm-6 padding-none">

                            <div class="highlights--video--item">

                                <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                                    <iframe src="https://www.youtube.com/embed/5qEMuDzRRqE?controls=0&amp;start=5" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>           
                                </div>
                                <div class="highlights--video--content">
                                    <h4 class="highlights--video--title">Like Leaves We'll Fall in Love</h4>
                                    <p class="highlights--video--description">Written by Billy Baldwin</p>
                                </div> <!-- /.card--content -->
                            </div> <!-- /.highlights--list-item-->

                        </div> <!-- /.col-sm-->

                    </div> <!-- /.row--full-width-->

                </div> <!-- /.highlights--video-->
            </div><!-- /.section.highlights-->
        </div><!-- /.container-fluid-->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>        