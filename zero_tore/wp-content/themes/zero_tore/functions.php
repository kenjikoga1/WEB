<?php

//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);

// サムネイル表示
add_theme_support('post-thumbnails'); //サムネイル機能のオン
add_image_size('thumbside', 85, 85, true);



// ロゴ画像の設定方法　はじまり

function theme_customize($wp_customize){

	//画像
	$wp_customize->add_section( 'img_section', array(
		'title' => '画像',
		'priority' => 59,
		'description' => '画像をアップロードしてください。',
	));

		$wp_customize->add_setting( 'logo_img' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_img', array(
			'label' => 'ロゴ画像',
			'section' => 'img_section',
			'settings' => 'logo_img',
			'description' => 'ロゴ画像を設定してください。',
		)));

		$wp_customize->add_setting( 'recomend_img' ); //設定項目を追加
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'profile_img', array(
			'label' => 'おすすめ写真',
			'section' => 'img_section',
			'settings' => 'recomend_img',
			'description' => 'おすすめ写真を設定してください。',
		)));

    $wp_customize->add_section( 'myheader_section', array(
		'title' => 'ヘッダー・フッターの設定', //セクションのタイトル
		'priority' => 59, //セクションの位置
		'description' => '', //セクションの説明
	));

    // コピーライト
    	$wp_customize->add_setting( 'copyright_txt', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'copyright_txt', array(
    		'label' => 'コピーライト',
    		'section' => 'myheader_section',
    		'settings' => 'copyright_txt',
    		'type' => 'text',
    		'description' => 'フッターのコピーライトに表示するテキストを入力してください。入力がない場合はサイトタイトルが表示されます',
    	));

      //header_title
    	$wp_customize->add_setting( 'header_title', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'header_title', array(
    		'label' => 'ヘッダー見出し',
    		'section' => 'myheader_section',
    		'settings' => 'header_title',
    		'type' => 'text',
    		'description' => 'タイトルを設定します。',
    	));
      //header_sub_text
      $wp_customize->add_setting( 'header_sub_text', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'header_sub_text', array(
    		'label' => 'ヘッダー説明',
    		'section' => 'myheader_section',
    		'settings' => 'header_sub_text',
    		'type' => 'text',
    		'description' => 'ヘッダーの説明文を設定します。',
    	));
      //second_title
    	$wp_customize->add_setting( 'second_title', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'second_title', array(
    		'label' => 'サブ見出し',
    		'section' => 'myheader_section',
    		'settings' => 'second_title',
    		'type' => 'text',
    		'description' => 'タイトルを設定します。',
    	));
      //second_sub_text
      $wp_customize->add_setting( 'second_sub_text', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'second_sub_text', array(
    		'label' => 'サブ説明',
    		'section' => 'myheader_section',
    		'settings' => 'second_sub_text',
    		'type' => 'text',
    		'description' => 'ヘッダーの説明文を設定します。',
    	));

  //セクション文章
      $wp_customize->add_section( 'parts_section', array(
  		'title' => 'セクション文章', //セクションのタイトル
  		'priority' => 200, //セクションの位置
  		'description' => '', //セクションの説明
    	));
    //concept_title
      $wp_customize->add_setting( 'concept_title', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'concept_title', array(
        'label' => 'コンセプトタイトル',
        'section' => 'parts_section',
        'settings' => 'concept_title',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));
    //concept_sub_text
      $wp_customize->add_setting( 'concept_sub_text', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'concept_sub_text', array(
        'label' => 'コンセプト説明',
        'section' => 'parts_section',
        'settings' => 'concept_sub_text',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));


    //recomend_title
    	$wp_customize->add_setting( 'recomend_title', array(
    		'default' => '',
    		'transport' => 'postMessage',
    		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
    	));
    	$wp_customize->add_control( 'recomend_title', array(
    		'label' => 'オススメタイトル',
    		'section' => 'parts_section',
    		'settings' => 'recomend_title',
    		'type' => 'text',
    		'description' => 'オススメのタイトルを設定します。',
    	));
    //recomend_sub_text
      $wp_customize->add_setting( 'recomend_sub_text', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'recomend_sub_text', array(
        'label' => 'オススメ説明',
        'section' => 'parts_section',
        'settings' => 'recomend_sub_text',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));

    //menu1_title
      $wp_customize->add_setting( 'menu1_title', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu1_title', array(
        'label' => 'メニュー１タイトル',
        'section' => 'parts_section',
        'settings' => 'menu1_title',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));

    //menu1_sub_text
      $wp_customize->add_setting( 'menu1_sub_text', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu1_sub_text', array(
        'label' => 'メニュー１説明',
        'section' => 'parts_section',
        'settings' => 'menu1_sub_text',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));

    //menu2_title
      $wp_customize->add_setting( 'menu2_title', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu2_title', array(
        'label' => 'メニュー２タイトル',
        'section' => 'parts_section',
        'settings' => 'menu2_title',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));
    //menu2_sub_text
      $wp_customize->add_setting( 'menu2_sub_text', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu2_sub_text', array(
        'label' => 'メニュー２説明',
        'section' => 'parts_section',
        'settings' => 'menu2_sub_text',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));
    //menu3_title
      $wp_customize->add_setting( 'menu3_title', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu3_title', array(
        'label' => 'メニュー３タイトル',
        'section' => 'parts_section',
        'settings' => 'menu3_title',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));
    //menu3_sub_text
      $wp_customize->add_setting( 'menu3_sub_text', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      ));
      $wp_customize->add_control( 'menu3_sub_text', array(
        'label' => 'メニュー３説明',
        'section' => 'parts_section',
        'settings' => 'menu3_sub_text',
        'type' => 'text',
        'description' => 'オススメのタイトルを設定します。',
      ));


      //interior_title
        $wp_customize->add_setting( 'interior_title', array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
        ));
        $wp_customize->add_control( 'interior_title', array(
          'label' => 'INTERIORタイトル',
          'section' => 'parts_section',
          'settings' => 'interior_title',
          'type' => 'text',
          'description' => 'オススメのタイトルを設定します。',
        ));
      //interior_sub_text
        $wp_customize->add_setting( 'interior_sub_text', array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
        ));
        $wp_customize->add_control( 'interior_sub_text', array(
          'label' => 'INTERIOR説明',
          'section' => 'parts_section',
          'settings' => 'interior_sub_text',
          'type' => 'text',
          'description' => 'オススメのタイトルを設定します。',
        ));


      //shop_title
      	$wp_customize->add_setting( 'shop_title', array(
      		'default' => '',
      		'transport' => 'postMessage',
      		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      	));
      	$wp_customize->add_control( 'shop_title', array(
      		'label' => '店内タイトル',
      		'section' => 'parts_section',
      		'settings' => 'shop_title',
      		'type' => 'text',
      		'description' => 'オススメのタイトルを設定します。',
      	));
      //shop_sub_text
        $wp_customize->add_setting( 'shop_sub_text', array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
        ));
        $wp_customize->add_control( 'shop_sub_text', array(
          'label' => '店内説明',
          'section' => 'parts_section',
          'settings' => 'shop_sub_text',
          'type' => 'text',
          'description' => 'オススメのタイトルを設定します。',
        ));

      //news_title
      	$wp_customize->add_setting( 'news_title', array(
      		'default' => '',
      		'transport' => 'postMessage',
      		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
      	));
      	$wp_customize->add_control( 'news_title', array(
      		'label' => 'NEWSタイトル',
      		'section' => 'parts_section',
      		'settings' => 'news_title',
      		'type' => 'text',
      		'description' => 'オススメのタイトルを設定します。',
      	));
      //news_sub_text
        $wp_customize->add_setting( 'news_sub_text', array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
        ));
        $wp_customize->add_control( 'news_sub_text', array(
          'label' => 'NEWS説明',
          'section' => 'parts_section',
          'settings' => 'news_sub_text',
          'type' => 'text',
          'description' => 'オススメのタイトルを設定します。',
        ));
        //info_title
        	$wp_customize->add_setting( 'info_title', array(
        		'default' => '',
        		'transport' => 'postMessage',
        		'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
        	));
        	$wp_customize->add_control( 'info_title', array(
        		'label' => 'お問い合わせタイトル',
        		'section' => 'parts_section',
        		'settings' => 'info_title',
        		'type' => 'text',
        		'description' => 'オススメのタイトルを設定します。',
        	));
        //address_sub_text
          $wp_customize->add_setting( 'address_sub_text', array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field', //サニタイズしたテキストを返す
          ));
          $wp_customize->add_control( 'address_sub_text', array(
            'label' => 'アドレス説明',
            'section' => 'parts_section',
            'settings' => 'address_sub_text',
            'type' => 'text',
            'description' => 'オススメのタイトルを設定します。',
          ));


}
add_action( 'customize_register', 'theme_customize' );


