<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */

 $review_synopsis = get_field('review_synopsis');
 $review_image = get_field('review_image');
 $review_poster = get_field('movie_poster');
 $review_score = get_field('film_score');
 $review_year = get_field('film_year');
?>

		
	<?php if ( is_single() ) : ?>

		<section id="post-<?php the_ID(); ?>" class="article-content-container review" >
			<div class="article__container container">
				<div class="push"> <!-- Remember To add this only to review page -->
					<div class="review__title-and-score__container">
						<div class="review__title-and-year__container">
						<?php the_title( '<h2 class="review__title" id="review-title">', '</h2>' );?>
							<h5 class="review__year"><?php echo $review_year; ?></h5>
						</div>
						<img class="review__poster" src="<?php echo $review_poster['url']; ?>" />
						<h4 class="score"><?php echo $review_score; ?>/100</h4>
					</div>
				</div>
				<article class="review__content article__content">
					<?php the_title( '<h2 class="review__title review__title-mobile" id="review-title">', '</h2>' );?>	
					<?php if (!empty($review_score)): ?> 
						<h4 class="score score-mobile"><?php echo $review_score; ?>/100</h4>
					<?php endif; ?>
					<?php the_content(); ?>
				</article>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->


	<?php else : ?> <!-- Archive Posts Page -->

		<article id="post-<?php the_ID(); ?>" class="preview-feature">
			<div class="preview-content">
				<div class="preview-synopsis">
					<?php
						if ( 'post' === get_post_type() ) :
							?>
							<?php// the_category(', ');?> <!-- Category -->
							<?php //the_tags(); ?> <!-- Tags -->
							<?php //edit_post_link('edit', '<div>', '</div>');?> <!-- Edit Post Link -->
					<?php endif; ?>
					<?php
						if ( is_singular() ) :
								the_title( '<h3 class="preview-title review-preview__title">', '</h3>' );
						else :
								the_title( '<h3 class="preview-title review-preview__title"><a class="title-link"  href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						endif; 
					?>
					
					<p class="preview-description"><?php echo $review_synopsis; ?></p>
				</div>
				<img class="preview-content-image" src="<?php echo $review_image['url']; ?>" /> <!-- eugeneseulogies_post_thumbnail-->
			</div>
		</article><!-- #post-preview-<?php the_ID(); ?> -->

	<?php endif; ?>	

