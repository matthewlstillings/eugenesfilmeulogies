<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Eugene\'s_Eulogies
 */

get_header();
?>
		<div class="preview-thumbnail review-preview-thumbnail search-results-hero"  data-type="background" data-speed="5">
                <div class="preview-thumbnail__content container">
                    <h1 class="preview-thumbnail__title" style="color: #E9C87B;">Search</h1>
                </div>    
        </div>
		<?php if ( have_posts() ) : ?>

		
	<div class="main-body">
		<section id="primary" class="preview">
			<h1 class="search-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'eugeneseulogies' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
			<main class="preview__container review__container search-results__container" id="main" role="main">
			
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->
		</section><!-- #primary -->
		<?php get_template_part( 'template-parts/content', 'footer' );  ?>
	</div>
<?php

get_footer();
