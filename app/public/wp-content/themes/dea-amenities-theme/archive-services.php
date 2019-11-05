<?php get_header(); ?>
<!--==========================
      Services Section
    ============================-->
    <section id="services" style="padding-top:90px;">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>
        <div class="row">
          <?php 
          $homepageServices = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'services'
          ));
          while($homepageServices->have_posts()){
           $homepageServices->the_post();
           $logo = get_field('logo_services');?>
           <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
             <div class="icon"><img style=" width:58px;
                        height:58px;" src="<?php echo $logo['url'] ; ?>" alt=""></div>
            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p class="description"><?php echo wp_trim_words(get_the_content(), 30); ?><a href="<?php the_permalink(); ?>" class="nu gray">Shiko me shume</a></p>
          </div>
          <?php
          }?>
         </div>
        </div>
      </section><!-- #services -->
<?php get_footer(); ?>