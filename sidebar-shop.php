<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thoroughbreds
 */
if (!is_active_sidebar('sidebar-shop')) {
    return;
}
?>
<div class="col-sm-3" id="thoroughbreds-sidebar">
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar-shop'); ?>
    </div><!-- #secondary -->
</div>