<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
get_header();

?>

<?php 
    $_term = get_queried_object('quartet');
    $image = get_field('header_image_quartet', $_term);
    $tagline = get_field('quartet_tag_line', $_term); 

    $obj_id = get_queried_object_id();
    $current_url = get_term_link( $obj_id ) . '#topshow';
?>

<div class="container-fluid">
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
</div>

<div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section__title--title"><?php echo $tagline  ?></h2>
                        <?php echo category_description(); ?>
                    </div>
                </div>    
            </div>
        </section>

        <!-- Profile Card Loop -->

        <section class="profiles"> 
            <div class="row">
                <?php get_template_part( 'template-parts/content-singers'); ?>
            </div>
        </section>

        <!-- Video Loop -->

        <section class="profiles"> 
            <div class="row">
                <?php get_template_part( 'template-parts/loop/loop-video-quartet'); ?>
            </div>
        </section>

        <!-- Event Loop -->

        <section class="callouts">
            <div id="#topshow" class="row">
                <?php get_template_part('template-parts/loop/loop-events-quartet'); ?>
            </div>
        </section>


    <?php
        
    ?>
</div><!-- ./container-fluid -->

<?php get_footer(); ?>

