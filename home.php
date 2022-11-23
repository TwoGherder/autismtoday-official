<?php

/*****
 * Main blog page
 *
 * @package autismtoday
 *  */
get_header();

?>



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <!-- hard code a banner -->

  <?php if (have_posts()) : ?>

    <!-- start the loop | the loop grabs all the content and
cycles through all of the content until it’s done. -->
    <?php while (have_posts()) : the_post(); ?>

    <?php endwhile; ?>
    <!-- end while loop -->

  <?php else : ?>
    <!-- send to search page / some other general page with
search function, tags, categories, archives,etc.. -->
    <?php get_template_part('template-parts/content', 'none');
    ?>
  <?php endif; ?>

  <!-- //On this page specifically - this would be area to add
pagination and a sidebar - out of the loop. -->
  <!-- <div class="pagination page-pagination">
  <?php // page_pagination();
  ?>
</div> -->

</article>

<?php get_footer(); ?>