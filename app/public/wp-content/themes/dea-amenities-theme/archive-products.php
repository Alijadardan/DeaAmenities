<?php 
get_header();?>
<section id="portfolio"  class="section-bg" style="padding-top:90px;" >
<div class="container">
  <header class="section-header">
    <h3 class="section-title">Produktet tona!</h3>
  </header>
  <div class="row portfolio-container">
    <?php 
    $homepageProdukte = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'products'
    ));
    while($homepageProdukte->have_posts()){
     $homepageProdukte->the_post();?>
     
     <div class="col-lg-4 mb-4">
     <a href="<?php the_permalink();?>">
          <!-- Item -->
          <figure style="background: #DEDEDE;" class="caption-3 mb-0 shadow-sm p-3 ">
            <img src="<?php the_post_thumbnail_url();?>" alt="" class="w-100">
            <figcaption style="background: #FFC5B9;" class="px-5 py-3 shadow-sm">
              <h2 class="h5 mb-1 font-weight-bold font-italic"><?php the_title(); ?></h2>
              <p class="mb-0 text-small font-italic text-muted"><?php the_field('short_description'); ?></p>
            </figcaption>
          </figure>
          </a>
        </div>
    
      <?php
      }?>
      </div>
    </section>
    <?php
get_footer();?>
