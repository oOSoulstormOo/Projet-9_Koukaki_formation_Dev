<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="nav-bar">
            <a class="site-title nav-items" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            
            <button class="menu-burger" aria-controls="primary-menu" aria-expanded="false">
                <span class="line line__1"></span>
                <span class="line line__2"></span>
                <span class="line line__3"></span>
            </button>
            </div>
            
            <div class="burger-open-menu">
                <div>
                    <img class="logo-menu" src="<?php echo get_stylesheet_directory_uri() . '/new-image/logo-menu-burger.png'; ?>" alt="le logo du studio">
                    <ul>
                        <li><a class="nav-items" href="#story">Histoire</a></li>
                        <li><a class="nav-items" href="#characters">Personnages</a></li>
                        <li><a class="nav-items" href="#place">Lieu</a></li>
                        <li><a class="nav-items" href="#studio">Studio Koukaki</a></li>
                    </ul>
                </div>
                    <p>Studio Koukaki</p>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
