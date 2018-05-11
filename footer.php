<footer class="main-footer">
	<div class="inner__container">
		<div class="main-footer-logo">
			<?php $footerLogo = get_field('footer_logo', 'option'); 
			?>
			<img src="<?php echo $footerLogo['url'] ?>" />
		</div>
		<ul><?php dynamic_sidebar('secondary-widget-area'); ?></ul>

	</div>
</footer>
<div class="copy">
	<p><?php echo date('Y'); ?> | &copy; Born WordPress theme developed by <a href="http://www.jaymierosen.com">Jaymie Rosen </a></p>
	<p>Photos from <a href="http://imcreator.com/free">IM CREATOR</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
	<p>Theme inspired by <a href="https://themeforest.net/item/born-for-music-psd-template/15704086?s_rank=1">Born for Music Template</a></p>
</div>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>