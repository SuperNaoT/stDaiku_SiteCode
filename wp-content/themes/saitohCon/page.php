<!-- トップページメニュー＃１ -->

<?php $GB_menuPos   = 1; ?>
<?php $GB_page_flag = 0; ?>

<!-- ヘッダー部の取込み -->
<?php get_header(); ?>

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
    <p>
      <br><br>
      　デフォルトページ表示【page.php】<br>
      <br><br>
    </p>
  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>