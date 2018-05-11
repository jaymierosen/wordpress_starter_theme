<?php get_header();  ?>

<div class="main">
	<div class="container">
		<?php $miniHeroImage = get_field('mini_hero_image'); ?>
		<div class="mini__hero__image" style="background-image:url(<?php echo $miniHeroImage['url'] ?>); background-size: cover; background-position: center center;">
			<h1 class="mini__hero__image--h1"><?php the_title(); ?></h1>
		</div><!--/.mini__hero__image-->
	<div class="content__contact full">
		<div class="inner__container">
			<h2 class="contact__headline"><?php the_field('contact_headline'); ?></h2>
			<p><?php the_field('contact_text'); ?></p>
			<div class="contact__form">
				<?php // Start the loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; // end the loop?>
			</div>
		</div> <!--/.inner__container-->
	</div> <!--/.content full-->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>