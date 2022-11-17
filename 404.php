<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package autismtoday
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found error-404-container">
				<header class="page-header">
					<h1 class="page-title error-404-title"><?php esc_html_e( 'Oops! It looks like you\'re lost.', 'autismtoday' ); ?></h1>
				</header><!-- .page-header -->
	
				<div class="page-content error-404-content">
					<p><?php esc_html_e( 'Sorry, we can\'t find that page. Try the search bar below to find available content or go back to homepage.', 'autismtoday' ); ?></p>
	
					<?php
						get_search_form();
					?>

					<div class="error-404-home-container">
						<a class="error-404-home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">Home</a>
					</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
