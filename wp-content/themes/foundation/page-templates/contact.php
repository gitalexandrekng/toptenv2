<?php
/*
Template Name: Contact
*/

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>
 <div class="image-contact"><img src="<?php echo get_stylesheet_directory_uri();?>/images/image-contact.jpg" alt=""></div>
 <div id="page" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
       </header>
       <div class="page-contact">
         <div class="titre">
           <h3>Une réclamation? Une question? Un problème?</h3>
           <h4>Glissez-nous un petit mot sous l'oreille</h4>
         </div>
         <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
         <div class="entry-content">
             <?php the_content(); ?>
         </div>
       </div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'foundationpress_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'foundationpress_page_after_comments' ); ?>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
