<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="mini__hero__image">
      <!-- when you have a blog index page, the_title refers to the post title, NOT the page title; if you want to add a page title, you have to add an if statement ... if the page is home-->
      <?php
      if( is_home() && get_option('page_for_posts') ) {
        $blog_page_id = get_option('page_for_posts');
        echo '<h1 class="mini__hero__image--h1">'.get_page($blog_page_id)->post_title.'</h1>';
      }
      ?>
    </div>
    <div class="content blog">
        <div class="blog__post">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <?php $featured_image = born_featured_image_url($post); ?> <!--$post is the current post you are on-->
              <img src="<?php echo $featured_image ?>">
              <div class="entry__meta">
                <?php hackeryou_posted_on(); ?>
              </div><!-- .entry-meta -->
              <h1 class="blog__h1"><?php the_title(); ?></h1>
              <p><?php the_excerpt(); ?></p>
              <a class="read__more" href="<?php echo get_permalink(); ?>"> Read More...</a>
              <p class="category"><?php the_category( ' ' ); ?></p>
            <?php endwhile; // end the loop?>
        </div>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>