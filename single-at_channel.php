<?php

/***
 *	The template for displaying single blog post for at_channel
 *
 *   @package testingarea
 *
 */

//display header
get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="single-channel-content">
      <h1 class="single-channel-title">
        <?php the_title(); ?>
      </h1>
      <?php the_content(); ?>
      <div class="single-channel-navigation">
        <?php single_blog_post_pagination(); ?>
      </div>
    </div>

  <?php endwhile; ?>
  <!-- end while loop -->
<?php else : ?>
  <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif;
//display footer
get_footer(); ?>
