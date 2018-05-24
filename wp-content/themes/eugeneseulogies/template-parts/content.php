<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */

$review_score = get_field('film_score');
$post_synopsis = get_field('review_synopsis');
$post_image = get_field('review_image');
$post_poster = get_field('movie_poster');
$post_subtitle = get_field('post_subtitle');
$film_director = get_field('film_director');
$film_date = get_field('film_year');

?>

		
	<?php if ( is_single() ) : ?>

		<section id="post-<?php the_ID(); ?>" class="article-content-container review" >
			<div class="article__container container">
				<div class="push"> 
					<div class="review__title-and-score__container">
						<div class="review__title-and-year__container">
						<?php the_title( '<h2 class="review__title" id="review-title">', '</h2>' );?>
						<?php if (!empty($post_subtitle)): ?> 
							<h4 class="post__subtitle"><?php echo $post_subtitle; ?></h4>
							<p class="post__date">Posted on: <?php echo get_the_date( 'Y-m-d' ); ?></p>
						<?php endif; ?> <!-- if its a list or blog post -->	
						</div>
						<img class="review__poster" src="<?php echo $post_poster['url']; ?>" />
						<?php if (!empty($film_director)): ?> 
							<h5 class="film-director-date-single"><?php echo $film_director ?> || <?php echo $film_date ?> </h5>
						<?php endif; ?> <!-- if there is a date/director -->
						<h4 class="score"><?php echo $review_score; ?>/100</h4>
					</div>
				</div> <!-- left side container -->
				<article class="review__content article__content">
					<?php the_title( '<h2 class="review__title review__title-mobile" id="review-title">', '</h2>' );?>
					<?php if (!empty($post_subtitle)): ?> 
							<h4 class="post__subtitle post__subtitle--mobile"><?php echo $post_subtitle; ?></h4>
							<p class="post__date post__date--mobile">Posted on: <?php echo get_the_date( 'Y-m-d' ); ?></p>
					<?php endif; ?> <!-- if its a list or blog post -->	
					<?php if (!empty($review_score)): ?> 
						<h4 class="score score-mobile"><?php echo $review_score; ?>/100</h4>
					<?php endif; ?> <!-- if its a review/blog with a film score -->
					<?php // check if the repeater field has rows of data
						if( have_rows('list_item') ): 
							$i= 0;
						?>
							
							<!-- loop through the rows of data -->
						<?php while ( have_rows('list_item') ) : the_row(); 
							$year = get_sub_field('item_year');
							$director = get_sub_field('item_director');
							$i++;
						?>
						
						
							<div class="list-item">
								<div class="list-item__link-image-container">
									<a class="list-item__link" href="<?php the_sub_field('item_link'); ?>" class="list-item__link-wrapper"><img class="list-item__image" src="<?php the_sub_field('list_image'); ?>"/></a>
								</div>
								<div class="list-item__description-container">
									<h1 class="list-item__number"><?php echo $i;?></h1>
									<div class="list-item__title-container">
										<a href="<?php the_sub_field('item_link'); ?>" class="list-item__link-wrapper"><h4 class="list-item__title"><?php the_sub_field('item_title'); ?></h4></a>
										<p class="list-item__director-and-year"><em><?php echo $director; ?></em> || <em><?php echo $year; ?></em></p>
									</div>
									<p class="list-item__description"><?php the_sub_field('item_text'); ?></p>
								</div> <!-- item title and description wrapper -->
							</div> <!-- list item -->
							
						<?php
						
						endwhile;
						else : ?>

							<?php the_content(); ?> <!-- blog or review text -->

					<?php endif; ?>
					
					
				</article>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->


	<?php else : ?> <!-- Archive Posts Page -->

		<article id="post-<?php the_ID(); ?>" class="preview-feature">
			<div class="preview-content">
				<div class="preview-synopsis">
					<?php if ( 'post' === get_post_type() ) : ?>
							
					<?php endif; ?> <!-- add tags/category if needed-->
					<?php
						if ( is_singular() ) :
								the_title( '<h3 class="preview-title review-preview__title">', '</h3>' );
						else :
								the_title( '<h3 class="preview-title review-preview__title"><a class="title-link"  href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						endif; 
					?>
					<?php if (!empty($film_director)): ?> 
						<h6 class="film-director-date"><?php echo $film_director ?> || <?php echo $film_date ?> </h6>
					<?php endif; ?>
					<p class="preview-description"><?php echo $post_synopsis; ?></p>
				</div>
				<img class="preview-content-image" src="<?php echo $post_image['url']; ?>" /> <!-- eugeneseulogies_post_thumbnail-->
			</div>
		</article><!-- #post-preview-<?php the_ID(); ?> -->

	<?php endif; ?>	

