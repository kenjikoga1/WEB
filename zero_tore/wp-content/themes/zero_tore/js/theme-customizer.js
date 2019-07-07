( function( $ ) {
	// ヘッダーロゴ画像
	wp.customize( 'logo_url' , function( value ) { //セッティングID「logo_url」
 		value.bind( function( newval ) {
			$('#logo h1 img').attr('src', newval); //セレクタ#logo h1 imgのsrcを書きかえる
		} );
	} );

	// ヘッダータイトル
	wp.customize( 'header_title' , function( value ) {
 		value.bind( function( newval ) {
			$( '.header_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );

	// ヘッダー説明
	wp.customize( 'header_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.header_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );

	// コンセプトタイトル
	wp.customize( 'concept_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.concept_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// コンセプト説明
	wp.customize( 'concept_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.concept_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// セカンドタイトル
	wp.customize( 'second_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.second_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// セカンド説明
	wp.customize( 'second_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.second_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// オススメタイトル
	wp.customize( 'recomend_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.recomend_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// オススメ説明
	wp.customize( 'recomend_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.recomend_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ1タイトル
	wp.customize( 'menu1_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu1_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ1説明
	wp.customize( 'menu1_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu1_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ2タイトル
	wp.customize( 'menu2_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu2_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ2説明
	wp.customize( 'menu2_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu2_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ3タイトル
	wp.customize( 'menu3_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu3_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// ランチ3説明
	wp.customize( 'menu3_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.menu3_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// INTERIORタイトル
	wp.customize( 'interior_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.interior_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// INTERIOR説明
	wp.customize( 'interior_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.interior_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// 店内タイトル
	wp.customize( 'shop_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.shop_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// 店内説明
	wp.customize( 'shop_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.shop_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// Newsタイトル
	wp.customize( 'news_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.news_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// News説明
	wp.customize( 'news_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.news_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// infoタイトル
	wp.customize( 'info_title' , function( value ) {
		value.bind( function( newval ) {
			$( '.info_title' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );
	// アドレス説明
	wp.customize( 'address_sub_text' , function( value ) {
		value.bind( function( newval ) {
			$( '.address_sub_text' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );

	// コピーライト
	wp.customize( 'copyright_txt' , function( value ) {
 		value.bind( function( newval ) {
			$( '.copy_name' ).html( newval ); //セレクタ.copy_nameのhtmlを書きかえる
		} );
	} );

} )( jQuery );
