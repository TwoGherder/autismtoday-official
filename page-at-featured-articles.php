<?php

/**
 * Template part for displaying custom post type: featured articles
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autismtoday
 */
get_header();
?>

<!-- featured articles -->
<?php
$args = array(
  'post_type' => 'featured_articles',
  'posts_per_page' => 2,
  'orderby' => 'date', // order by date
  'order' => 'desc', // show by last descendant
);
$articles_query = new WP_Query($args);
$articles_heading = get_field('featured_articles_heading')
?>

<section class="featured-articles-section">
  <h1 class="articles-heading">
    Featured Articles
    ?>
  </h1>
  <!-- card container  -->
  <div class="row-featured-articles">
    <!-- loop throughout services content -->
    <?php if ($articles_query->have_posts()) :  ?>
      <!-- loop started -->
      <?php while ($articles_query->have_posts()) : $articles_query->the_post(); ?>
        <!-- looped content -->
        <article class="articles-card">
          <!-- card header image -->
          <header>
            <!-- feature image -->
            <?php echo get_the_post_thumbnail($post->ID, /*array(520, 320)*/); ?>
          </header>
          <div class="article-body">
            <div class="article-title">
              <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>') ?></a>
            </div>
            <p class="article-excerpt">
              <?php the_excerpt() ?>
            </p>
          </div> <!-- end .article-body -->
        </article>
        <!-- end .article-card -->

      <?php endwhile; ?>
      <!-- end while loop -->
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
      <?php get_template_part('template-parts/content', 'none'); ?>
      <!--  -->
    <?php endif; ?>

  </div> <!-- end row-services -->


</section>
<?php
get_sidebar();
get_footer(); ?>