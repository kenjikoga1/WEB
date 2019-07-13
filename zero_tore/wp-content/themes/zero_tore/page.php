

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
    <div class="col-md-6 text-secondary p-5 recomend">
      <div class="effect">
          <div>
          <h2 class="shop_title">プロフィール</h2>
            <p class="shop_sub_text">プロフィール内容</p>
          </div>
      </div>
    </div>
  </div>
<!-- プロフィール -->

<!-- tiktok title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary p-5 concept">
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
<div class="container-fluid">
  <div class="row">
    <ul class="slider">
      <li class="slider_box"><a href="リンク１"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salada.jpg"></a></li>
      <li class="slider_box"><a href="リンク１"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salada.jpg"></a></li>
      <li class="slider_box"><a href="リンク１"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salada.jpg"></a></li>
      <li class="slider_box"><a href="リンク１"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salada.jpg"></a></li>
      <li class="slider_box"><a href="リンク１"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/salada.jpg"></a></li>
    </ul>
  </div>
</div>
<!-- tiktok -->
<!-- note title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary p-5 concept">
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
$rss = fetch_feed( 'https://note.mu/daikawai/rss' ); // Feed URLを入れる
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
                <div class="cell medium-8">
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php echo $item->get_title();// タイトル  ?>
                  </a>

                  <span class="date">
                    <?php echo $item->get_date('Y.m.d');// 日付 ?>
                  </span>

                  <span class="desc">
                    <?php echo mb_substr(strip_tags($item->get_description()), 0, 50);// 抜粋記事の文字数を指定 ?> ...
                    <a href='<?php echo $item->get_permalink(); ?>' target="_blank">続きを読む</a>
                  </span>
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
<!-- ブログ title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary p-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">外部ブログ</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ブログ title -->
<!-- ブログコンテンツ -->
<?php
include_once( ABSPATH . WPINC . '/feed.php' );
$rss = fetch_feed( 'https://www.qualia.studio/feed/' ); // Feed URLを入れる
if ( !is_wp_error( $rss ) ) {
	$maxitems = $rss->get_item_quantity( 5 );
	$rss_items = $rss->get_items( 0, $maxitems );
}
?>

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
                <div class="cell medium-8">
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php echo $item->get_title();// タイトル  ?>
                  </a>

                  <span class="date">
                    <?php echo $item->get_date('Y.m.d');// 日付 ?>
                  </span>

                  <span class="desc">
                    <?php echo mb_substr(strip_tags($item->get_description()), 0, 50);// 抜粋記事の文字数を指定 ?> ...
                    <a href='<?php echo $item->get_permalink(); ?>' target="_blank">続きを読む</a>
                  </span>
                </div>
            </li>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<!-- ブログコンテンツ -->
<!-- youtube title -->
<div class="container-fluid ">
  <div class="row">
    <div class="col text-center text-secondary p-5 concept">
      <div class="effect">
          <div>
          <h2 class="interior_title">youtube</h2>
          <p class="interior_sub_text">更新日</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- youtube title -->
<!-- youtubeコンテンツ -->
<?php
include_once( ABSPATH . WPINC . '/feed.php' );
$rss = fetch_feed( 'https://www.youtube.com/feeds/videos.xml?channel_id=UCuwOrlOunCKz6-U4RG9Hv5g' ); // Feed URLを入れる
if ( !is_wp_error( $rss ) ) {
	$maxitems = $rss->get_item_quantity( 5 );
	$rss_items = $rss->get_items( 0, $maxitems );
}
?>
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
                <div class="cell medium-8">
                  <a href="<?php echo $item->get_permalink(); ?>">
                    <?php echo $item->get_title();// タイトル  ?>
                  </a>

                  <span class="date">
                    <?php echo $item->get_date('Y.m.d');// 日付 ?>
                  </span>

                  <span class="desc">
                    <?php echo mb_substr(strip_tags($item->get_description()), 0, 50);// 抜粋記事の文字数を指定 ?> ...
                    <a href='<?php echo $item->get_permalink(); ?>' target="_blank">続きを読む</a>
                  </span>
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
    <div class="col text-center text-secondary p-5 concept">
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
  <div class="container-fluid">
    <div class="row">
      <?php
        rewind_posts();
         $infoPosts = get_posts('numberposts=4');
         foreach($infoPosts as $post):
        ?>
        <?php the_post(); ?>
              <!-- コンテンツ -->
                <?php the_content(); ?>
          <?php endforeach; ?>
        </div>
    </div>
  </div>
</div>
<!-- tiktok -->


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
