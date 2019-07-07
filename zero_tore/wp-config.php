<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'zero_tore' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b7ZLz5g=O%zbEK}a47>U#5]vWy(toAj/0>g2|%3rul3r_Fx^XL0WL%@5tOukB/HQ' );
define( 'SECURE_AUTH_KEY',  '*x:dK{/;,Wr[7Ec9dg;$1b>-^$)%9Pa2881dJxejx i?.Dr-},7iv!|K1W8~F@T0' );
define( 'LOGGED_IN_KEY',    ';mqU|9)iMtZhk91#F#vAMoM=Nv%EC^ZX@RIUJ+Gc55R;<2gf@KU>5qFG6X{vkH L' );
define( 'NONCE_KEY',        ' w.n8f`stR4IU_tZ@D[o0Nq7qld5/z0ztj5t._wzTj7F%-IH<Z_w|R#&(vC9]hG_' );
define( 'AUTH_SALT',        ':85+eAm?iKSG#xxK`hgXfg6Eh@qgo[,ARoCc2:n]hvQF7!q(j>:p+#z,?#>Qbabj' );
define( 'SECURE_AUTH_SALT', '!*`*#v1)wwqJ-EFo,=g8xL2g-qiM3)GA7J%3*;~7c2`]RTComO^U.xKq+=/*H J ' );
define( 'LOGGED_IN_SALT',   'A(]|OjYwHM+a, ybn7Y&)vqrK/ec}sS>J!^8 zHn)1x)<@k^]bf*D/Ij^52kuWK3' );
define( 'NONCE_SALT',       'Q+xi^nOd@M2sx?`hGQv+XbPkf*Lsz&>qV#khijPgg!*-Mhb_1]28[.NF:tryh9g)' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
