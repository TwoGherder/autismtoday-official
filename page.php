<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autismtoday
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) :
		while (have_posts()) : the_post();
			// do things -- display content : the function below will pull the content from the template partial.
			get_template_part('template-parts/content', 'page');
		endwhile; // End of the loop.
	else :
		// send to search page / some other general page with search function, tags, categories, archives,etc..
		get_template_part('template-parts/content', 'none');
	endif;
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
