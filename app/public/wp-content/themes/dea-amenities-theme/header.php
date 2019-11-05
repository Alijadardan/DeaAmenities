<!DOCTYPE html>
<html>
    <head>
      <?php wp_head(); ?>
    </head>
    <body>
   <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="/" class="scrollto">Dea Amenities</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        
      <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li><a href="<?php echo site_url('/about')?>">Rreth Nesh</a></li>
          <li><a href="<?php echo site_url('/services')?>">Sherbimet</a></li>
          <li class="menu-has-children"><a href="<?php echo site_url('/categories')?>">Kategorite    <i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <ul>
          <?php $categories = new WP_Query(array(
    'posts_per_page' => 4,
    'post_type' => 'category'
  )); 
  
  while($categories->have_posts()){
    $categories->the_post();?>  
         
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          
  <?php } ?>
  </ul>
          </li>
          <li><a href="<?php echo site_url('/products')?>">Te Gjitha Produktet</a></li><li><a href="<?php echo site_url('/contact')?>">Kontakto</a></li>
      
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <div>