<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
?>
<div class="container-fluid">

<?php if (get_post_thumbnail_id($post->ID)) : ?>
    <section class="hero">
        <div class="hero__image" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>);"></div>
        <div class="hero__shade"></div>
        <div class="hero__content">
            <div class="hero__title ">
                <h1 class="margin-0"><?php the_title(); ?></h1>
            </div>
            <div class="hero__subtitle">
                <?php //the_field('event_date'); ?>
            </div>
        </div>
    </section>
</div>
<?php endif; ?>

</div><!--./container -->

<?php $args = array(
            'post_type' => 'upcoming_events',							
            'posts_per_page' => -1,							
            'orderby' => 'date',
            'order' => 'DESC'
        ); ?>

        <div class="container-fluid bg-gray-light">
            <section class="section callouts ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2 class="section__title--title">Our 2020 Season</h2>
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