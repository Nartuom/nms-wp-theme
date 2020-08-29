<?php 
    /* Template Name: Contact page*/
    get_header();
    ?>
    <div id="contact-page">
        <div class="full-width-split">
            <div class="full-width-split__one">
                <div class="text-content-wrap-left">
                    <?php
                        $post_id = "62";
                        $queried_post = get_post($post_id);
                        echo $queried_post->post_content;
                        echo do_shortcode( '[wpforms id="64"]');
                    ?>
                </div>
                
            </div>
            <div class="full-width-split__two image">
                <div class="image-wrap">
                <img
                        src="<?php echo get_theme_file_uri('/images/notebook@2x.png')?>"
                        alt="The front cover of the Novel 'No Man's son' by Simon Phelps. The cover depicts a Saex and wooden targe set over a backdrop of Saxon england."
                    />
                </div>
            </div>
        </div>
    </div>
    <?php 
 get_footer()?>