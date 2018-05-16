<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */
$review_synopsis = get_field('review_synopsis');
$review_image = get_field('review_image');
$review_poster = get_field('movie_poster');
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
			<?php eugeneseulogies_posted_on(); ?>
			<img class="preview-content-image" src="<?php echo $review_image['url']; ?>" /> <!-- eugeneseulogies_post_thumbnail-->
			<p class="preview-description"><?php echo $review_synopsis; ?><a class="synopsis-link" href='<?php the_permalink(); ?> ' rel="bookmark">  Continue</a></p>
			
		</div>
		<img class="preview-content-image" src="<?php echo $review_image['url']; ?>" /> <!-- eugeneseulogies_post_thumbnail-->
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->


