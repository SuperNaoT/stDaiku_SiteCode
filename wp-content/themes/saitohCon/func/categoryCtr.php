<?php

  require get_theme_file_path( 'func/globalVariablesDef.php' );

  // 
  // *********************************************
  // *********************************************
  // ■ カテゴリ別、年月日・アーカイブリストの作成
  //【参考】「https://ateitexe.com/wordpress-accordion-archives/」
  // *********************************************
  // *********************************************
  // 指定年の投稿数を取得
  function get_year_archives_num( $year ) {
    global $wpdb;
    $cnt = $wpdb->get_var(
      "SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND DATE_FORMAT(post_date, '%Y') = '".$year."';"
    );
    return $cnt;
  }
  // 指定年月の投稿数を取得
  function get_month_archives_num( $year, $month ) {
    global $wpdb;
    $cnt = $wpdb->get_var(
      "SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND DATE_FORMAT(post_date, '%Y%m') = '".$year.str_pad($month, 2, 0, STR_PAD_LEFT)."';"
    );
    return $cnt;
  }
  // 一番古い記事の年を取得
  function get_oldest_year() {
    global $wpdb;
    $oldest_date = $wpdb->get_var(
      "SELECT post_date FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date ASC LIMIT 1;"
    );
    return idate('Y', strtotime($oldest_date) ); //投稿日の年だけ数値で取得
  }

  // 
  // *********************************************
  // *********************************************
  // ■ カテゴリ別、年月日・アーカイブリストの作成
  //【参考】「https://ateitexe.com/wordpress-category-archives/」
  // *********************************************
  // *********************************************
  // アーカイブをカテゴリで絞り込み
  // 【cat_slug】の説明
  // https://sample.com/?cat_slug=XXX
  // https://sample.com/2021/?cat_slug=XXX
  // https://sample.com/2021/01/?cat_slug=XXX
  // *********************************************
  function CatArchives( $query ) {

    // echo "<br> >>>>> Enter CatArchives() >>>>><br>";

    // 
    // WordPress 表示要素格納用データベース処理？
    if ( is_admin() || ! $query->is_main_query() )
      return;

    // 
    // アーカイブ或いは、ブログ投稿のインデックスリスト表示のページ（トップページ・固定ページ）
    if ( $query->is_archive() || $query->is_home() ) {

      // 
      // filter_input ( 型 , 変数名, フィルタ, オプション);
      $cat_slug = (string)filter_input(INPUT_GET, 'cat_slug'); //カテゴリスラッグを取得
      
      // echo "　　　?「\$cat_slug」☛【" . $cat_slug . "】<br>";   // for DEBUG !!!!!
      // echo "　　　?「\$cat_id」  ☛【" . get_category_by_slug( $cat_slug ) -> cat_ID . "】<br>";   // for DEBUG !!!!!

      $cat_id = get_category_by_slug( $cat_slug ) -> cat_ID; //スラッグからカテゴリIDを取得
      if ( $cat_id != 0 ) { //カテゴリIDがあれば
        $query->set( 'cat', $cat_id ); //指定カテゴリで絞り込む
        $query->set( 'orderby', 'date' ); //日付降順で並び替え
      }

      // echo " <<<<< Exit- CatArchives( 1 ) <<<<< <br><br>";
      return;
    }
    // echo " <<<<< Exit- CatArchives( 2 ) <<<<< <br><br>";
  }
  add_action( 'pre_get_posts', 'CatArchives' );

  // *********************************************
  // カテゴリ・年で絞った投稿数を取得
  // *********************************************
  function get_year_cat_archives_num( $cat_slug, $year ) {
    $cat_id = get_category_by_slug  ( $cat_slug )->cat_ID;
    global $wpdb;
    $cnt = $wpdb->get_var( $wpdb->prepare("
      SELECT count(DISTINCT ps.ID)
      FROM $wpdb->posts AS ps
      INNER JOIN $wpdb->term_relationships AS tm
      ON ps.ID = tm.object_id
      WHERE ps.post_status = 'publish'
      AND ps.post_type = 'post'
      AND tm.term_taxonomy_id = %d
      AND DATE_FORMAT(ps.post_date, '%Y') = '%s'
    " , $cat_id, $year ) );
    return $cnt;
  }

  // *********************************************
  // カテゴリ・年・月で絞った投稿数を取得
  // *********************************************
  function get_month_cat_archives_num( $cat_slug, $year, $month ) {
    $cat_id = get_category_by_slug( $cat_slug ) -> cat_ID;
    global $wpdb;
    $cnt = $wpdb->get_var( $wpdb->prepare("
      SELECT count(DISTINCT ps.ID)
      FROM $wpdb->posts AS ps
      INNER JOIN $wpdb->term_relationships AS tm
      ON ps.ID = tm.object_id
      WHERE ps.post_status = 'publish'
      AND ps.post_type = 'post'
      AND tm.term_taxonomy_id = %d
      AND DATE_FORMAT(ps.post_date, '%Y%m') = '%s'
    " , $cat_id, $year.str_pad($month, 2, 0, STR_PAD_LEFT) ) );
    return $cnt;
  }

  // *********************************************
  // 指定カテゴリの一番古い記事の投稿年を取得
  // *********************************************
  function   get_cat_oldest_year ( $cat_slug ) {
    // echo "<br> >>>>> Enter get_cat_oldest_year( " . $cat_slug . " )<br>";    // for DEBUG !!!!!
    $cat_id = get_category_by_slug( $cat_slug )->cat_ID;
    // echo "　　　? \$cat_id [ " . $cat_slug . " ]"."<br>";    // for DEBUG !!!!!
    global $wpdb;
    $oldest_date = $wpdb->get_var( $wpdb->prepare("
      SELECT ps.post_date
      FROM $wpdb->posts AS ps
      INNER JOIN $wpdb->term_relationships AS tm
      ON ps.ID = tm.object_id
      WHERE ps.post_status = 'publish'
      AND ps.post_type = 'post'
      AND tm.term_taxonomy_id = %d
      ORDER BY ps.post_date ASC LIMIT 1
    " , $cat_id ) );
    // echo "　　　? \$oldest_date [ " . $oldest_date . " ]"."<br>";    // for DEBUG !!!!!
    // echo " <<<<< Exit- get_cat_oldest_year( " . $oldest_date . " )<br><br>";   // for DEBUG !!!!!
    return  idate('Y', strtotime($oldest_date) );
  }
  // *********************************************
  // *********************************************
  // *********************************************

  function chkCategoryCount( $catName )  {
    $cateCount  = 0;
    $categories = get_categories(array('hide_empty' => false));// 記事数が0のカテゴリーも取得する
    foreach ($categories as $category):
      if ( $category->name == $catName )  {
        $cateCount = $category->category_count;// カテゴリーの記事数を取得
        // echo $catName . "の記事数は" . $cateCount . "です。";
        break;
      }
    endforeach;
    return $cateCount;
  }

  /****************************************
   カテゴリー一覧、ページネーション出力用関数
  *****************************************/
  function categoryPagination( $end_size = 1, $mid_size = 2, $prev_next = true )  {
    global $wp_query;
    $page_format = paginate_links (
      array(
        'current'   => max( 1, get_query_var( 'paged' ) ),
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array',
        'prev_text' => '《',//前へのリンク文言
        'next_text' => '》',//次へのリンク文言
        'end_size'  => $end_size,//初期値：１  両端のﾍﾟｰｼﾞﾘﾝｸの数
        'mid_size'  => $mid_size,//初期値：２  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
        'prev_next' => $prev_next,//初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
      )
    );
    $code = '';
    if( is_array( $page_format ) )  {
      $paged = get_query_var( 'paged' ) == 0 ? 1 : get_query_var( 'paged' );
      $code .= '<div class="pagination">'.PHP_EOL;
      $code .= '<ul>'.PHP_EOL;
      // $code .= '<ul class="post-link">'.PHP_EOL;
      foreach ( $page_format as $page ) {
        $code .= '<li>'.$page.'</li>'.PHP_EOL;
        // $code .= '<li class="extLink linkInternalDec">'.$page.'</li>'.PHP_EOL;
      }
      $code .= '</ul>'.PHP_EOL;
      $code .= '</div>'.PHP_EOL;
      $code .= '<br><div class="pagination-total">'.$paged.'/'.$wp_query->max_num_pages.' </div>'.PHP_EOL;
      $GB_currentPage = $paged;

      // echo $GB_currentPage;
    }
    wp_reset_query();
    return $code;
  }

?>