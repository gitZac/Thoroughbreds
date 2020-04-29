<?php 

    $_term = get_queried_object('quartet'); 

    $videos = new WP_Query( array(
    'post_type' => 'video',							
    'posts_per_page' => -1,
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy'=>'quartet',
            'field'=> 'slug',
            'terms' => $_term
        ),
        array(
            'taxonomy'=>'membership',
            'field'=> 'slug',
            'terms' => 'colts'
        ),
    ),
    'orderby' => 'date',
    'order' => 'DESC'
) ); 

//probably do not need the "or", we just need to create a separate loop for get queried object when it comes time to set up that template.
?>

<?php if($videos->have_posts() ) : ?>
    <?php while($videos->have_posts() ) : $videos->the_post(); ?>

    <div class="col-sm-6 padding-none">
        <div class="highlights--video--item">
            <div class="highlights--video--item--inner highlights--video--item--inner-vi-ratio">
                <?php the_field('embed_link'); ?>
            </div>
            <div class="highlights--video--content">
                <h4 class="highlights--video--title"><?php the_title(); ?></h4>
                <p class="highlights--video--description"><?php the_field('video_by'); ?></p>
            </div> <!-- /.card--content -->
        </div> <!-- /.highlights--list-item-->
    </div> <!-- /.col-sm-->
<?php endwhile; 
   endif; wp_reset_postdata(); ?>