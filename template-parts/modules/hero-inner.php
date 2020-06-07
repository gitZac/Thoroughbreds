
<section class="hero">
    <div class="hero__image" style="background-image:url(<?php if (get_post_thumbnail_id($post->ID) ) : echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); endif; ?>);"></div>
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