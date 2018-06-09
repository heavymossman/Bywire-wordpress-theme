<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ByWire_News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans|Cutive" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


	<header>
	  <div class="container-fluid px-0">
	    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	      <div class="container">
	        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="img-fluid"></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav mx-auto">
	            <li class="nav-item active">
	              <a class="nav-link" href="news.php">News</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="videos.php">Videos</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="podcasts.php">Podcasts</a>
	            </li>
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              About
	              </a>
	              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                <a class="dropdown-item" href="page.php">About</a>
	                <a class="dropdown-item" href="page.php">Team</a>
	                <a class="dropdown-item" href="page.php">Partners</a>
	                <a class="dropdown-item" href="page.php">Wirebits Currency</a>
	                <a class="dropdown-item" href="contact.php">Contact</a>
	                <a class="dropdown-item" href="single-news.php">Single Article Template</a>
	                <a class="dropdown-item" href="video-homepage.php">Video Homepage Template</a>
	                <div class="dropdown-divider"></div>
	                <a class="dropdown-item" href="page.php">White Paper</a>
	              </div>
	            </li>
	          </ul>
	          <form class="form-inline my-2 ">
	            <div class="input-group">
	              <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
	              <div class="input-group-append">
	                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
	              </div>
	            </div>
	          </form>
	        </div>
	    </nav>
	    </div>
	  </div>
	</header>







<!--<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bywire-news' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bywire_news_description = get_bloginfo( 'description', 'display' );
			if ( $bywire_news_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bywire_news_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	<!--	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bywire-news' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->

	<div id="content" class="site-content">
