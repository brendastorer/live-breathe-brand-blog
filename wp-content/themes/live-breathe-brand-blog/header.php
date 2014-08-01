<?php?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php?>

<?php?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/live-breathe-brand-blog/js/front-page.js"></script>

</head>

<body
	<?php body_class(); ?>
>

<header class="site-header" role="banner">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-name"><span class="site-initials">HH</span> Helena Hounsel</a>

  <nav class="mobile-toggle-menu">
    <label for="menu-toggle" class="menu-toggle-button">&#9776; MENU</label>
    <input type="checkbox" id="menu-toggle"/>
    <div id="mobile-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <ul>
        <li><a href="https://www.facebook.com/helenalor" class="icon-facebook-box" target="_blank"> facebook</a></li>
        <li><a href="https://twitter.com/helenalor" class="icon-twitter" target="_blank"> twitter</a></li>
        <li><a href="http://www.pinterest.com/helenalor/" target="_blank" class="icon-pinterest"> pinterest</a></li>
        <li><a href="http://instagram.com/helenalor" class="icon-instagram" target="_blank"> instagram</a></li>
      </ul>
    </div>
  </nav>

	<nav role="navigation" class="site-navigation main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    <div class="socials">
      <a href="https://www.facebook.com/helenalor" target="_blank" class="icon-facebook-box"></a>
      <a href="https://twitter.com/helenalor" target="_blank" class="icon-twitter"></a>
      <a href="http://www.pinterest.com/helenalor/" target="_blank" class="icon-pinterest"></a>
      <a href="http://instagram.com/helenalor" target="_blank" class="icon-instagram"></a>
    </div>
	</nav><!-- .site-navigation .main-navigation -->

  <div class="clear"></div>
</header><!-- #masthead .site-header -->

<div class="main-fluid"><!-- start the page containter -->
