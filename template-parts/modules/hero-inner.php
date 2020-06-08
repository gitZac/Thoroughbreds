<?php if (get_post_thumbnail_id($post->ID)) : ?>
    <section class="hero">
        <div class="hero__image" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>);"></div>
        <div class="hero__shade"></div>
        <div class="hero__content">
            <div class="hero__title ">
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
<?php endif; ?>