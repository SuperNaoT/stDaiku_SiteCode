
<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ 月別アーカイブリストクリック時、呼出されるコード -->
<!-- 　1. 【sidebar-archiveList.php】上リストクリック時、呼出される -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->

<?php
/*
Template Name: 投稿リスト表示ページ用基本テンプレート
*/

  $GB_menuPos    = 99;
  $GB_page_flag  = 0;
  $GB_iconDspCtr = 0;

  // 
  // カテゴリ情報があれば・・・
  if( isset( $_GET['cat'] ) )  { $cat = $_GET['cat']; }

  // カテゴリ名取得
  $categoryInfo    = get_category( $cat );
  $GB_categoryType = $categoryInfo->cat_name;
  $GB_currentCatID = $categoryInfo->cat_ID;

  // echo $categoryInfo->cat_name;

  if ( $categoryInfo->cat_name == $GB_catName_news )  {
    $GB_blogListTitle = "　■ 新着ニュース　";
    $GB_menuPos       = 10;
  } else if ( $categoryInfo->cat_name == $GB_catName_newBuild )  {
    $GB_blogListTitle = "　■ 住宅・新築/設計　";
    $GB_menuPos      = 11;
    // $GB_countOfPosts = 5;
  } else if ( $categoryInfo->cat_name == $GB_catName_reform )  {
    $GB_blogListTitle = "　■ 住宅リフォーム　";
    $GB_menuPos      = 12;
    // $GB_countOfPosts = 5;
  } else if ( $categoryInfo->cat_name == $GB_catName_houseIns )  {
    $GB_blogListTitle = "　■ お家の健康診断　";
    $GB_menuPos      = 13;
    // $GB_countOfPosts = 5;
  } else if ( $categoryInfo->cat_name == $GB_catName_blog )  {
    $GB_blogListTitle = "　■ ブログ日記　";
    $GB_menuPos      = 14;
    // $GB_countOfPosts = 5;
  } else if ( $categoryInfo->cat_name == 'howto' )  {
    $GB_blogListTitle = "　■ 使い方　";
    $GB_menuPos      = 15;
    // $GB_countOfPosts = 3;
  }

  // ヘッダー部の取込み
  get_header();
?>

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- ★ スクロール時表示・非表示する、固定位置表示ナビゲーションメニューの制御関連 -->
  <!--    1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　 -->
  <!--    2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。 -->
  <!-- **************************************************** -->
  <div id="pageFlag" title="0"></div>
  <!-- **************************************************** -->
  <div class="mainContents">
    <!-- <p>
      <br><br>
      　個別投稿記事表示ページ【archive.php】<br>
      <br><br>
    </p> -->

    <!--  -->
    <!-- ************************************************************ -->
    <!-- ************************************************************ -->
    <?php include( get_template_directory() . "/archiveListDspCtr.php" ); ?>
    <!-- ************************************************************ -->
    <!-- ************************************************************ -->

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
