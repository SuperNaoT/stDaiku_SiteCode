<?php
/*
Template Name: 齋藤建築ギャラリー
*/

  $GB_menuPos    = 6;
  $GB_page_flag  = 0;
  $GB_iconDspCtr = 0;

  $setFlg = 0;

  // ヘッダー部の取込み
  get_header();


  // 
  // ギャラリー表示用画像設定ファイルの取込み
  include( get_template_directory() . "/contents/com/galleryStyle.php" );

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
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageStArcGallery_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>実績・ギャラリー</h1>
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo" id="detailInfo">

          <h2>■ 表示カテゴリー</h2>

          <ul class="sort-btn">
            <li class="btnchangeline sdw-btn eachBtn all active">全て</li>
            <li class="btnchangeline sdw-btn eachBtn blue" >住宅・新築/設計</li>
            <li class="btnchangeline sdw-btn eachBtn red"  >住宅リフォーム</li>
            <li class="btnchangeline sdw-btn eachBtn green">お家の健康診断</li>
          </ul>

          <!-- お顔が見える様に、スタイル設定 -->
          <div class="dline"></div>

          <!-- ****************************************************** -->
          <!-- ****************************************************** -->
          <!-- ****************************************************** -->

          <div class="grid">
            <?php
              // echo " >>>>> subPage-galleryControl [ \$imageMaxCount ] [ " . $imageMaxCount . " ]" ;   // for DEBUG !!!
              // echo " >>>>> subPage-galleryControl [ \$redMaxCount   ] [ " . $redMaxCount . " ]" ;   // for DEBUG !!!

              $endJ = $imageMaxCount > $galleryStyleCount ? $imageMaxCount*3 : $galleryStyleCount*3;

              // echo " > \$endJ [ ".$endJ." ]<br>";

              for( $i =0, $jIdx=0,
                   $rC=0, $bC=0, $gC=0 ; $i<$imageMaxCount ; $i++ ) {
                  
                // 
                // ページ内ランダム配置スタイルマッチングループ
                for( $j=$jIdx ; $j<$endJ ; $j++ )  {
                  $setFlg = 0;
                  // ***************************************************************
                  // ***************************************************************
                  // 
                  // 画像ファイル名生成
                  switch( $galleryBoxColor[$j%$galleryStyleCount] ) {
                    case "red":
                      // $rP = 1;
                      if ( $rC<$redMaxCount )  {
                        $imgFileName = $redImgFName[$rC];
                                                    $rC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      

                      //   echo "<br> (1) RED \$rC ☛ [ ".$rC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " RED through!!! \$j ☛ [ ".$j." ]";
                      }
                      break;
                    case "blue":
                      // $bP = 1;
                      if ( $bC<$blueMaxCount )  {
                        $imgFileName = $blueImgFName[$bC];
                                                    $bC++;
                                                    $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      //   echo "<br> (1) 　　BLUE \$bC ☛ [ ".$bC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " BLUE through!!! \$j ☛ [ ".$j." ]";
                      }
                      break;
                    case "green";
                      // $gP = 1;
                      if ( $gC<$greenMaxCount )  {
                        $imgFileName = $greenImgFName[$gC];
                                                      $gC++;
                                                      $setFlg = 1;

                        $gBC = $galleryBoxColor[$j%$galleryStyleCount];
                        $gBS = $galleryBoxStyle[$j%$galleryStyleCount];      
                      //   echo "<br> (1) 　　　　GREEN \$gC ☛ [ ".$gC." ] \$j ☛ [ ".$j." ]<br>";
                      // } else  {
                      //   echo " GREEN through!!! \$j ☛ [ ".$j." ]";
                      }
                    default:
                  }

                  // ***************************************************************
                  // ***************************************************************
                  $jIdx = $j + 1;
                  if ( $setFlg == 1 )  {
                    // echo " > \$jIdx[ ".$jIdx." ]<br>";
                    break;
                  }
                }         // Inner For statement
            ?>

            <!-- <?php // if ( $setFlg == 1 ): echo " \$gBC [ ".$gBC. " ]<br>"; ?> -->
            <!-- <?php // echo " Under Construction! \$gBC[ ". $gBC." ] <br>"; ?> -->
            <?php if ( $setFlg == 1 ): ?>
                <div class="item all <?php echo $gBC; echo $gBS; ?>">
                  <a data-lightbox= "<?php echo $gBC ?>" href="<?php echo esc_url( $imgFileName ); ?>">
                    <div class="item__image">
                      <div class="-image" style="background-image: url( '<?php echo esc_url( $imgFileName ); ?>' )"></div>
                    </div>
                  </a>
                </div>
            <?php endif; ?>

            <?php
              }       // Outer FOR statement.
            ?>
          </div>

          <!-- ****************************************************** -->
          <!-- ****************************************************** -->
          <!-- ****************************************************** -->

        </div>    <!-- detailInfo -->
    
        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage"></div> 
        </div>

      </div>
    </section>

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
