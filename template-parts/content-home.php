<?php

/***
 * Template part for displaying content in the front-page.php
 * @link https://developer.wordpress.org/theme/basics/templatehierarchy/
 *
 * @package autismtoday
 * @since 1.0.0
 */
?>
<!-- displays the page/post ID of the page -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <!-- entry header -->
  <header>
    <!-- get the page title and display it -->
    <?php // the_title('<h1 class="entry-title">', '</h1>');
    ?>
  </header>
  <!-- if you had an image it will display using WPs largest default
thumbnail sizing (settings in the admin - you can see the sizes) -->
  <main>
    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
    <div class="entry-content">
      <!-- display page or post content -->
      <?php
      the_content(); // displays all of the content within the editor in pages in the dashboard



      ?>
      <!-- other things you could put in here would be: pagination
(more used for blog posts), custom posts, anything you need for site. -->

      <!-- featured articles -->
      <?php
      $args = array(
        'post_type' => 'featured_articles',
        'posts_per_page' => 2,
        'orderby' => 'date', // order by date
        'order' => 'desc', // show by last descendant
      );
      $articles_query = new WP_Query($args);
      ?>



      <section class="featured-articles-section">
        <h2 class="articles-heading">
          <?php the_field('featured_articles_heading');
          ?>
        </h2>

        <!-- card container  -->
        <div class="row-featured-articles">
          <!-- loop throughout services content -->
          <?php if ($articles_query->have_posts()) :  ?>
            <!-- loop started -->
            <?php while ($articles_query->have_posts()) : $articles_query->the_post(); ?>
              <!-- looped content -->
              <a href="<?php the_permalink(); ?>" class="articles-card">
                <article>
                  <!-- card header image -->
                  <header>
                    <!-- feature image -->
                    <?php echo get_the_post_thumbnail($post->ID, /*array(520, 320)*/); ?>
                  </header>
                  <div class="article-body">
                    <div class="article-title">
                      <h3><?php the_title() ?></h3>
                    </div>
                    <p class="article-excerpt">
                      <?php the_excerpt() ?>
                    </p>
                  </div> <!-- end .article-body -->
                </article>
              </a>
              <!-- end .article-card -->

            <?php endwhile; ?>
            <!-- end while loop -->
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
            <!--  -->
          <?php endif; ?>

        </div> <!-- end row-featured articles -->

        <div class="all-articles-btn">
          <?php
          $view_all_btn = get_field('article_view_more_btn');
          if ($view_all_btn) :
            $view_all_btn_title = $view_all_btn['title'];
            $view_all_btn_url = $view_all_btn['url'];
          ?>
            <a href="<?php print_r(esc_url($view_all_btn_url));
                      ?>"><?php print_r(esc_html($view_all_btn_title));
                          ?></a>
          <?php endif
          ?>
        </div>
      </section>

    </div>


  </main>
</article>
<footer class="entry-footer">

</footer>