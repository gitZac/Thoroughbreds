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
            <section class="callouts ">

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

                    <?php $args = array(
                        'post_type' => 'page',							
                        'posts_per_page' => 2,
                        'post_parent' => 2055,							
                        'orderby' => 'rand',
                        'offset' => 1,
                        'order' => 'DESC'
                    ); ?>
                    <?php $custom = new WP_Query($args); while($custom->have_posts()): $custom->the_post(); $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

                    <div class="col-sm-6">
                        <div class="callouts--card">
                            <div class="callouts--card--image" style="background-image:url(<?php echo $thumbnail['0']; ?>);">
                            </div>
                            <div class="callouts--card--content">
                            <h4 class="callouts--card--title"><?php the_title(); ?></h4>
                            <p class="callouts--card--description"><?php the_field('page_description'); ?></p>
                            <div class="callouts--card--link">
                                <a href="<?php the_permalink(); ?>" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Learn More</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                    
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

                <?php $args = array(
                        'post_type' => 'video',							
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy'=>'video__type',
                                'field'=> 'slug',
                                'terms' => 'barbershop-tag'
                            ),
                        ),
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ); ?>

                <div class="highlights--video">
                    <div class="row">
                        <?php $video = new WP_Query($args); while($video->have_posts()): $video->the_post(); ?>
                        <div class="col-sm-6 padding-none">
                            <div class="highlights--video--item">
                                <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                                    <?php the_field('embed_link'); ?>
                                </div>
                                <div class="highlights--video--content">
                                    <h4 class="highlights--video--title"><?php the_title(); ?></h4>
                                    <p class="highlights--video--description"><?php the_field('video_by'); ?></p>
                                </div> <!-- /.card--content -->
                            </div> <!-- /.highlights--list-item-->
                        </div> <!-- /.col-sm-->
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div> <!-- /.row--full-width-->
                </div> <!-- /.highlights--video-->
            </div><!-- /.section.highlights-->
        </div><!-- /.container-fluid-->
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>        