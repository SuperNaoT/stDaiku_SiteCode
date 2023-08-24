<!--  -->
<!-- 投稿記事カテゴリ対応の投稿数をデバッグ -->
<?php
  $cateCount = chkCategoryCount( $GB_categoryType );
  // echo " >>>>> \$GB_categoryType 【". $GB_categoryType . "】";
?>

<!--  -->
<!-- カテゴリにて、新着情報「news」カテゴリがあれば、当セクションを表示する -->
<?php if( $cateCount > 0 ): ?>

<?php if ( $GB_SASTOP_FLAG ): ?>
  <section id="section-1-2">
<?php else: ?>
  <section id="section-1-2" class="sa sa--up">
<?php endif; ?>

    <div class="container">

    <?php if ( $GB_SASTOP_FLAG ): ?>
      <div class="infoArea rlxBGBaseArea">        <!-- relative -->
    <?php else: ?>
      <div class="infoArea sa sa--up rlxBGBaseArea">        <!-- relative -->
    <?php endif; ?>

        <p class="infoTitle"><u><?php echo $GB_blogListTitle; ?></u></p>

        <?php
            //
            // wordpress 「お知らせ」投稿情報を取得する。 
            //【お知らせ:カテゴリ名：「news」】
            $posts = get_posts("numberposts=$GB_countOfPosts&category_name=$GB_categoryType&orderby=post_date&offset=0");
            foreach ($posts as $post):
              //
              // 取得投稿データの、グローバル変数への設定。
              setup_postdata($post);
        ?>
        
          <!-- ************************************** -->
          <!-- ************************************** -->
          <?php include( get_template_directory() . "/contents/com/dspPostInfoAtList.php" ); ?>
          <!-- ************************************** -->
          <!-- ************************************** -->

        <?php endforeach; ?>

        <!-- <div class="rlxParentElmBG dspPC"> -->
          <!-- <div class="rlxImgFrameW js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2"> -->

        <div class="expImage js-backgroundRlxImg dspPC" data-rellax-speed="-6" data-rellax-zindex="-2">
          <div class="baseFrame">
            <?php if ( $GB_categoryType == $GB_catName_news ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImage.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ画像" class="rlxImgCfgW">
            <?php elseif ( $GB_categoryType == $GB_catName_blog ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/blogBtn.jpg' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ画像" class="rlxImgCfgW">
            <?php endif; ?>
          </div>
        </div>

        <div class="rlxParentElmBG dspMB">
          <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
            <?php if ( $GB_categoryType == $GB_catName_news ): ?>
              <!-- <img src="<?php //echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImageMB-2000-3000.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="rlxImgCfgH"> -->
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImageMB-1000-1500.jpg' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="rlxImgCfgH">
            <?php elseif ( $GB_categoryType == $GB_catName_blog ): ?>
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/blogBtnMB.jpg' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ縦型画像" class="rlxImgCfgW">
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php endif; ?>
