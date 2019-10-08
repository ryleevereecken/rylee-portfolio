<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rylee_portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<style>
    .site-title {
        font-family: sans-serif;
        font-size: 30px;
    }
    .site-title a {
        color: black;
        text-decoration: none;
        font-weight: lighter;
    }
    .custom-logo-link {
        display: block;
        text-align: center;
        margin-top: 25px;
    }
    .menu-main-navigation-container li {
        padding: 15px;
        border: 1px solid red;
        min-width: 200px;
        min-height: 50px;
        text-align: center;
    }
    .menu-main-navigation-container a {
        color: black;
        transition: 0.2s;
    }
    .menu-main-navigation-container a:hover {
        color: blueviolet;
    }
    .site-title {
        text-align: center;
    }
    .custom-logo {
        width: 100px;
    }
    .menu-main-navigation-container {
        text-align: center;
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .menu-main-navigation-container ul {
        display: inline-block;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/2.0.0/trianglify.min.js"></script>
<script>
    var background = document.getElementById('page');
    var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight
    });
    background.appendChild(pattern.canvas());
</script>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rylee_portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rylee_portfolio' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
