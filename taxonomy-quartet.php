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
        </div>
    </section>
</div>

<div class="container-fluid">

        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section__title--title"><?php echo $tagline; ?></h2>
                        <?php echo category_description(); ?>
                    </div>
                </div>    
            </div>
        </section>

        <!-- Event Loop -->

        <section class="callouts">
            <div class="row">

                <?php get_template_part('template-parts/loop/loop-events-quartet'); ?>

            </div>
        </section>

        <!-- Profile Card Loop -->

        <section class="profiles"> 
            <div class="row">
                <?php get_template_part( 'template-parts/content-singers'); ?>
            </div>
        </section>

    <?php
        
    ?>
</div><!-- ./container-fluid -->

<?php get_footer(); ?>

