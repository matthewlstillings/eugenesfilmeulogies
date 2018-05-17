<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */
$post_synopsis = get_field('review_synopsis');
$post_image = get_field('review_image');
$post_poster = get_field('movie_poster');
$film_director = get_field('film_director');
$film_date = get_field('film_year');
?>

<article id="post-<?php the_ID(); ?>" class="preview-feature">
	<div class="preview-content">
			<div class="preview-synopsis">
			<?php
				if ( 'post' === get_post_type() ) :
					?>
					<?php// the_category(', ');?>
					<?php //the_tags(); ?>
					<?php //edit_post_link('edit', '<div>', '</div>');?> 
			<?php endif; ?>
			<?php
				if ( is_singular() ) :
						the_title( '<h3 class="preview-title review-preview__title">', '</h3>' );
				else :
						the_title( '<h3 class="preview-title review-preview__title"><a class="title-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif; 
			?>
			<?php if (!empty($film_director)): ?> 
				<h6 class="film-director-date"><?php echo $film_director ?> || <?php echo $film_date ?> </h6>
			<?php endif; ?>
			
			<p class="preview-description"><?php echo $post_synopsis; ?></p>
			
		</div>
		<img class="preview-content-image" src="<?php echo $post_image['url']; ?>" /> <!-- eugeneseulogies_post_thumbnail-->
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->


