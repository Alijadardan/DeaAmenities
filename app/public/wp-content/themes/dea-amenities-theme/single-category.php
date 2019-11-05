<?php

get_header();

while (have_posts()) {
    the_post();
    $CategoryProdukte = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'products',
        'meta_query' => array(

            array(
                'key' => 'related_category',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
            )
        )
    ));
    ?>
    <section id="portfolio" class="section-bg" style="padding-top:90px;">
        <div class="container">
            <div class="row portfolio-container">
                <?php
                    while ($CategoryProdukte->have_posts()) {
                        $CategoryProdukte->the_post();
                        ?>
                    <div class="col-lg-4">
     <a href="<?php the_permalink();?>">
          <!-- Item -->
          <figure style="background: #DEDEDE;" class="caption-3 mb-0 shadow-sm p-3">
            <img src="<?php the_post_thumbnail_url();?>" alt="" class="w-100">
            <figcaption style="background: #FFC5B9;" class="px-5 py-3 shadow-sm">
              <h2 class="h5 mb-1 font-weight-bold font-italic"><?php the_title(); ?></h2>
              <p class="mb-0 text-small font-italic text-muted"><?php the_field('short_description'); ?></p>
            </figcaption>
          </figure>
          </a>
        </div>
            <?php
                }
            }
            ?>
    </section>
    </div>
    </div>
    <?php get_footer(); ?>