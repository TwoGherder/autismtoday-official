<?php

/**
 * Template part for displaying custom post type: channel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testingarea
 */
get_header();
?>

<!-- channel array -->
<?php
$args = array(
  'post_type' => 'at_channel',
  'posts_per_page' => 12,
  'orderby' => 'date', // order by date
  'order' => 'desc', // show by last descendant

);
$channel_query = new WP_Query($args);
$channel_category = get_the_terms($post->ID, 'channel_category');

?>

<div class="channel-banner">
  <?php $channel_banner = get_field('channel_banner');
  if (!empty($channel_banner)) :    ?>
    <img src="<?php echo esc_url($channel_banner['url']) ?>" alt="<?php echo esc_attr($channel_banner['alt']); ?>" />
  <?php endif; ?>
</div>
<section class="channel-section">

  <h1 class="services-heading">
    <?php the_field('at_channel_heading'); ?>
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
    <?php the_field('channel_cat_heading'); ?>
  </h2>

  <div class="row-channel-cards">
    <!-- loop throughout channel content -->
    <!-- loop started -->

    <?php if ($channel_query->have_posts()) : ?>
      <?php // foreach ($channel_category as $category) {
      ?>

      <?php while ($channel_query->have_posts()) : $channel_query->the_post(); ?>
        <!-- looped content -->
        <!-- card container  -->
        <a href="<?php the_permalink(); ?>" class="article-clickable">
          <article class="channel-card">
            <!-- card header image -->
            <header>
              <!-- feature image -->
              <?php echo get_the_post_thumbnail($post->ID, /*array(520, 320)*/); ?>
            </header>
            <div class="channel-body">
              <div class="channel-title">
                <?php the_title('<h3>', '</h3>') ?>
              </div>
              <p class="channel-excerpt">
                <?php the_excerpt() ?>
              </p>
            </div> <!-- end .channel-body -->
          </article>
          <!-- end .channel-card -->
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

  </div> <!-- end row-channel-cards -->

  <!-- <div class="all-services-btn">
      <?php
      // $view_all_btn = get_field('view_all_services');
      // if ($view_all_btn) :
      //   $view_all_btn_title = $view_all_btn['title'];
      //   $view_all_btn_url = $view_all_btn['url'];
      ?>
        <a href="<?php // print_r(esc_url($view_all_btn_url));
                  ?>"><?php // print_r(esc_html($view_all_btn_title));
                      ?></a>
      <?php // endif
      ?>
    </div> -->
</section>
<?php
get_sidebar();
get_footer(); ?>