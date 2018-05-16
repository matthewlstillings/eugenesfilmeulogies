<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eugene\'s_Eulogies
 */
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
get_header();
?>
	<div class="preview-thumbnail review-preview-thumbnail" style="background: url('<?php  echo $url; ?>') 50% 0 no-repeat fixed;" data-type="background" data-speed="5">
		<div></div>
		<div class="preview-thumbnail__content container">
			<h1 class="preview-thumbnail__title" style="color: #E9C87B;"><?php the_title(); ?></h1>
		</div> 
		<a class="scroll" href="#main"><i class="fas fa-chevron-down" id="page-down"></i></a>       
    </div>
	<section class="article-content-container review" id="review">
        <div class="article__container container">
			<main class="single-post-main" id="main">
			

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					

					/*// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; */

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</section>
	
<?php
get_template_part('template-parts/content', 'footer');
get_footer();
