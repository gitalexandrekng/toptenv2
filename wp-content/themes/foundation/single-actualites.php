<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">

	<?php if ( function_exists('yoast_breadcrumb') )
	{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<div id="inpage">
        <div class="actions">
            <div class="containerz">
                <div class="titrez"><div class="in">Top Ten Comics</div></div>
                <div class="like"></div>
                <div class="comments"></div>
                <div class="rev"></div>
            </div>
        </div>
        <div class="socialmedia">
            <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/social/fb.jpg" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/social/tw.jpg" alt="" /></li>
                <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/social/pint.jpg" alt="" /></li>
            </ul>
        </div>
	</div>

	<article <?php post_class('main-content', 'accueil') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="row">
				<div class="column">
					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php the_content(); ?>
		</div>
		<div class="post-date">
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
			Posté le <?php foundationpress_entry_meta(); ?>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<div class="slash-while">
			<?php
			$nombre_de_slash = 1;

			while ($nombre_de_slash <= 300)
			{
			    echo '/';
			    $nombre_de_slash++;
			}
			?>
		</div>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
