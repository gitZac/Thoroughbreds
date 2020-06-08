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
    <?php endif; ?>
</div>
<div class="container-fluid bg-gray-light">
    <section class="section callouts ">
        <div class="row">
            <?php get_template_part( 'template-parts/modules/inner-title' ); ?>
            <?php get_template_part('template-parts/loop/loop-events'); ?>
        </div> <!-- /.row -->
    </section> <!-- /.callouts -->
</div> <!-- /.container-fluid-->