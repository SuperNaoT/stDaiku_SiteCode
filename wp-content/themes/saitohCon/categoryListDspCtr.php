
<!--  -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--                                                     -->
<!-- ■ カテゴリー単位、全投稿概略リスト表示用コード -->
<!-- 　（アーカイブリストページ本体）　　　　　　　 -->
<!--                                                     -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<!--  -->

<!--  -->
<!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
<?php
  // require get_theme_file_path( './func/globalVariablesDef.php' );
  // echo ">>>>> categoryListDspCtr.php「\$GB_currentPage」☛【". $GB_currentPage ."】";

  $cateCount = chkCategoryCount( $GB_categoryType );
  // echo ">>>>> categoryListDspCtr.php「\$GB_categoryType」☛【". $GB_categoryType ."】";
  // echo ">>>>> categoryListDspCtr.php「\$cateCount」      ☛【". $cateCount ."】";
?>

<!--  -->
<!-- 指定カテゴリー「$GB_categoryType」に投稿記事があれば、当セクションを表示する -->
<?php if( $cateCount > 0 ): ?>
  <section id="section-postsList" class="sa sa--up">
    <div class="container">
    
      <!-- ******************************* -->
      <!-- ******************************* -->
      <!-- 以下内容を、ページ毎に実装する！   -->
      <!-- ******************************* -->
      <!-- ******************************* -->
      <div class="pageTitle" id="pageTitle">
        <!-- <div class="hrzLine"></div> -->
        <h1><?php echo $GB_blogListTitle . "アーカイブ" ?></h1>
      </div>

      <!-- 仕切り線表示 -->
      <div class="uline"></div>

      <!-- ********************************************** -->
      <!-- ********************************************** -->
      <div class="detailInfo" id="detailInfo">
      <!-- ********************************************** -->
      <!-- ********************************************** -->

        <div class="sBysBlk">
        
          <!--  -->
          <!-- 左側ペイン -->
          <!-- <div class="rightArea" id="myEager"> -->
          <div class="eachPostDigest" id="myEager">
            <!-- ********************************************** -->
            <!-- ********************************************** -->

            <div class="infoArea sa sa--up rlxBGBaseArea">
              <!-- <p class="infoTitle">　<u>《カテゴリー別・アーカイブ》</u>　</p> -->
              <!-- <p class="infoTitle"><u> ページ：<?php // echo $GB_currentPage; ?></u></p> -->

              <?php
                //
                // wordpress 投稿情報を取得する。
                while (have_posts()) : the_post();
              ?>
          
              <!-- ************************************** -->
              <!-- ************************************** -->
                <?php include( get_template_directory() . "/contents/com/dspPostInfoAtList.php" ); ?>
              <!-- ************************************** -->
              <!-- ************************************** -->

              <?php endwhile; ?>

              <!-- ここから、「detailInfo」に背景画像を移動！ -->
              <!-- <?php // if( $cateCount < 6 ): ?> -->
              <div class="rlxParentElmBG dspMB">
                <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                  <?php if ( $GB_categoryType == $GB_catName_news ): ?>
                    <!-- <img src="<?php //echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImageMB-2000-3000.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="rlxImgCfgH"> -->
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImageMB-1000-1500.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="rlxImgCfgH">

                  <?php elseif ( $GB_categoryType == $GB_catName_newBuild ): ?>
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/treesAndSun_763-1080.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の縦型画像" class="rlxImgCfgH">
                  <?php elseif ( $GB_categoryType == $GB_catName_reform ): ?>
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-1_904-1280.jpg' ) ?>" alt="新たな気持ちでのリフォームをイメージする足場と青空による縦型画像" class="rlxImgCfgH">
                  <?php elseif ( $GB_categoryType == $GB_catName_houseIns ): ?>
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/health_1280-1920.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器の縦型画像" class="rlxImgCfgH">
                  <?php elseif ( $GB_categoryType == $GB_catName_blog ): ?>
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/blogBtnMB.jpg' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ縦型画像" class="rlxImgCfgH">

                  <?php else: ?>
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsNoImage.png' ) ?>" alt="画像がない時の齋藤建築オーナーの代替画像" class="rlxImgCfgH">
                  <?php endif; ?>
                </div>
              </div>
              <!-- <?php // else: ?>
              <?php // endif; ?> -->
              
            </div>  <!-- infoArea -->

            <!-- ********************************************** -->
            <!-- ********************************************** -->
      
            <?php if ( categoryPagination() ): ?>
              <div class="nextPrevArea">
                <div class="post-link">
                  <?php if ( !$GB_MOBILE_FLAG )  {
                    echo categoryPagination();
                  } else  {
                    echo categoryPagination(1,1,false);
                  } ?>
                </div>
              </div>
            <?php else: ?>
              <div class="nextPrevArea"></div>
            <?php endif; ?>

            <!-- ※ ※※※※※ -->
            <!-- ※Ⅰへ移動 ※ -->
            <!-- ※ ※※※※※ -->

          </div>

          <!-- サイドバー部（アーカイブリスト表示用サイドバー）の取込み -->
          <?php get_sidebar( 'archiveList' ); ?>

        </div>

        <!-- ※ ※※※※※ -->
        <!-- ※Ⅰ移動先 ※ -->
        <!-- ※ ※※※※※ -->        
        <!-- <div class="rlxParentElmBG dspPC"> -->
          <!-- <div class="rlxImgFrameW js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2"> -->

        <div class="expImage js-backgroundRlxImg dspPC" data-rellax-speed="-6" data-rellax-zindex="-2">
          <div class="baseFrame">

            <?php if ( $GB_categoryType == $GB_catName_news ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImage.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ画像" class="rlxImgCfgW">

            <?php elseif ( $GB_categoryType == $GB_catName_newBuild ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/trees-gda7a19bb0_1920.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の画像" class="rlxImgCfgW">
            <?php elseif ( $GB_categoryType == $GB_catName_reform ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-1.jpg' ) ?>" alt="新たな気持ちでのリフォームをイメージする足場と青空による画像" class="rlxImgCfgW">
            <?php elseif ( $GB_categoryType == $GB_catName_houseIns ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/homeIns_1920-1079.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器の画像" class="rlxImgCfgW">
            <?php elseif ( $GB_categoryType == $GB_catName_blog ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/blogBtn.jpg' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ画像" class="rlxImgCfgW">

            <?php else: ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsNoImage.png' ) ?>" alt="画像がない時の齋藤建築オーナーの代替画像" class="rlxImgCfgW">
            <?php endif; ?>
          </div>
        </div>
        <!-- ※ ※※※※※ -->        
        <!-- ※ ※※※※※ -->        


      <!-- ********************************************** -->
      <!-- ********************************************** -->
      </div>
      <!-- ********************************************** -->
      <!-- ********************************************** -->

    </div>
  </section>

<?php endif; ?>
