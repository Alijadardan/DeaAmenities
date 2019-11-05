<?php 
get_header();
while(have_posts()){
        the_post();?>
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
      <div class="carousel-item active">
        <div class="carousel-background"><img src="<?php echo get_theme_file_uri('img/intro-carousel/1.jpg') ?>" alt=""></div>
        <div class="carousel-container">
          <div class="carousel-content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <a href="#featured-services" class="btn-get-started scrollto">Kontaktoni</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #intro -->
<?php
}
get_footer();?>