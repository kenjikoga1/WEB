<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo(' name '); ?></title>
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <!-- 追加のCSSの読み込み -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <!-- 追加CSSが必要な場合 sample.cssを追加 -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/sample.css" rel="stylesheet">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
      <!-- font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <?php wp_head(); ?>
  </head>
  <body>
<!-- ナビゲーションバー -->
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark scrolling-navbar">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_the_logo_img_url(); ?>" style="height: 50px;" alt=""/></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <?php wp_nav_menu( array(
         'theme_location'=>'place_global',
                  'container'     =>'',
                  'menu_class'    =>'',
                  'items_wrap' => '%3$s',//<ul>を出力しない
                ));
          ?>
        </ul>
        <ul class="navbar-nav">
          <li>
               <a href="#"><i class="fa fa-facebook fa-1x"></i></a>
          </li>
          <li>
               <a href="#"><i class="fa fa-instagram fa-1x" style="width:5px;"></i></a>
          </li>
          <li>
               <a href="#"><i class="fa fa-twitter fa-1x"></i></a>
          </li>
        </ul>
      </div>
    </nav>
<!-- ナビゲーションバー -->
