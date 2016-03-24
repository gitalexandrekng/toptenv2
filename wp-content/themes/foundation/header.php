<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/components/owl.carousel/dist/assets/owl.carousel.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<!--<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>-->
			<div class="nav-contain">
<<<<<<< HEAD
				<div class="nav-connect">
            	<div class="loupe"><a href="#searching"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/loupe.png" alt=""></a></div>
							<?php
							if ( is_user_logged_in() ) {
								?>

								<a class="in-button" href="<?php echo wp_logout_url( home_url() ); ?>">Déconnexion</a>

								<?php
							} else {
									echo '<a class="in-button" href="#connect">Se connecter</a>';
							}
							?>
				</div>
	        	<div class="top-bar">
	  				<?php foundationpress_top_bar_r(); ?>
=======
        <div class="top-bar">
  				<?php foundationpress_top_bar_r(); ?>
>>>>>>> d6ca827c560360cf08f2c620675f3f2483305783

  				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
  					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
  				<?php endif; ?>
  			</div>
			</div>
		</nav>
	</header>
<<<<<<< HEAD
    <div id="connect" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close"><div class="in">X</div></a>
            <h3>Connectez-vous</h3>
            <?php wp_login_form(); ?>
						<div class="register">
							<a href="<?php echo wp_registration_url(); ?>">Inscription</a>
						</div>
        </div>
    </div>
    <div id="searching" class="modalDialogSearch">
        <div>
            <a href="#close" title="Close" class="close"><div class="in">X</div></a>
            <div>
                <div class="row">
                    <div class="small-8 columns" style="padding:0">
                        <input type="text" class="search-in" placeholder="Rechercher un comic">
                    </div>
                    <div class="small-4 columns" style="padding:0">
                        <input type="submit" value="Envoyer" class="search-done">
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php if ( is_home() ) { include('header-perso.php'); }	else { include('header-light.php');} ?>

	<div class="fond-heros">
        <div class="degrade"></div>
				<?php if ( is_home() ) { include('slider.php'); } else { } ?>
=======
	<?php
		if ( is_home() ) {
		    include('header-perso.php');
		}

		else {

		}
	?>
	<div class="fond-heros">
        <div class="degrade"></div>
		<div class="sliderz owl-carousel" id="slide-center">
            <div>
                <div class="padding">
                    <div class="single-slide">
                        <div class="single-slide-image"  style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/une.jpg)">
                        </div>
        		    </div>
                    <div class="single-slide-fond">
                        <div class="single-texte">
                            <div class="titre">Deadpool VS spiderman</div>
                            <div><a href="#" class="bouton-decouvrir">Découvrir</a></div>
                        </div>
                    </div>
    		    </div>
            </div>
            <div>
                <div class="padding">
                    <div class="single-slide">
                        <div class="single-slide-image"  style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/deux.jpg)">
                        </div>
        		    </div>
                    <div class="single-slide-fond">
                        <div class="single-texte">
                            <div class="titre">Deadpool VS spiderman</div>
                            <div><a href="#" class="bouton-decouvrir">Découvrir</a></div>
                        </div>
                    </div>
    		    </div>
            </div>
		</div>
        <div class="bubblez">
            <div class="bubblez-contain" style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/une.jpg)"></div>
            <div class="bubblez-contain" style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/deux.jpg)"><div class="white"></div></div>
            <div class="bubblez-contain" style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/une.jpg)"><div class="white"></div></div>
            <div class="bubblez-contain" style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/images/slide/deux.jpg)"><div class="white"></div></div>
        </div>
>>>>>>> d6ca827c560360cf08f2c620675f3f2483305783
		<section class="container">
			<?php do_action( 'foundationpress_after_header' );
