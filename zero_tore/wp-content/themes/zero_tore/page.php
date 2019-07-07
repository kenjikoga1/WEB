
  <!-- headerの読込 -->
  <?php get_header(); ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/restraunt-top.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/restraunt-top.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/restraunt-top.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div id="wrapper2">
  <div class="container">
    <div class="effect">
      <div>
          <div class="card border-0 my-5" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recomend-img.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title menu1_title"><?php echo get_theme_mod('menu1_title'); ?></h4>
                  <p class="card-text menu1_sub_text"><?php echo get_theme_mod('menu1_sub_text'); ?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div><!-- card row -->
          </div><!-- card -->
          <div class="card border-0 my-5" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recomend-img.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title menu1_title"><?php echo get_theme_mod('menu1_title'); ?></h4>
                  <p class="card-text menu1_sub_text"><?php echo get_theme_mod('menu1_sub_text'); ?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div><!-- card row -->
          </div><!-- card -->
          <div class="card border-0 my-5" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recomend-img.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title menu1_title"><?php echo get_theme_mod('menu1_title'); ?></h4>
                  <p class="card-text menu1_sub_text"><?php echo get_theme_mod('menu1_sub_text'); ?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div><!-- card row -->
          </div><!-- card -->
          <div class="card border-0 my-5" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recomend-img.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title menu2_title"><?php echo get_theme_mod('menu2_title'); ?></h4>
                  <p class="card-text menu2_sub_text"><?php echo get_theme_mod('menu2_sub_text'); ?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div><!-- card row -->
          </div><!-- card -->
          <div class="card border-0 my-5" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recomend-img.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title menu3_title"><?php echo get_theme_mod('menu3_title'); ?></h4>
                  <p class="card-text menu3_sub_text"><?php echo get_theme_mod('menu3_sub_text'); ?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div><!-- card row -->
          </div><!-- card -->
        </div>
      </div><!-- effect -->
  </div><!-- container -->
</div>


    <?php get_footer(); ?>
