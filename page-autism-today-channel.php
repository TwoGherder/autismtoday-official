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

<!-- featured articles -->
<?php
$args = array(
  'post_type' => 'at_channel',
  'posts_per_page' => 3,
  'orderby' => 'date', // order by date
  'order' => 'desc', // show by last descendant
);
$channel_query = new WP_Query($args);
?>



<section class="channel-section">
  <!-- <h1 class="services-heading">
        <?php // the_field('services_heading');
        ?>
      </h1> -->

  <!-- card container  -->
  <h2>
    <?php if (has_category()) {
      //display the category
      get_the_category();
    } ?>
  </h2>
  <div class="row-channel-cards">
    <!-- loop throughout services content -->
    <?php if ($channel_query->have_posts()) :  ?>
      <!-- loop started -->
      <?php while ($channel_query->have_posts()) : $channel_query->the_post(); ?>
        <!-- looped content -->
        <article class="channel-card">
          <!-- card header image -->
          <header>
            <!-- feature image -->
            <?php echo get_the_post_thumbnail($post->ID, /*array(520, 320)*/); ?>
          </header>
          <div class="channel-body">
            <div class="channel-title">
              <a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>') ?></a>
            </div>
            <p class="channel-excerpt">
              <?php the_excerpt() ?>
            </p>
          </div> <!-- end .channel-body -->
        </article>
        <!-- end .channel-card -->

      <?php endwhile; ?>
      <!-- end while loop -->
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
      <?php get_template_part('template-parts/content', 'none'); ?>
      <!--  -->
    <?php endif; ?>

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