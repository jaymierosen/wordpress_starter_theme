<?php get_header();  ?>

<div class="container">
	<?php $heroImage = get_field('hero_image'); ?>
	<div class="hero__image" style="background-image:url(<?php echo $heroImage['url'] ?>)">
	    <h1><?php the_field('hero_headline'); ?></h1>
	    <h2><?php the_field('hero_subtitle'); ?></h2>
	</div><!--/.hero-image-->
</div> <!-- /.container -->

<div class="main">
	<div class="container">
		<section class="about">
			<?php $bioLeftBgImage = get_field('bio_left_background_image'); ?>
			<div class="bio" style="background-image:url(<?php echo $bioLeftBgImage['url'] ?>); background-repeat:repeat;">
					<h3><?php the_field('bio_heading') ?></h3>
					<h4><?php the_field('bio_sub_heading') ?></h4>
					<p><?php the_field('bio_text'); ?></p>
					<a href="<?php the_field('contact_us_link') ?>"><button><?php the_field('contact_us_link_text') ?>
					</button></a>
			</div>
			<div class="gallery">
				<?php 
					if (have_rows('image_gallery', 'option')) { //if we have rows
						while(have_rows('image_gallery', 'option')) {
						the_row(); //while we have rows
						?>
						<div class="gallery__item">
							<?php 
							    $galleryImage = get_sub_field('gallery_image', get_option( 'front page' ));
							?>
							<img src="<?php echo $galleryImage['url'] ?>">
						</div>
						<?php 
						}
					}
				?>
			</div>
		</section>
		<!-- <section class="gallery">
			<div class="gallery__item">
				
			</div>
		</section> -->
	</div>
</div> <!-- /.main -->

<?php get_footer(); ?>