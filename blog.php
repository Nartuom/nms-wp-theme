<?php 
  /* Template Name: Blog Page*/
  get_header();
?>
<section id="blog">
  <div>
    <h2>BLOG</h2>
  </div>
  <div class="blog-grid-container">
  <?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'cat' => 2,
      'posts_per_page' => 6,
      'paged' => $paged
    );
    if(is_page('blog')) {
    $catquery = new WP_Query( $args );
    } else {
      $catquery = new WP_Query( 'cat=2&posts_per_page=3' );
    }
    while($catquery->have_posts()) : $catquery->the_post();
  ?>
  
    <div class="blog-thumbnail grid-item-blog">
      <?php if (has_post_thumbnail()) : ?>
        <div class="blog-image-wrap">
          <?php echo the_post_thumbnail();?>  
        </div>
        <div class="blog-image-text-wrap">
          <div class="blog-date">
            <?php echo get_the_date(); ?>
          </div>
          <div class="blog-title">
            <strong><?php the_title(); ?></strong>
          </div>
          <div class="blog-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <a class="wp-block-button__link" href="<?php the_permalink(); ?>">
          READ MORE
          </a>
        </div>
    <?php else : ?>
      <div class="blog-inner-text-wrap">
        <div class="blog-date">
          <?php echo get_the_date(); ?>
        </div>
        <div class="blog-title">
          <strong><?php the_title(); ?></strong>
        </div>
        <div class="blog-excerpt">
          <?php the_excerpt(); ?>
        </div>
        <a class="wp-block-button__link" href="<?php the_permalink(); ?>">
        READ MORE
        </a>
      </div>
    
    <?php endif; ?>
    </div>
    <?php endwhile;
        wp_reset_postdata();
    ?>
  </div>
  <?php if(is_page('blog')){
     wpex_pagination();
   } ?>  
</section>
<?php get_footer(); ?>

