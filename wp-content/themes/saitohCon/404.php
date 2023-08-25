<?php
/*
Template Name: お約束できる技術力
*/

  $GB_menuPos    = 404;
  $GB_page_flag  = 0;
  $GB_iconDspCtr = 0;

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

  <!--  -->
  <!-- *********************************** -->
  <!-- *********************************** -->
  <!--                                     -->
  <!-- ■ 当該ページ内コンテンツ記述セクション -->
  <!--                                     -->
  <!-- *********************************** -->
  <!-- *********************************** -->
  <div class="mainContents">

    <section id="section-1">

      <!--  -->
      <!-- サイト訪問者への、挨拶バナー -->
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageNotFound404_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>申し訳ございません。</h1>
        </div>


        <!-- 仕切り線表示 -->
        <!-- <div class="uline"></div> -->

        <div class="detailInfo" id="detailInfo">
          <div class="infoArea">
            <p class="infoTitle"><u>　■ <span>ご案内</span>　</u></p>
          </div>

          <!-- <div class="dline"></div> -->

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <!-- <h4 class="dspPC">ホームインスペクター（住宅診断士）とは？</h4> -->
                <h4>お探しのページは見つかりませんでした。</h4>
                <p>404 : Page not found.<br>
                   URL : <?php echo get_pagenum_link(); ?></p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
