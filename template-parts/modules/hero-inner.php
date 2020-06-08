<section class="hero">
    <div class="hero__image" style="background-image:url(<?php echo $image['url']; ?>);"></div>
    <div class="hero__shade"></div>
    <div class="hero__content">
        <div class="hero__title ">
            <h1 class="margin-0"><?php single_term_title(); ?></h1>
        </div>
        <div class="hero__subtitle">
            <?php //the_field('event_date'); ?>
        </div>
        <div class="hero__cta">
            <a href="<?php $current_url; ?>" class="thoroughbreds-button primary small animated flipInX slide2_button1 delay3">Book <?php single_term_title(); ?></a>
            <a href="#" class="thoroughbreds-button secondary small animated flipInX slide2_button1 delay3">Our Next Performance</a>
        </div>
    </div>
</section>