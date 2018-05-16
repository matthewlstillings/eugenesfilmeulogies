<?php
/*
    Template Name: Home Page
 */

//Custom Fields


//Featured Review

$review__image = get_field('featured_review_image');
$review__title = get_field('featured_review_title');
$review__synopsis = get_field('featured_review_synopsis');
$review__link = get_field('featured_review_link');

//Featured Blog
$blog__image = get_field('featured_blog_image');
$blog__title = get_field('featured_blog_title');
$blog__synopsis = get_field('featured_blog_synopsis');
$blog__link = get_field('featured_blog_link');

//Featured List
$list__image = get_field('featured_list_image');
$list__title = get_field('featured_list_title');
$list__synopsis = get_field('featured_list_synopsis');
$list__link = get_field('featured_list_link');


get_header();
?>

      <section class="featured-posts">
                    <div class="featured-posts__carousel">
                        <div class="featured-post__slide" style="background-image: url('<?php echo $review__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $review__link; ?>" ><h1 class="featured-post__title" style="color: #E9C87B;">Blade Runner 2049</h1></a>
                                <p class="featured-post__synopsis">Officer K, a new blade runner for the Los Angeles Police Department, unearths a long-buried secret that has the potential to plunge what's left of society into chaos. His discovery leads him on a quest to find Rick Deckard, a former blade runner who's been missing for 30 years.</p>
                            </div>    
                        </div>

                        <div class="featured-post__slide" style="background-image: url('<?php echo $blog__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $blog__link; ?>" ><h1 class="featured-post__title" style="color: #86CB92;">The Case For Anime</h1></a>
                                <p class="featured-post__synopsis">Officer K, a new blade runner for the Los Angeles Police Department, unearths a long-buried secret that has the potential to plunge what's left of society into chaos. His discovery leads him on a quest to find Rick Deckard, a former blade runner who's been missing for 30 years.</p>
                            </div>    
                        </div>

                        <div class="featured-post__slide" style="background-image: url('<?php echo $list__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $list__link; ?>"><h1 class="featured-post__title" style="color: #DE5B51;">Criterion Picks</h1></a>
                                <p class="featured-post__synopsis">Officer K, a new blade runner for the Los Angeles Police Department, unearths a long-buried secret that has the potential to plunge what's left of society into chaos. His discovery leads him on a quest to find Rick Deckard, a former blade runner who's been missing for 30 years.</p>
                            </div>    
                        </div>
                    </div>  
        </section>

<?php
get_footer(); ?>
