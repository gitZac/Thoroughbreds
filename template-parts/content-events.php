<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
?>

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

<div class="row">
    
    <?php get_sidebar('left'); ?>
    
    <div class="col-sm-<?php echo thoroughbreds_main_width(); ?>">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="upcoming_events__header entry-header">
                <h2 class="upcoming_events__date color-primary"><?php the_field('event_date'); ?>, <span class="upcoming_events__time"><?php the_field('event_time') ?></span></h2>
                
                <p class="upcoming_events__location">
                    <?php the_field('event_location'); ?> 
                    
                    <?php $map = get_field('event_directions'); if ($map) :  ?> 
                        <a target="_blank" href="<?php the_field('event_directions'); ?>" class="upcoming_events__directions-link">(Click Here For Directions!)
                        </a>
                    <?php endif; ?>
                <p>
                <p class="upcoming_events__price"><?php the_field('event_ticket-price');?></p>
            </header><!-- .entry-header -->

            <div class="upcoming_events__content entry-content ">
                <?php the_field('event_page_content'); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'thoroughbreds'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php thoroughbreds_entry_footer(); ?>
            </footer><!-- .entry-footer -->

            <?php the_post_navigation(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        </article><!-- #post-## -->

    </div>
    
    <?php get_sidebar(); ?>

</div>