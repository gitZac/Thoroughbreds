<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thoroughbreds
 */
get_header(); ?>

<div class="container-fluid">
    <h2><?php echo get_the_archive_title(); ?></h2>

    <?php

    $_term = get_queried_object('quartet');

    $_posts = new WP_Query( array(
        'post_type' => 'singers',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'quartet',
                'field' => 'slug',
                'terms' => $_term
            ),
        ),
    ) );

    if($_posts->have_posts() ) : ?>

        <section class="content profile">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section__title--title"><?php single_term_title(); ?></h2>
                    </div>
                </div>    
            </div>
            <div class="row">

                <?php while($_posts->have_posts() ) : $_posts->the_post(); ?>

                    <?php get_template_part( 'template-parts/content-singers'); ?>

                <?php endwhile; ?>

            </div>

        </section>

    <?php
        endif;
        wp_reset_postdata();

    ?>

 </div><!-- ./container-fluid -->

<?php get_footer(); ?>

