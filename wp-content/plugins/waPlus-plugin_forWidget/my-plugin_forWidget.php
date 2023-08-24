<?php 
/*
 * Plugin Name: 和Plus-Plugin for Widget
 * Plugin URI: https://www.waplus-jpn.co.jp
 * Version: 0.1
 * Description:「株式会社 和Plus」開発プラグイン：「WordPress」ウィジェットに関する勉強に利用しています！
 * Author: N.Tadokoro
 * Author URI: https://www.waplus-jpn.co.jp
 */

 /*
  * ********************************************************* 
  * ********************************************************* 
	* ■ プラグインにて登録するウィジェット用CSS定義の取込み
	*   【参考】「https://www.rough-and-cheap.jp/wordpress/wordpress_load_style/」
  * ********************************************************* 
  * ********************************************************* 
	*/
	function regist_widget_styles() {
		$plugin_url = plugin_dir_url( __FILE__ );

		// ★【$plugin_url】
		// ☛【http://udemy.localhost/03)_WordPress_Widget/wordpress/wp-content/plugins/my-plugin_forWidget/】

		wp_enqueue_style('postListWithThumb_style', $plugin_url . 'assets/scss/widgets/css/postListWithThumb.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'regist_widget_styles' );

	// 
	// *******************************************************
	// *******************************************************
	// ★【Udemy】「113．【ウィジェット機能】でフッターを変更しよう！」
	// *******************************************************
	// *******************************************************
	// 
	function ntad_widgets_init(){
		register_sidebar(
			array(
				'name'        => esc_html__( '田所・独自作成サイドバー', 'myStudy_WordPress-Widget' ), /* ←追加したいウィジェットの名前 */
				'description' => esc_html__( '独自作成サイドバーウィジェット', 'myStudy_WordPress-Widget' ),  /* ←追加したいウィジェットの概要 */
				'id'            => 'sidebar-ntad',                 /* ←追加したいウィジェットのID */
				'before_widget' => '<div>',                        /* ←追加したいウィジェットを囲う開始タグ */
				'after_widget'  => '</div>',                       /* ←追加したいウィジェットを囲う閉じタグ */
				'before_title'  => '<h3>',                         /* ←追加したいウィジェットのタイトルを囲う開始タグ */
				'after_title'   => '</h3>'                         /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( '田所・独自作成フッター【LEFT】', 'myStudy_WordPress-Widget' ),
				'description'   => esc_html__( '独自作成フッターウィジェット・左', 'myStudy_WordPress-Widget' ),
				'id'            => 'footer-ntad-left',
				'before_widget' => '<div class="col footer-left">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2',
				'after_title'   => '</h2>',
			),
		);
		register_sidebar(
			array(
				'name'          => esc_html__( '田所・独自作成フッター【CENTER】', 'myStudy_WordPress-Widget' ),
				'description'   => esc_html__( '独自作成フッターウィジェット・中', 'myStudy_WordPress-Widget' ),
				'id'            => 'footer-ntad-center',
				'before_widget' => '<div class="col footer-center">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2',
				'after_title'   => '</h2>',
			),
		);
		register_sidebar(
			array(
				'name'          => esc_html__( '田所・独自作成フッター【RIGHT】', 'myStudy_WordPress-Widget' ),
				'description'   => esc_html__( '独自作成フッターウィジェット・右', 'myStudy_WordPress-Widget' ),
				'id'            => 'footer-ntad-right',
				'before_widget' => '<div class="col footer-right">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2',
				'after_title'   => '</h2>',
			),
		);
	}
	add_action('widgets_init', 'ntad_widgets_init');

	/**
	 * **********************************************************
	 * **********************************************************
	 * 
	 * ■ ウィジェットに登録する【ブロック・ウィジェット】を実装
	 * 	 ここでは「PostListWithThumb_Widget」とする  
	 * 
	 * ★ 当ウィジェットは、
	 * 		投稿一覧タイルにサムネイル画像を含め表示します。
	 * 
	 * **********************************************************
	 * **********************************************************
	 * 注意）クラス名は先頭が大文字
 	 */

	class PostListWithThumb_Widget extends WP_Widget {
	 /*
		* 初期化処理・コンストラクタ
		*/
		public function __construct() {
	
			// ウィジェットの最低限の初期値
			$widget_options = array(
				'classname'                     => 'widget-PostListWithThumb',
				'description'                   => '自作：画像付き記事一覧',
				'customize_selective_refresh'   => true,
			);
			// 操作用の設定値
			$control_options = array();
	
			// 親クラスのコンストラクタをコール
			// 親コンストラクタの設定
			// WP_Widget::__construct() は、葉推奨しない！とＷＥＢに沢山情報がある！
			// parent::__construct() この記述にすると、エラーが発生する。　何故？
			// 例）parent::__construct( $id_base, $name, $widget_options, $control_options )
			WP_Widget::__construct( 'widget-PostListWithThumb', '自作：画像付き記事一覧', $widget_options, $control_options );
		}

		/**
		 * **********************************************************
		 * 管理画面のウィジェット設定フォーム
		 *
		 * @param array $instance   現在のオプション値が渡される。
		 * **********************************************************
		 */
		public function form( $instance ) {

		 /*
			* オプション項目毎にインスタンスを生成する
			*/

			$title     = isset( $instance['title'    ] ) ? esc_attr( $instance['title'    ] ) : '';
			$limit     = isset( $instance['limit'    ] ) ?   absint( $instance['limit'    ] ) :  5;
			$thumbSize = isset( $instance['thumbSize'] ) ?   absint( $instance['thumbSize'] ) : 55;
		?>

		<!--  -->
		<!-- 個別インスタンスは「ラベル・入力値：<input>」のセットにて構成される -->
		<!--  -->
			<p>
				<?php /* タイトル */ ?>
				<label for  = "<?php echo $this->get_field_id( 'title' ); ?>">タイトル</label>
				<input type = "text"
						class = "widefat"
						id    = "<?php echo $this->get_field_id  ( 'title' ); ?>"
						name  = "<?php echo $this->get_field_name( 'title' ); ?>"
						value = "<?php echo $title; ?>" />
			</p>
			<p>
				<?php /* 表示する投稿数 */ ?>
				<label for  = "<?php echo $this->get_field_id( 'limit' ); ?>">表示件数</label>
				<input type = "number"
						class = "tiny-text"
						id    = "<?php echo $this->get_field_id  ( 'limit' ); ?>"
						name  = "<?php echo $this->get_field_name( 'limit' ); ?>"
						value = "<?php echo $limit; ?>"
						min = "1" max = "15" step = "1" size = "3" required />
			</p>
			<p>
				<?php /* サムネイルサイズPX数指定 */ ?>
				<label for  = "<?php echo $this->get_field_id( 'thumbSize' ); ?>">サムネイル画像サイズ（正方形）</label>
				<input type = "number"
						class = "tiny-text"
						id    = "<?php echo $this->get_field_id  ( 'thumbSize' ); ?>"
						name  = "<?php echo $this->get_field_name( 'thumbSize' ); ?>"
						value = "<?php echo $thumbSize; ?>"
						min = "50" max = "150" step = "5" size = "3" required />
			</p>
			<?php
		}

		/**
		 * 
		 * **********************************************************
		 * ウィジェットオプションのデータ検証/無害化
		 *
		 * @param array $new_instance   新しいオプション値
		 * @param array $old_instance   以前のオプション値
		 *
		 * @return array データ検証/無害化した値を返す
		 * **********************************************************
		 */
		public function update( $new_instance, $old_instance ) {
			// 一時的に以前のオプションを別変数に退避
			$instance = $old_instance;

			// タイトル値を無害化（サニタイズ）
			$instance['title'] = sanitize_text_field( $new_instance['title'] );

			// 投稿数の検証
			$instance['limit'] = is_numeric( $new_instance['limit'] ) ? $new_instance['limit'] : 5;

			// サムネイル画像サイズの検証
			$instance['thumbSize'] = is_numeric( $new_instance['thumbSize'] ) ? $new_instance['thumbSize'] : 5;

			return $instance;
		}

		/**
		 * **********************************************************
		 * ウィジェットの内容をWebページに出力（HTML表示）
		 *
		 * @param array $args       register_sidebar()で設定したウィジェットの開始/終了タグ、タイトルの開始/終了タグなどが渡される。
		 * @param array $instance   データベースの保存値。
		 * **********************************************************
		 */
		public function widget( $args, $instance ) {

			// 
			// ■ テーマカスタマイザー画面で設定したオプション値の取得
			// ****************************************************
			// インスタンスからウィジェットのオプション「タイトル(title)」を取得
			$title = empty( $instance['title'] ) ? '' : $instance['title'];
			// インスタンスからウィジェットのオプション「表示する投稿数(limit)」を取得
			$limit = ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 5;
			// インスタンスからウィジェットのオプション「サムネイル画像サイズ(thumbSize)」を取得
			$thumbSize = ( ! empty( $instance['thumbSize'] ) ) ? absint( $instance['thumbSize'] ) : 5;

			// 
			// ■ オプション値の適正化
			// ****************************************************
			// ゼロ（整数）を認めない
			if     ( !$limit          ){ $limit     = 5; }
			if     ( $thumbSize <  50 ){ $thumbSize =  50; }
			else if( $thumbSize > 150 ){ $thumbSize = 150; }

			// echo $thumbSize;

			// 
			// ■ ウィジェット登録時設定したウィジェット開始タグの取得
			// ****************************************************
			// ウィジェット開始タグ（<div>など）
			echo $args['before_widget'];
			if ( ! empty( $title ) ) {
					// タイトルの値をタイトル開始/終了タグで囲んで出力
					//<h4>最近の投稿</h4>
					echo $args['before_title'] . $title . $args['after_title'];
			}

			// 
			// ■ WordPress クエリ-にて、ＤＢから該当投稿を取得する
			// ****************************************************
			// queryオブジェクトの作成
			$query_args = array(
				'posts_per_page'      => $limit,
				'post_type'           => 'post',
				'ignore_sticky_posts' => 1,
			);
			$my_query = new WP_Query( $query_args );

			// 
			// ■ WordPress クエリ-にてＤＢから取得した投稿を表示する
			// ****************************************************
			/* 出力するHTML */
			if( $my_query -> have_posts() ): ?>
				<div class="recent-posts">
					<?php while( $my_query -> have_posts() ): $my_query -> the_post(); ?>
					<!--  -->
					<!-- ■ 投稿記事１件に関するスタイルを設定 -->
					<!-- <article style= "border: 1px solid #333; border-radius: 5px; margin-top: 5px; background-color: rgba( 255, 250, 205, 1 )"> -->
					<article class="eachTileBorderStyle">
						<!--  -->
						<!-- １．サムネイル画像と、記事タイトルを横並びにする（CSS適用）-->
						<!-- <a class="flex-container" href="<?php the_permalink(); ?>" style="display:flex; align-items:center;"> -->
						<a class="flex-container eachTileInsideStyle" href="<?php the_permalink(); ?>">
							<!-- <figure style="margin-left: 15px;"> -->
							<figure class="thumbPos">
								<?php
									if( has_post_thumbnail() ):
										// サムネイル画像サイズを縦横「55px」に設定（CSS適用）
										the_post_thumbnail( array($thumbSize,$thumbSize) );
									else: ?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/noImage.png" style="width: <?php echo $thumbSize;?>px;" />
								<?php endif; ?>
							</figure>
							<!--  -->
							<!-- タイトル表示位置を表示領域の中心に設定（CSS適用） -->
							<!-- <p style="margin: auto;"><?php the_title(); ?></p> -->
							<p class="titlePos"><?php the_title(); ?></p>
						</a>
					</article>
					<?php endwhile; ?>
				</div>
			<?php endif;

			wp_reset_postdata();
			echo $args['after_widget'];
		}
	}

	// 
	// ************************************************************
	// ************************************************************
	// ■ WordPress ウィジェット・ブロック新規登録の勉強の為のクラス
	// 
	// 	 ウィジェット・ブロックを新規にて作成する場合、
	//   下記の４つの関数を持つクラスを定義し、目的の機能を実装していく。
	// 
	// ************************************************************
	// ************************************************************
	//  
	class PostListWithThumb_Widget_WRK extends WP_Widget {
		/*****************************************************
		 * ■ ブロックの「名前他」初期設定を行う・コンストラクタ
		 */
		public function __construct() {}

		/*****************************************************
		 * ■ ブロックの「管理画面上」でのオプション設定画面形状登録関数
		 */
		public function form( $instance ) {}

		/*****************************************************
		 * ■ ブロックの「管理画面上」入力オプション設定内容のデータ検証/無害化
		 */
		public function update( $new_instance, $old_instance ) {}

		/*****************************************************
		 * ■ ブロックの内容を「WEBページ」に出力（HTML実装）関数
		 */
		public function widget( $args, $instance ) {}
	}

	//
	// ■ WordPress ダッシュボードで表示を可能にする登録
	//  
	add_action( 'widgets_init', function()  {
		// ウィジェットのクラス名を登録
		register_widget( 'PostListWithThumb_Widget' );
	});

	/**
	 * **********************************************************
	 * **********************************************************
	 * 
	 * ■ ウィジェットに登録する【ブロック・ウィジェット】を実装
	 * 	 ここでは「VoiceWidget」とする  
	 * 
	 * ★ 当ウィジェットは、
	 * 		投稿一覧タイルにサムネイル画像を含め表示します。
	 * 
	 * **********************************************************
	 * **********************************************************
	 * 注意）クラス名は先頭が大文字
 	 */
	class VoiceWidget extends WP_Widget{
 
    //コンストラクタ
    function __construct(){

    // 親コンストラクタの設定
		// WP_Widget::__construct() は、葉推奨しない！とＷＥＢに沢山情報がある！
		// parent::__construct() この記述にすると、エラーが発生する。　何故？
			WP_Widget::__construct(
					// ウィジェットID 
      'test_widget_id01',
      // ウィジェット名
      'ランダムボイス',        
      // ウィジェットの概要
            array('description' => 'ランダムにセリフを出力するウィジェットです。')
        );
    }
 
    /**
   	 * ウィジェットの表示用関数
     *-------------------------------------------------------
  	 * @param array $args      [register_sidebar]で設定した
  	 *                         「before_title, after_title, 
  	 *                          before_widget, after_widget」が入る
     * @param array $instance  Widgetの設定項目
  	 * ------------------------------------------------------
  	 */
    public function widget($args, $instance){
 
    // 乱数取得
    $randomNum = rand(0, 3);
    // 文字列を入れる変数を用意
    $word = "けつばん";
 
    // 乱数によって文字列を変更する
    if ($randomNum === 0) {
      $word = "ゼロ番目だよ";
    } elseif  ($randomNum === 1) {
      $word = "イチ番目だよ";
    } elseif  ($randomNum === 2) {
      $word = "ニ番目だよ";
    }
 
    // ウィジェット内容の前に出力
    echo $args['before_widget'];
 
    // ウィジェットの内容出力
    echo "<h1>【ランダムボイス】</h1>";
 
		echo 				"<div> ■■■■■■■■■■■■■■■■■■■■■■■■■ <br>";
 		echo "　★ 読込まれる度にランダムに順番を表示します・・・";
		echo 				" ■■■■■■■■■■■■■■■■■■■■■■■■■ <br></div>";
    echo "<p>　☛☛☛☛☛　【 ". $word . " 】</p>";
		
    // ウィジェット内容の後に出力
        echo $args['after_widget'];
    }
	}
 
	//
	// ■ WordPress ダッシュボードで表示を可能にする登録
	//  
	add_action( 'widgets_init', function()  {
		// ウィジェットのクラス名を登録
		register_widget('VoiceWidget'); 
	});



	// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// 　★ ユーティリティ機能を下記に取り纏めて記述（当WordPress学習とは関係なし）
	// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

	// 
	// *******************************************************
	// *******************************************************
	// ★ 「73．【アクションフック】とは？」
	// 【add_action( 'get_header', function( $at/ts ){・・・})】
	// 《引数》
	// 		１．タイミング「get_header:Header テンプレートファイルが読み込まれる前に起動」
	// 		２．処理関数
	// 
	// ■ テンプレートタグ「get_header」が発呼するタイミングで呼出され、
	//   「指定文字列」をエコーバックするアクションフック
	// 
	// ■ テンプレートタグ「get_footer」が発呼するタイミングで呼出され、
	//   「指定文字列」をエコーバックするアクションフック
	// 
	// *******************************************************
	// *******************************************************
  add_action( 'get_header', function() {
    echo "<br>　！アクションフックが動作しました【get_header】<br><br>";
  } );
	
	// 
	// ■ テンプレートタグ「get_footer」が発呼するタイミングで呼出され、
	//   「指定文字列」をエコーバックするアクションフック
	// 
  add_action( 'get_footer', function() {
		echo "<br>　■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■<br>";
										global $template;		 // テンプレートファイルのパスを取得
		$temp_name = basename( $template );  // パスの最後の名前（ファイル名）を取得
		if ( $temp_name == 'page-ntadsidebar.php' )  {
			echo "　！アクションフックが動作しました【get_footer( 'footer-nTAD.php ' )】<br>";
		} else  {
			echo "　！アクションフックが動作しました【get_footer】<br>";
		}
		// echo '　現在使用しているテンプレートファイル：'.$temp_name .'<br>'; // ファイル名の表示
		echo "　■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■<br><br>";
  } );
	
	// 
	// *******************************************************
	// *******************************************************
	// ★ 「73．【フィルターフック】とは？」
	// 【add_filter( 'the_title', function( $title ){・・・ return( $title );})】
	// 《引数》
	// 		１．タイミング「the_title テンプレートファイルが発呼されるタイミングに起動」
	// 		２．処理関数
	// 　　　《引数》$title (i)：テンプレートファイルからの値
	// 
	// ■ テンプレートタグ「the_title」が発呼するタイミングで呼出され、
	//  「タイトル文字列」の先頭に「■」を付けて返すフィルターフック
	// 
	// *******************************************************
	// *******************************************************
	add_filter( 'the_title', function( $title )  {
		return( '■' . $title );
	});

