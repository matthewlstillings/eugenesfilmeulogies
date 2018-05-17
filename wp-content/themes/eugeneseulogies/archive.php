<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */

$term = get_queried_object();
$review_home_image = get_field('category_hero', $term);

get_header();
?>	

	<div class="preview-thumbnail review-preview-thumbnail" style="background: url('<?php echo $review_home_image['url'];  ?>') 50% 0 no-repeat fixed;" data-type="background" data-speed="5">
		<div></div>
		<div class="preview-thumbnail__content container">
			<h1 class="preview-thumbnail__title" style="color: #E9C87B;"><?php the_archive_title(); ?></h1>
		</div>
		<a class="scroll" href="#main"><i class="fas fa-chevron-down" id="page-down"></i></a>    
    </div> <!-- Hero -->
	<div id="primary" class="content-area">

		<div class="nav-link-lrg nav-lrg-left"><?php previous_posts_link('<i class="fas fa-chevron-left page-arrow"></i>') ?></div> <!-- Right Page Nav for Big Screens -->

		<main id="main" class="site-main preview__container <?php the_archive_title() ?>-home">
		<div class="page-nav">
			<div class="nav-link nav-left"><?php previous_posts_link('<i class="fas fa-chevron-left"></i> Newer') ?></div>
   			 <div class="nav-link nav-right"><?php next_posts_link('Older <i class="fas fa-chevron-right"></i>') ?></div>
		</div>
		<?php if ( have_posts() ) : ?>
		
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
		<div class="page-nav">
			<div class="nav-link nav-left"><?php previous_posts_link('<i class="fas fa-chevron-left"></i> Newer') ?></div>
   			 <div class="nav-link nav-right"><?php next_posts_link('Older <i class="fas fa-chevron-right"></i>') ?></div>
		</div>
		</main><!-- #main -->

		<div class="nav-link-lrg nav-lrg-right"><?php next_posts_link(' <i class="fas fa-chevron-right page-arrow"></i>') ?></div> <!-- Right Page Nav for Big Screens -->
		
	</div><!-- #primary -->
	
	<?php get_template_part( 'template-parts/content', 'footer' );  ?>
<?php

get_footer();
