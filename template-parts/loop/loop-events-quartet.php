<?php

    $_term = get_queried_object('event_performer'); 

    $events = new WP_Query( array(
        'post_type' => 'upcoming_events',
        'posts_per_page' => -1,
        'tax_query' => array( 
            array(
                'taxonomy' => 'event_performer',
                'field' => 'slug',
                'terms' => $_term
            ),
        ),
    ) );
?>

<?php if ($events->have_posts() ) : ?>
    <?php while($events->have_posts() ) : $events->the_post(); $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>

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

    <?php endwhile; 
endif; wp_reset_postdata();?>