<?php 
get_header();
$categories = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'category'
  ));
  ?>
  <section id="team">
    <div class="container">
      <div class="section-header wow fadeInUp">
        <h3 style="padding-top:50px;">Per cfare po shikoni, <strong style="color: #18d26e;">Zgjidh nje kategori</strong></h3>
      <div class="row">
        <?php
        while($categories->have_posts()){
          $categories->the_post();?>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <a href="<?php the_permalink();?>">
              <img style=" width:255px;
                        height:180px;" src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4><?php the_title(); ?></h4>
                            <span><?php the_content(); ?></span>
                          </div>
                        </div>
                      </a> 
                    </div>
                  </div>
                  <?php
                  }?>
                  </div>
                </div>
              </div>
              <?php echo paginate_links(); ?>
            </section>
            <?php
            
get_footer();?>
