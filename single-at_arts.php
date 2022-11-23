<?php

/***
 *	The template for displaying single blog post for at_arts
 *
 *   @package autismtoday
 *
 */

//display header
get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="single-arts-content">
      <h1 class="single-arts-title">
        <?php the_title(); ?>
      </h1>
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
  <!-- end while loop -->
<?php else : ?>
  <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif;
//display footer
get_footer(); ?>