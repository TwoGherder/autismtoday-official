<?php

/**
 * Template part for displaying custom post type: channel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autismtoday
 */
get_header();
?>

<!-- arts array -->
<?php
$args = array(
  'post_type' => 'at_arts',
  'posts_per_page' => 12,
  'orderby' => 'date', // order by date
  'order' => 'desc', // show by last descendant

);
$arts_query = new WP_Query($args);
$arts_category = get_the_terms($post->ID, 'arts_category');

?>

<div class="arts-banner">
  <?php $arts_banner = get_field('arts_banner');
  if (!empty($arts_banner)) :    ?>
    <img src="<?php echo esc_url($arts_banner['url']) ?>" alt="<?php echo esc_attr($arts_banner['alt']); ?>" />
  <?php endif; ?>
</div>
<section class="arts-section">

  <h1 class="arts-heading">
    <?php the_field('at_arts_heading'); ?>
  </h1>
  <?php the_content(); ?>
  <!-- <h2>
    <?php /*
        echo $category->name;
        echo $category->slug;
        print_r($category->name);
      }
      echo get_the_term_list(get_the_ID(), 'channel_category');
        */ ?>
  </h2> -->

  <h2>
    <?php the_field('arts_cat_heading'); ?>
  </h2>

  <div class="row-arts-cards">
    <!-- loop throughout channel content -->
    <!-- loop started -->

    <?php if ($arts_query->have_posts()) : ?>
      <?php // foreach ($channel_category as $category) {
      ?>

      <?php while ($arts_query->have_posts()) : $arts_query->the_post(); ?>
        <!-- looped content -->
        <!-- card container  -->
        <a href="<?php the_permalink(); ?>" class="article-clickable">
          <article class="arts-card">
            <!-- card header image -->
            <header>
              <!-- feature image -->
              <?php echo get_the_post_thumbnail($post->ID, /*array(520, 320)*/); ?>
            </header>
            <div class="arts-body">
              <div class="arts-title">
                <?php the_title('<h3>', '</h3>') ?>
              </div>
              <p class="arts-excerpt">
                <?php the_excerpt() ?>
              </p>
            </div> <!-- end .arts-body -->
          </article>
          <!-- end .arts-card -->
        </a>
      <?php endwhile;        ?>
      <!-- end while loop -->
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
      <?php get_template_part('template-parts/content', 'none'); ?>
      <!--  -->
    <?php endif;

    ?>

  </div> <!-- end row-arts-cards -->


  <?php
  get_sidebar();
  get_footer(); ?>