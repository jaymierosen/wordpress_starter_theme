<?php 
	if (have_rows('home_page_gallery')) { //if we have rows
		while(have_rows('home_page_gallery')) {
		the_row(); //while we have rows
		?>
		<div class="gallery-item">
			<?php 
			    $galleryImage = get_sub_field('gallery_image', get_option( 'front page' ));
			?>
			<img src="<?php echo $galleryImage['url'] ?>">
		</div>
		<?php 
		}
	}
?>