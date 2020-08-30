<?php
    get_header();
    while(have_posts()) {
        the_post(); ?>
    <div id="about">
        <div class="full-width-split group">
            <div class="full-width-split__one about">
                    <div class="text-content-wrap-left">
                        <?php ?>
                        <div class="blog-date-single">
                        <?php echo get_the_date(); ?>
                        </div>
                        <div class="blog-title-single">
                        <strong><?php the_title(); ?></strong>
                        </div>
                        <div >
                        <?php the_content(); ?>
                        </div>
                        <a class="wp-block-button__link" href="<?php echo site_url('/blog')?>">
                        Go back
                        </a>
                    </div>
            </div>
            <div class="full-width-split__two image">
                <div class="image-wrap">
                    <?php if(has_post_thumbnail()) {
                        echo the_post_thumbnail();
                    } else {?>
                        <img src="<?php echo get_theme_file_uri('/images/notebook@2x.png')?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    get_footer();
?>