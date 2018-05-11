<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link type="image/png" href="http://example.com/favicon.ico?v=M4omdLMmAp" rel="icon">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="container">
    <header class="main__header clearfix">
      <div class="logo">
      	<!-- <img src="<?php echo $logo_url; ?>" class="logo-dimensions normal-logo" id="site-logo" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="<?php echo $max_width; ?>"<?php if(isset($logo_height)): ?> height="<?php echo $logo_height; ?>"<?php endif; ?> /> -->
      <!-- 	Cannabis growing supplies: nutrients, lights, soil, and more! -->
        <?php $headerLogo = get_field('header_logo', 'option'); 
        ?>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"> <img src="<?php echo $headerLogo['url'] ?>" /></a>
      </div><!--logo-->
      <div class="hamburger__container" id="toggle">
          <div class="top"></div>
          <div class="middle"></div>
          <div class="bottom"></div>
      </div><!--hamburger menu-->
      <div class="overlay" id="overlay">
        <nav class="overlay__menu">
          <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
        </nav>
      </div>
    </header><!--header-->
  </div><!--container-->
  <!--overlay-->

