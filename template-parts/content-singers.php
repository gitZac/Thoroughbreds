<article class="catcard col-md-4">
    <div class="catcard__inner">
        <div class="catcard__upper">
            <div class="catcard__cat-image">
                <?php the_post_thumbnail(); ?>
                <div class="catcard__title-wrapper">
                    <h4 class="catcard__title"><?php the_title(); ?></h4>
                </div>
            </div><!--./catcard-cat-image-->
        </div> <!--./catcard-upper-->
        <div class="catcard__lower">
            <div class="catcard__content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div><!--./catcard-inner-->
</article>