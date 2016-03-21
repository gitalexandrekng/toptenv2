<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="page" role="main">
	<article class="row main-content">

		<h2 id="topten">TOP 10</h2>
        <div class="slide-top">
            <div id="slide-top" class="owl-carousel">
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/deux.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
                <div> <div class="slide-image"><img src="<?php echo get_stylesheet_directory_uri()?>/images/jacket/une.jpg" alt=""></div> <div class="slide-texte">Texte</div></div>
            </div>
        </div>

		<h2 id="last">Dernières actualités</h2>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'accueil', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>

</div>
<div class="all">
    <a href="category/actualites/" class="button-all">Voir toutes les actualités</a>
</div>

<?php get_footer();
