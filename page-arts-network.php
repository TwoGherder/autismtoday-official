<?php

/**
 * Template part for displaying custom post type: arts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testingarea
 */
get_header();
?>



<div class="arts-banner">
  <?php $arts_banner = get_field('arts_banner');
  if (!empty($arts_banner)) :    ?>
    <img src="<?php echo esc_url($arts_banner['url']) ?>" alt="<?php echo esc_attr($arts_banner['alt']); ?>" />
  <?php endif; ?>
</div>
<div class="arts-section">

  <h1 class="arts-heading">
    Autism Today ARTS Network
  </h1>
  <p>
    This is where we showcase and celebrate the strengths, gifts and talents that exist in each of us to inspire hope and to provide people often labelled as &ldquo;unemployable&rdquo; with an avenue for success, happiness and financial self-sustainability.
  </p>


  <!-- painters -->
  <section class="art-cat">
    <!-- arts painters array -->
    <?php
    $args = array(
      'post_type' => 'at_arts',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'arts_category',
          'field' => 'slug',
          'terms' => 'painters',
        ),
      ),

    );
    $arts_painters_query = new WP_Query($args);

    ?>
    <h2>
      Painters
    </h2>

    <div class="row-arts-cards">
      <!-- loop started -->
      <?php if ($arts_painters_query->have_posts()) : ?>
        <?php while ($arts_painters_query->have_posts()) : $arts_painters_query->the_post(); ?>
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
  </section> <!-- end art-cat -->

  <!-- musicians -->
  <section class="art-cat">
    <!-- arts musicians array -->
    <?php
    $args = array(
      'post_type' => 'at_arts',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'arts_category',
          'field' => 'slug',
          'terms' => 'musicians',
        ),
      ),

    );
    $arts_musicians_query = new WP_Query($args);

    ?>
    <h2>
      Musicians
    </h2>

    <div class="row-arts-cards">
      <!-- loop started -->
      <?php if ($arts_musicians_query->have_posts()) : ?>
        <?php while ($arts_musicians_query->have_posts()) : $arts_musicians_query->the_post(); ?>
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
  </section> <!-- end art-cat -->

  <!-- photography -->
  <section class="art-cat">
    <!-- arts photography array -->
    <?php
    $args = array(
      'post_type' => 'at_arts',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'arts_category',
          'field' => 'slug',
          'terms' => 'photography',
        ),
      ),

    );
    $arts_photography_query = new WP_Query($args);

    ?>
    <h2>
      Photography
    </h2>
    <div class="row-arts-cards">
      <!-- loop started -->
      <?php if ($arts_photography_query->have_posts()) : ?>
        <?php while ($arts_photography_query->have_posts()) : $arts_photography_query->the_post(); ?>
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
  </section> <!-- end art-cat -->

  <!-- movies/animation -->
  <section class="art-cat">
    <!-- arts movies/animation array -->
    <?php
    $args = array(
      'post_type' => 'at_arts',
      'posts_per_page' => 3,
      'orderby' => 'date', // order by date
      'order' => 'desc', // show by last descendant
      'tax_query' => array(
        array(
          'taxonomy' => 'arts_category',
          'field' => 'slug',
          'terms' => 'movie-animation',
        ),
      ),

    );
    $arts_movieani_query = new WP_Query($args);

    ?>
    <h2>
      Movies / Animation
    </h2>
    <div class="row-arts-cards">

      <!-- loop throughout channel content -->
      <!-- loop started -->

      <?php if ($arts_movieani_query->have_posts()) : ?>
        <?php while ($arts_movieani_query->have_posts()) : $arts_movieani_query->the_post(); ?>
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
  </section> <!-- end art-cat -->
</div>
  <?php
  get_sidebar();
  get_footer(); ?>