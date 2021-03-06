<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Eugene\'s_Eulogies
 */

get_header();
?>

	<div id="primary" class="content-area content-area-404">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				

				<div class="page-not-found-content">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Theses are not the droids you\'re looking for.', 'eugeneseulogies' ); ?></h1>
					</header><!-- .page-header -->
					<p><?php esc_html_e( ' Lame I know, but try searching elsewhere.', 'eugeneseulogies' ); ?></p>

					<?php
					

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Categories', 'eugeneseulogies' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$eugeneseulogies_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'eugeneseulogies' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$eugeneseulogies_archive_content" );

					
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
