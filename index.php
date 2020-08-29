<?php get_header(); ?>

<main>
  <section id="hero">
    <div class="full-width-split hero">
          <img id="ashLayer" src="<?php echo get_theme_file_uri('/images/ashes@2x.png')?>" />
            <div id="background-layer"></div>
          <div class="full-width-split__one hero">
              <div class="cover-image-wrap">
                  <img
                      src="<?php echo get_theme_file_uri('/images/Cover@2x.png')?>"
                      alt="The front cover of the Novel 'No Man's son' by Simon Phelps. The cover depicts a Saex and wooden targe set over a backdrop of Saxon england."
                    />
              </div>
          </div>
          <div class="full-width-split__two hero">
                <div class="text-content-wrap-right">
                  <?php
                    $post_id = 14;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $queried_post->post_content;
                    ?>
                  <a href="https://www.amazon.co.uk/No-Mans-Son-Simon-Phelps/dp/1797042912"><img class="amazon-icon" src="<?php echo get_theme_file_uri('/images/amazon-logo@2x.png') ?>"></a>
                </div>            
            </div>
      </div>
  </section>
  <section id="about" class="about-home">
    <div class="full-width-split about">
      <div class="full-width-split__one">
          <div class="text-content-wrap-left">
            <?php
                $post_id = 39;
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo $queried_post->post_content;
            ?>
          </div>
      </div>      
      <div class="full-width-split__two image">
        <div class="image-wrap">
          <img
            src="<?php echo get_theme_file_uri('/images/simon&Mel@2x.png') ?>"
            alt="A photo of Simon and his wife, Melanie, smiling at the snow covered landscape of the arctic circle"
          />
        </div>
      </div>
    </div>
  </section>
<?php include 'blog.php'?>





</main>
<?php get_footer();?>
