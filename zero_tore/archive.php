

  <!-- headerの読込 -->
  <?php get_header(); ?>
<div id="wrapper">
  <div class="container">
      <article>
        <!-- 編集内容を表示 -->
        <div class="col text-center news_topicks">
          <h2>News</h2>
        </div>
        <?php if(have_posts()): while(have_posts()): the_post();?>
          <div class="row border_top py-3">
            <div class="col-md-2 ">
              <p><?php the_time('Y/m/d'); ?></p>
            </div>
            <div class="col-md-10">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        <?php endwhile; endif; ?>
        <!-- 編集内容を表示 -->
      </article>
  </div>
</div>
    <?php get_footer(); ?>
