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
    <?php get_template_part('template-parts/modules/hero-inner'); ?>
</div>
<div class="container-fluid bg-gray-light">
    <section class="section callouts ">
        <div class="row">
            <?php get_template_part( 'template-parts/modules/inner-title' ); ?>
            <?php get_template_part('template-parts/loop/loop-events'); ?>
        </div> <!-- /.row -->
    </section> <!-- /.callouts -->
</div> <!-- /.container-fluid-->