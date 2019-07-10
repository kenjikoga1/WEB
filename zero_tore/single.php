
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
<!-- 編集内容を表示 -->
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- 編集内容を表示 -->



    <?php get_footer(); ?>
  </body>
</html>
