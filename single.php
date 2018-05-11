<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="mini__hero__image">
      <!-- when you have a blog index page, the_title refers to the post title, NOT the page title; if you want to add a page title, you have to add an if statement ... if the page is home-->
      <h1 class="mini__hero__image--single"><?php the_title(); ?></h1>
    </div>
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="entry__content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
          <div class="entry__meta">
            <h2><?php hackeryou_posted_on(); ?></h2>
          </div><!-- .entry-meta -->
          <div class="entry__utility">
            <p><?php hackeryou_posted_in(); ?></p>
            <p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>