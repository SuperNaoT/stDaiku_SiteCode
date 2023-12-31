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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_saitohconstruction' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'vortex21' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sIF>^D<.h;Z2L{:bnPUs*7[~+d+yQ#%rd{9e}bgEOusby(WCQpdB$S;ds1nj=DiW' );
define( 'SECURE_AUTH_KEY',  '#+6(>afOe&w-cARsEIdf7r(-U-rZ`elH,~Cdh{5&VTjo]4.*qHL(fveUTXpNsJ9`' );
define( 'LOGGED_IN_KEY',    'Z+nDyd=Ndp%ce8v.G m> uvVj2btk8kRgi0[FAp:;fJ[qQ7Wg7t`9/:Fe-]yRtN_' );
define( 'NONCE_KEY',        't`s_3Zrs/I>U<;wZ5Z]H?4yGK,}sit%Ewk1QyZcgAFOFn(hx!|`*UdkeoQ Y83jj' );
define( 'AUTH_SALT',        'l|6z7m@!Sn(H-TK@zmHw:F6Q5csV/0PU$6vM5J-]Y{nz0[ y#4mdhMhd^Z[bcB?S' );
define( 'SECURE_AUTH_SALT', '>%?I<.;e(FY=e`uyWtSm`Jl%t/?QAdBp*0Yn}axzXqm<b,-Yeq}boO<}lwA!hA$O' );
define( 'LOGGED_IN_SALT',   'Px|#b [Mh7%>8l;!5K^|g(O^1<Nyz]e?y`A19k1bZ73I@3$ l3z+krybAu}ra{}#' );
define( 'NONCE_SALT',       'tL1B%Mze9.Uuo`C$pt6EURH^)=ES @Dx7DxS#P_Xb_5BcQn[&^G8:0j1u?JmzOP,' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
