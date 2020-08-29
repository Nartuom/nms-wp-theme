<?php
    get_header();
    while(have_posts()) {
        the_post(); ?>
        <div class="full-width-split group">
            <div class="full-width-split__one">
                <div class="full-width-split__inner">
                    <div class="text-content-wrap left">
                        <?php
                            $queried_post = get_post($post_id);
                            $title = $queried_post->post_title;
                            echo $queried_post->post_content;
                        ?>
                    </div>
                </div>
            </div>
            <div class="full-width-split__two image">
                <div class="image-wrap">
                <img
                        src="<?php echo get_theme_file_uri('/images/simon-fishing.png')?>"
                        alt="The front cover of the Novel 'No Man's son' by Simon Phelps. The cover depicts a Saex and wooden targe set over a backdrop of Saxon england."
                    />
                </div>
            </div>
        </div>

        <?php
    }
    get_footer();
?>