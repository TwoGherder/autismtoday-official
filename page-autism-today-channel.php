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



<div class="channel-banner">
  <?php $channel_banner = get_field('channel_banner');
  if (!empty($channel_banner)) :    ?>
    <img src="<?php echo esc_url($channel_banner['url']) ?>" alt="<?php echo esc_attr($channel_banner['alt']); ?>" />
  <?php endif; ?>
</div>
<div class="channel-section">

  <h1 class="channel-heading">
    Autism Today Channel
  </h1>
  <p>
    Our content will be directed by the neurodiverse community where we solve their unique and individual situations and concerns. We want to take an overwhelming spectrum of disorders and problems and turn it into a Spectrum of Solutions and Pathways forward.
  </p>


  <!-- technology -->
  <section class="channel-cat">
    <!-- channel technology array -->
    <?php
    $args = array(
      'post_type' => 'at_channel',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'channel_category',
          'field' => 'slug',
          'terms' => 'technology',
        ),
      ),

    );
    $channel_technology_query = new WP_Query($args);

    ?>
    <h2>
      Technology
    </h2>

    <div class="row-channel-cards">
      <!-- loop started -->
      <?php if ($channel_technology_query->have_posts()) : ?>
        <?php while ($channel_technology_query->have_posts()) : $channel_technology_query->the_post(); ?>
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
  </section> <!-- end channel-cat -->

  <!-- growth & education -->
  <section class="channel-cat">
    <!-- channel growth & education array -->
    <?php
    $args = array(
      'post_type' => 'at_channel',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'channel_category',
          'field' => 'slug',
          'terms' => 'growth-education',
        ),
      ),

    );
    $channel_groweduc_query = new WP_Query($args);

    ?>
    <h2>
      Growth &#38; Education
    </h2>

    <div class="row-channel-cards">
      <!-- loop started -->
      <?php if ($channel_groweduc_query->have_posts()) : ?>
        <?php while ($channel_groweduc_query->have_posts()) : $channel_groweduc_query->the_post(); ?>
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
  </section> <!-- end channel-cat -->

  <!-- technology experts -->
  <section class="channel-cat">
    <!-- channel technology experts array -->
    <?php
    $args = array(
      'post_type' => 'at_channel',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'channel_category',
          'field' => 'slug',
          'terms' => 'tech-experts',
        ),
      ),

    );
    $channel_techexp_query = new WP_Query($args);

    ?>
    <h2>
      Technology Experts
    </h2>

    <div class="row-channel-cards">
      <!-- loop started -->
      <?php if ($channel_techexp_query->have_posts()) : ?>
        <?php while ($channel_techexp_query->have_posts()) : $channel_techexp_query->the_post(); ?>
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
  </section> <!-- end channel-cat -->

  <!-- other experts -->
  <section class="channel-cat">
    <!-- channel other experts array -->
    <?php
    $args = array(
      'post_type' => 'at_channel',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'channel_category',
          'field' => 'slug',
          'terms' => 'other-experts',
        ),
      ),

    );
    $channel_otherexp_query = new WP_Query($args);

    ?>
    <h2>
      Other Experts
    </h2>

    <div class="row-channel-cards">
      <!-- loop started -->
      <?php if ($channel_otherexp_query->have_posts()) : ?>
        <?php while ($channel_otherexp_query->have_posts()) : $channel_otherexp_query->the_post(); ?>
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
  </section> <!-- end channel-cat -->
</div>

  <?php
  get_sidebar();
  get_footer(); ?>