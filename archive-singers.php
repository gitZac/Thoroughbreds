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


    <section class="content profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2 class="section__title--title">Singer section title</h2>
                </div>
            </div>    
        </div>

        <div class="row">

            <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>


                    <?php get_template_part( 'template-parts/content-singers'); ?>


                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

        </div>

    </section>


 </div><!-- ./container-fluid -->



<?php get_footer(); ?>
