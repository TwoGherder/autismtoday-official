<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autismtoday
 */

?>

<footer id="colophon" class="site-footer">
	<div class="newsletter-container">
		<div class="newsletter-content">
			<h3>The best of Autism Today Foundation Canada, straight to your inbox</h3>
			<form action="mailto:twogheder@gmail.com" method="post" enctype="text/plain" class="newsletter-form">
				<p>
					Be the first to know about what to watch, exclusive previews, and updates from the Autism Today Foundation Canada
				</p>

				<div class="newsletter-form-control">
					<label for="fname">Name:</label>
					<input type="fname" name="fname" id="fname" required>
				</div>

				<div class="newsletter-form-control">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" required>
				</div>

				<input type="submit" name="submit" id="submit" class="newsletter-submit" value="subscribe">
			</form>
		</div>
	</div>

	<p>&copy; Copyright 2022 Autism Today Foundation Inc, a 501(c)(3) Not-for-Profit Organization</p>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>