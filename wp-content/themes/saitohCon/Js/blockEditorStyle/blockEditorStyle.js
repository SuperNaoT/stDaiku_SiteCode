// 
//【JavaScript】 
// ■ WordPress 投稿画面・ブロック要素指定スタイル登録
// 
// 【書式】
//  wp.blocks.registerBlockStyle( 'ブロック名', {
//   	name: 'ブロックに付与するクラス',
// 	  label: 'ラベル名'
//  });
// 
// // 【ブロック名一覧】
// /*
//  * カテゴリー：一般ブロック
//  */
//  'core/paragraph',           // 段落
//  'core/heading',             // 見出し
//  'core/image',               // 画像
//  'core/quote',               // 引用
//  'core/gallery',             // ギャラリー
//  'core/list',                // リスト
//  'core/audio',               // 音声
//  'core/cover',               // カバー
//  'core/file',                // ファイル
//  'core/video',               // 動画
 
 
//  /**
//   * カテゴリー：フォーマット
//   */
//  'core/code',                // ソースコード
//  'core/freeform',            // クラシック
//  'core/html',                // カスタムHTML
//  'core/preformatted',        // 整形済み
//  'core/pullquote',           // プルクオート
//  'core/table',               // テーブル
//  'core/verse',               // 詩
 
 
//  /**
//   * カテゴリー：レイアウト要素
//   */
//  'core/button',              // ボタン
//  'core/columns',             // カラム
//  'core/media-text',          // メディアと文章
//  'core/more',                // 続きを読む
//  'core/nextpage',            // 改ページ
//  'core/separator',           // 区切り
//  'core/spacer',              // スペーサー
 
 
//  /**
//   * カテゴリー：ウィジェット
//   */
//  'core/shortcode',           // ショートコード
//  'core/archives',            // アーカイブ
//  'core/categories',          // カテゴリー
//  'core/latest-comments',     // 最新のコメント
//  'core/latest-posts',        // 最新の記事
 
 
//  /**
//   * カテゴリー：埋め込み
//   */
//  'core/embed',               // 埋め込み
//  'core-embed/twitter',       // Twitter
//  'core-embed/youtube',       // YouTube
//  'core-embed/facebook',      // Facebook
//  'core-embed/instagram',     // Instagram
//  'core-embed/wordpress',     // WordPress
//  'core-embed/soundcloud',    // SoundCloud
//  'core-embed/spotify',       // Spotify
//  'core-embed/flickr',        // Flickr
//  'core-embed/vimeo',         // Viemo
//  'core-embed/animoto',       // Animoto
//  'core-embed/cloudup',       // Cloudup
//  'core-embed/collegehumor',  // CollegeHumor
//  'core-embed/dailymotion',   // Dailymotion
//  'core-embed/funnyordie',    // Funny or Die
//  'core-embed/hulu',          // Hulu
//  'core-embed/imgur',         // Imgur
//  'core-embed/issuu',         // Issuu
//  'core-embed/kickstarter',   // Kickstarter
//  'core-embed/meetup-com',    // Meetup.com
//  'core-embed/mixcloud',      // Mixcloud
//  'core-embed/photobucket',   // Photobucket
//  'core-embed/polldaddy',     // Polldaddy
//  'core-embed/reddit',        // Reddit
//  'core-embed/reverbnation',  // ReverbNation
//  'core-embed/screencast',    // Screencast
//  'core-embed/scribd',        // Scribd
//  'core-embed/slideshare',    // Slideshare
//  'core-embed/smugmug',       // SmugMug
//  'core-embed/speaker-deck',  // Speaker Deck
//  'core-embed/ted',           // TED
//  'core-embed/tumblr',        // Tumblr
//  'core-embed/videopress',    // VideoPress
//  'core-embed/wordpress-tv',  // WordPress.tv
// 
// 【参考】「https://wemo.tech/2166」
// *******************************************************
// *******************************************************
// *******************************************************
// *******************************************************

(function () {

  // console.log( "\n >>>>> Enter blockEditorStyle.js >>>>>" );

	// 背景黒の段落スタイル
	wp.blocks.registerBlockStyle("core/paragraph", {
		name: "h p-bg-black",
		label: "背景黒の段落",
	});

	// 構文見出しタイトル
	wp.blocks.registerBlockStyle("core/heading", {
		// name: "h h4-syntax",
		name: "h heading-primary-blue",
		label: "構文タイトル",
	});

  // console.log( " <<<<< Exit- blockEditorStyle.js <<<<< \n" );

})();