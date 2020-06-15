<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
?>

<div class="container-fluid">

<?php if (get_post_thumbnail_id($post->ID) && has_post_thumbnail() ) : ?>
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

<div class="container">
    <section class="section margin-none">
        <div class="row">
            <div class="section-title margin-none">
                <h2 class="section__title--title-nb"><?php the_field('secondary_title');?></h2>
            </div><!-- /.section-title-->
        </div>
    </section>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">

        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'thoroughbreds'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    </article><!-- #post-## -->

</div>