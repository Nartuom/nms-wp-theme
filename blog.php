<?php 
  /* Template Name: Blog Page*/
  get_header();
?>
<section id="blog">
  <div>
    <h2>BLOG</h2>
  </div>
  <div class="blog-grid-container">
 
  <?php $catquery = new WP_Query( 'cat=2&posts_per_page=6' ); ?>
  
  <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
  
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
  
  <?php wpex_pagination(); ?>  
</section>
<?php get_footer(); ?>

