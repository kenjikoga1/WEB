

  <!-- headerの読込 -->
  <?php get_header(); ?>



<!-- headerイメージ -->

<div class="view full-page-intro py-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/action-building.jpg'); background-repeat: no-repeat; background-size: cover;">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 text-md-left">
          <div class="effect">
            <div>
              <i></i>
              <h1 class="display-4 header_title" style="font-size:30px;"><?php echo get_theme_mod('header_title'); ?></h1>
              <p class="mb-4 header_sub_text">
                <strong><?php echo get_theme_mod('header_sub_text'); ?></strong>
              </p>
            </div>
          </div><!-- effect -->
        </div>

        <!--Grid column-->
      </div>
      <!--Grid row-->
      <div class="col-md-6 white-text text-md-left recent_box">
        <p class="recent_news">新着情報</p>
        <?php
         $infoPosts = get_posts('numberposts=3');
         foreach($infoPosts as $post):
        ?>
        rewind_posts();
        <?php the_post(); ?>
        <p class="recent_news"><?php the_time('m/d'); ?> :<?php the_title(); ?>
        </p>

        <?php endforeach; ?>
      </div>
    </div>
    <!-- Content -->
</div>
<!-- headerイメージ -->
<!-- プロフィール -->
<div class="row">
    <div class="col-md-6 p-0 recomend">
      <div class="effect">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile.jpg" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-md-6 text-secondary py-5 recomend">
      <div class="effect">
          <div>
          <h2 class="shop_title">プロフィール</h2>
            <p class="shop_sub_text">プロフィール内容</p>
          </div>
      </div>
    </div>
  </div>
<!-- プロフィール -->
<!-- note title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary py-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">note</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- note title -->
<?php
include_once( ABSPATH . WPINC . '/feed.php' );
$rss = fetch_feed( 'https://note.mu/saori0802/rss' ); // Feed URLを入れる
if ( !is_wp_error( $rss ) ) {
	$maxitems = $rss->get_item_quantity( 5 );
	$rss_items = $rss->get_items( 0, $maxitems );
}
?>
<!-- noteコンテンツ2 -->
<div class="grid-x grid-margin-x">
  <div class="container-fluid">
    <div class="row">
      <ul class="slider">
        <?php if ( !empty( $maxitems ) ) : ?>
          <?php if ($maxitems == 0) echo '<div class="cell large-12">データがありませんでした.</div>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li class="slider_box">
              <!-- コンテンツ -->
                <div class="cell medium-4"><!-- 記事中の1枚目の画像を取得-->
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php 
                    $first_img = '';
                    if ( preg_match( '/<img.+?src=[\'"]([^\'"]+?)[\'"].*?>/msi',
                            $item->get_content(), $matches ) 
                      ) { $first_img = $matches[1]; } ?>
                    <?php if ( !empty( $first_img ) ) : ?>
                    <span class="thumbnail">
                              <img src="<?php echo esc_attr( $first_img ); ?>" alt="" />
                          </span>		
                    <?php endif;  ?>
                  </a>
                </div><!-- 記事中の1枚目の画像を取得終了-->
                <div class="cell medium-4 article_box">
                  <a href="<?php echo $item->get_permalink(); ?>">
                  <h4 class="titles"><?php echo $item->get_title();// タイトル  ?></h4>
                  </a>
                  <p class="desc subtext">
                    <?php echo mb_substr(strip_tags($item->get_description()), 0, 50);// 抜粋記事の文字数を指定 ?> ...
                    <a href='<?php echo $item->get_permalink(); ?>' target="_blank">続きを読む</a>
                  </p>
                  <p class="date date_day">
                    <?php echo $item->get_date('Y.m.d');// 日付 ?>
                  </p>
                </div>
            </li>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<!-- noteコンテンツ2 -->

<!-- youtube title -->
<div class="container-fluid youtube_back">
  <div class="row">
    <div class="col text-center text-secondary py-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">youtube</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>

<!-- youtube title -->
<!-- youtube main コンテンツ -->

    <div class="col">
      <div class="main_moview">
        <div class="youtube_back">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/2OocqI0CLpw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
</div>
<!-- youtube main コンテンツ -->


<?php
include_once( ABSPATH . WPINC . '/feed.php' );
$rss = fetch_feed( 'https://www.youtube.com/feeds/videos.xml?channel_id=UCU0LmwV-eKLSkEL68oIa1Gg' ); // Feed URLを入れる
if ( !is_wp_error( $rss ) ) {
	$maxitems = $rss->get_item_quantity( 5 );
	$rss_items = $rss->get_items( 0, $maxitems );
}
?>
<div class="grid-x grid-margin-x">
  <div class="container-fluid youtube_back">
    <div class="row">
      <ul class="slider">
        <?php if ( !empty( $maxitems ) ) : ?>
          <?php if ($maxitems == 0) echo '<div class="cell large-12">データがありませんでした.</div>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li class="slider_box">
              <!-- コンテンツ -->
                <div class="cell"><!-- 記事中の1枚目の画像を取得-->
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php 
                    $youtube_img = '';
                    $thumbnails = $item->get_enclosure()->thumbnails;
                    if(count($thumbnails) > 0){
                      $youtube_img = $thumbnails[0];
                    } ?>
                    <?php if ( !empty( $youtube_img ) ) : ?>
                      <span class="thumbnail">
                                <img src="<?php echo esc_attr( $youtube_img ); ?>" alt="" />
                      </span>		
                    <?php endif;  ?>
                  </a>
                </div><!-- 記事中の1枚目の画像を取得終了-->
                <div class="cell article_box">
                  <a href="<?php echo $item->get_permalink(); ?>">
                  <h4 class="titles"><?php echo $item->get_title();// タイトル  ?></h4>
                  </a>
                  <p class="date date_day">
                    <?php echo $item->get_date('Y.m.d');// 日付 ?>
                  </p>
                </div>
            </li>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<!-- youtubeコンテンツ -->
<!-- tiktok title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary py-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">tiktok</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tiktok title -->

<!-- tiktok -->
<div class="grid-x grid-margin-x">
  <div class="container">
    <div class="row text-center">
      <ul class="slider tiktok_contents">
      <?php
        $arg = array(
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC',
          'category_name' => 'tiktok'
        );
        rewind_posts();
         $infoPosts = get_posts($arg);
         foreach($infoPosts as $post):
        ?>
        <?php the_post(); ?>
            <li class="slider_box" style="border: none;">
              <!-- コンテンツ -->
                <?php the_content(); ?>
            </li>
          <?php endforeach; ?>
        </div>
      </ul>
    </div>
  </div>
</div>
<!-- tiktok -->

<!-- insta title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary py-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">insta</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- insta title -->

<!-- insta -->
<div class="grid-x grid-margin-x">
  <div class="container-fluid">
    <div class="row">
      <?php
      rewind_posts();
$page_id = 8;
$page = get_post( $page_id );
echo do_shortcode($page->post_content);
?>
    </div>
  </div>
</div>
<!-- insta -->


<!-- Contact -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 p-0 recomend">
      <div class="effect">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior.jpg" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-md-6 text-secondary pt-3 px-5 recomend">
      <form>
        <div class="form-group">
          <h3 class="info_title"><?php echo get_theme_mod('info_title'); ?></h3>
          <label for="exampleFormControlInput1">お名前</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="お名前をご入力ください">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">お電話番号</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="090-1111-1111">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
    </div>
  </div>
</div>





    <?php get_footer(); ?>
