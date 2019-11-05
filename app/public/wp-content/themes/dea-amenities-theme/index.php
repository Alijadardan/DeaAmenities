<?php 
if (!defined('ABSPATH')) exit;
get_header(); ?>
<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo get_theme_file_uri('img/1_BanneraWEB_DEA.png') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ne Jemi <a href="#" style="color: #18d26e;">DEA AMENITIES</a></h2>
                <p>Ne jemi nje kompani e cila ndimon bizneset e tjera me nevojat e tyre, tek ne mund te gjeni nje shumellojshmeri sherbimesh duke filluar nga produkte hotelerie , produkte me logo etj. Me ne ne krah biznesi juaj do te gjej sukses!</p>
                <a href="<?php echo site_url('/contact')?>" class="btn-get-started scrollto">Kontakto me NE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #intro -->
    <main id="main">
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Sherbimet tona</h3>
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
      <!--==========================
      About Us Section
      ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Rreth Nesh</h3>
          <p>DEA Amenities ofrohet për tregun shqiptar si një linjë e dedikuar tërësisht për përkujdesjen profesionale në sektorin e mikpritjes së hotelerisë. DEA Amenities lindi si një nevojë për përkujdesje dhe studimeve të kryera nga kompania e saj mëmë Brausch & Co, e cila vjen me një prevojë shumë vjeçare në tregun Shqiptar dhe atë të Mbretërisë së Bashkuar.</p>
        </header>
        <div class="row about-cols">
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misjoni Yne</a></h2>
              <p>
              Kualiteti dhe pamja estetike e kombinuar edhe me çmimet më konkurruese në treg, e bëjnë kompaninë tonë zgjedhjen e parë për konsumatorët.Gama e jonë produkteve kozmetike për hotele përfshinë një spektër të gjerë të shampove, xhelit të dushit, sapunëve, shpërndarësve, locioneve të trupit dhe produkteve për SPA.  
              </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Plani Jone</a></h2>
              <p>
              Ne besojmë që përveçse komoditetit dhe pamjes estetike, mikpritjes një dhomë hoteli duhet të tregoj edhe kujdes për lëkurën, flokët dhe trupin tuaj. Për këtë kemi vendosur të ofrojmë për tregun shqiptar dhe klientët tanë të nderuar produkte të cilësisë më të mirë në Europë. Falë bashkëpunimit me partner të mirënjohur europian produktet që ne ofrojmë janë të certifikuara për cilësinë e tyre superiore.
              </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Vizioni</a></h2>
              <p>
              DEA Amenities vendos një nivel të ri në tregun e produkteve të hotelerisë, si të kozmetikes dhe të aksesorëve. Përmes gamës së gjerë të produkteve dhe cilësisë së lartë synimi ynë është të sigurojmë një shtrirje në të gjithë territorin e vendit e jashtë tij dhe të jemi zgjedhja e parë për kozmetikën dhe aksesorët e hotelerisë.


              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #about -->
    <!--==========================
      Facts Seion
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Facts</h3>
          <p>DEA Amenities ofrohet për tregun shqiptar si një linjë e dedikuar tërësisht për përkujdesjen profesionale në sektorin e mikpritjes së hotelerisë. </p>
        </header>
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Klient</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Lloje Produktesh</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Ore sherbimi</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Puntor</p>
          </div>
        </div>
        <div class="facts-img">
          <img src="" alt="" class="img-fluid">
        </div>
      </div>
    </section><!-- #facts -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">
        <header class="section-header">
          <h3 class="section-title">Disa nga Produktet tona!</h3>
        </header>
        <div class="row portfolio-container">
        <?php 
          $homepageProdukte = new WP_Query(array(
            'posts_per_page' => 6,
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
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <header class="section-header">
          <h3>Klientet Tane</h3>
        </header>
        <section id="team">
          <div class="container">
            <div class="section-header wow fadeInUp">
              <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                  <div class="member">
                    <img src="<?php echo get_theme_file_uri('/img/plaza.jpg') ?>" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Hotel Plaza</h4>
                        <div class="social">
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-google-plus"></i></a>
                          <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                  <div class="member"> 
                    <img style=" width:240px;
                        height:180px;" src="<?php echo get_theme_file_uri('/img/hotel1.jpg') ?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Hotel Clasic</h4>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                  <img  style=" width:240px;
                        height:180px;" src="<?php echo get_theme_file_uri('/img/hotel2.jpg') ?>" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Hotel Internacional</h4>
                            <div class="social">
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                      <div class="member">
                        <img  style=" width:240px;
                        height:180px;" src="<?php echo get_theme_file_uri('/img/hotel3.jpg') ?>" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Hotel Veranda</h4>
                          <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </section><!-- #clients -->
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h3>Na kontaktoni</h3>
          <p>Na kontaktoni duke plotsuar formen me poshte!</p>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Vore, Tirane, Albania</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">0672088801</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@dea.brauschalbania.com</a></p>
            </div>
          </div>
        </div>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Dergo Mesazhin</button></div>
          </form>
        </div>
      </div>
    </section><!-- #contact -->
  </main>
<?php get_footer() ?>