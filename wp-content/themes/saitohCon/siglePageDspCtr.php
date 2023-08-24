
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
<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************
  require get_theme_file_path( './func/globalVariablesDef.php' );
  // 
  // echo "\n\n\n >>>>> header.php [\$GB_menuPos] ☛【". $GB_menuPos . "】\n";
  // echo " >>>>> \$GB_page_flag【". $GB_page_flag . "】";
?>


<!--  -->
<!-- 指定カテゴリー「$GB_categoryType」に投稿記事があれば、当セクションを表示する -->
<?php // if( $cateCount > 0 ): ?>

  
  <!--  -->
  <!-- 「前の記事へ・次の記事へ」ボタン -->
  <!-- 「同一カテゴリ以外は非表示」機能 -->
  <?php
    $cgInfo          = get_the_category();
    $cat             = $cgInfo[0];
    $catNoDsp        = "";
    $GB_categoryType = $cat->cat_name;

    $cateCount = chkCategoryCount( $GB_categoryType );
    // echo " >>>>> singlePageDspCtr( \$GB_categoryType[ " . $GB_categoryType . " ] ： \$cateCount[ ". $cateCount ." ] )";
    
    if (       $cat->cat_ID == $GB_catID_news )  {     // news 3
      $catNoDsp = $GB_catID_howTo . " and " . $GB_catID_blog;
    } elseif ( $cat->cat_ID == $GB_catID_blog )  {     // blog 6
      $catNoDsp = $GB_catID_howTo . " and " . $BG_catID_news;
    } else  {                                          // howto 5
      $catNoDsp = $GB_catID_news  . " and " . $GB_catID_blog;
    }
    // echo " >>>>> singlePageDspCtr( \$cat->cat_ID[ " . $cat->cat_ID . " ] : \$GB_categoryType[ " . $GB_categoryType . " ] )";
    ?>

  <section id="section-postsList" class="sa sa--up">
    <div class="container">
    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php
        // $GB_postYear  = the_time('Y');
        // $GB_postMonth = the_time('m');
      ?>

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1><?php the_title(); ?></h1>
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <!-- ********************************************** -->
        <!-- **********************************************  style="border: 2px dashed lime;" -->
        <div class="detailInfo" id="detailInfo">

          <div class="sBysBlk">
          
            <!--  -->
            <!-- 左側ペイン -->
            <!-- <div class="rightArea" id="myEager"> -->
            <div class="eachPostDigest" id="myEager">
              <!-- ********************************************** -->
              <!-- ********************************************** -->

              <div class="infoArea sa sa--up rlxBGBaseArea">
                <!-- <p class="infoTitle">　<u><?php // echo get_the_date(); ?></u>　</p> -->
                <!-- <p class="infoTitle"><u> ページ：<?php // echo $GB_currentPage; ?></u></p> -->

            
                <!-- ************************************** -->
                <!-- ************************************** -->
                <?php echo the_content(); ?>
                <!-- ************************************** -->
                <!-- ************************************** -->

                <p class="infoTitle">　<?php echo get_the_date(); ?>　</p>

                <?php if ( $cateCount > 1 ): ?>
                  <div class="nextPrevArea dspPC">
                    <ul class="post-link">
                      <li class="extLink linkInternalDec">
                        <?php previous_post_link('%link', '<<　前の記事へ', true, $catNoDsp ); ?>
                      </li>
                      <li class="extLink linkInternalDec">
                        <?php next_post_link    ('%link', '次の記事へ　>>', true, $catNoDsp ); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="nextPrevArea dspMB">
                    <ul class="post-link">
                      <li class="extLink linkInternalDec">
                        <?php previous_post_link('%link', '<< 前へ', true, $catNoDsp ); ?>
                      </li>
                      <li class="extLink linkInternalDec">
                        <?php next_post_link    ('%link', '次へ >>', true, $catNoDsp ); ?>
                      </li>
                    </ul>
                  </div>
                <?php else: ?>
                  <div class="mgnT50"></div>
                <?php endif; ?>

              </div>  <!-- infoArea -->

              <!-- ********************************************** -->
              <!-- ********************************************** -->

            </div>

            <!-- サイドバー部（アーカイブリスト表示用サイドバー）の取込み -->
            <?php
              // 
              // ■ カテゴリ名取得
              // 　サイドバーにおける過去履歴を表ジする為、
              // 　サイドバー表示前に、キューにカテゴリ情報を保持する
              // $categoryInfo = get_category( $cat_name );

              get_sidebar( 'archiveList' );
            ?>

          </div>
        </div>
        <!-- ********************************************** -->
        <!-- ********************************************** -->

      <?php endwhile; endif; ?>
          
        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <!-- 背景画像を切り替えたい -->
          <?php if     ( $cat->cat_ID == $GB_catID_news ):     // news 3 ?>
            <div class="pageCthImage"     id="pageCthImage"></div>
          <?php elseif ( $cat->cat_ID == $GB_catID_blog ): ?>
            <div class="pageCthImageBlog" id="pageCthImage"></div>
          <?php endif; ?>
        </div>


    </div>
  </section>

<?php // endif; ?>