//ヘッダーロゴ画像のURLを取得しメソッドにしてhtmlに入れる
// <div class="logo"><img src="<?php echo get_the_logo_img_url();...
//ロゴ画像
function get_the_logo_img_url(){
	return esc_url( get_theme_mod( 'logo_img' ) );
}
//おすすめ写真
function get_the_recomend_img_url(){
	return esc_url( get_theme_mod( 'recomend_img' ) );
}
//大見出し
// function get_the_recomend_toptitle_url(){
// 	return esc_url( get_theme_mod( 'top_title_txt' ) );
// }



// ロゴ画像の設定方法 終わり

//テーマカスタマイザーのライブプレビュー用のtheme-customizer.jsをエンキュー
//ライブプレビュー時に
if( is_customize_preview() ) {
	// 「customize_preview_init」にフック
	add_action( 'customize_preview_init', 'theme_customizer_live_preview_js' );
	// 関数の定義
	function theme_customizer_live_preview_js() {
		wp_enqueue_script(
			'my_theme_customizer_js',
			get_template_directory_uri() . '/js/theme-customizer.js', //theme-customizer.jsファイルへのパス
			array( 'jquery', 'customize-preview' ), // 「jquery」と「customize-preview」に依存
			'',
			true
		);
	}
}

//本文中のURLをはてなブログカードタグに変更する
function url_to_hatena_blog_card($the_content) {
  if ( is_singular() ) {//投稿ページもしくは固定ページのとき
    //1行にURLのみが期待されている行（URL）を全て$mに取得
    $res = preg_match_all('/^(<p>)?(<a.+?>)?https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+(<\/a>)?(<\/p>)?(<br ? \/>)?$/im', $the_content,$m);
    //マッチしたURL一つ一つをループしてカードを作成
    foreach ($m[0] as $match) {
      $url = strip_tags($match);//URL
      
//      //サイトの内部リンクは処理しない場合（Simplicity対策）
//      preg_match( '/https?:\/\/(.+?)\//i', admin_url(), $r );//自サイトのドメイン取得
//      if ( strpos( $url, $r[1] ) ) {
//        continue ;
//      }
      
      //取得した情報からブログカードのHTMLタグを作成
      $tag = '<iframe class="hatenablogcard" src="https://hatenablog-parts.com/embed?url='.$url.'" frameborder="0" scrolling="no"></iframe>';
      //本文中のURLをブログカードタグで置換
      $the_content = preg_replace('{'.preg_quote($match).'}', $tag , $the_content, 1);
    }
  }
  return $the_content;//置換後のコンテンツを返す
}
add_filter('the_content','url_to_hatena_blog_card');//本文表示をフック

