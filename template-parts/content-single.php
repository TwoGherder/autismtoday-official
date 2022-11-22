<?php

/**
 * Template part for displaying content in the single.php template (individual/article blog page)
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 *
 * @package autismtoday
 * @since 1.0.0
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="article-heading">
    <header>
      <?php the_title('<h2 class="article-entry-title">', '</h2>'); ?>
      <?php the_date(); ?>
      <?php the_author() ?>
    </header>
    <div class="blog-body-content">
      <!--    *displays the page/post content.
            * You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but what you see is the very minimum what you need to have your content to be displayed. -->

      <?php the_content(); ?>
    </div> <!-- blog-body-content -->
  </div>
</article>