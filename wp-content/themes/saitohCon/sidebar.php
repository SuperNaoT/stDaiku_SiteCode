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

<aside id="sidebar">

  <!--  -->
  <!-- 左側ペイン -->

  <!-- Twitter -->
  <div class="twitterPackage">
    <p class="infoTitle"><u>　■ 活動のご案内　</u></p>
    <div class="twitterArea">
      <!-- <a class="twitter-timeline" data-height="650" data-theme="dark" href="//twitter.com/niigataSimpleL?ref_src=twsrc%5Etfw">Tweets by 齋藤建築</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> -->
      <a class="twitter-timeline" data-height="650" data-theme="dark" href="//twitter.com/SaitohConst?ref_src=twsrc%5Etfw">Tweets by 齋藤建築</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>

  <!-- ＰＣ利用時、右側ペイン下部に配置 -->
  <!-- ギャラリー誘導メニューボタン -->
  <div class="sideMenu">

    <h4>　■「お知らせ・投稿」アーカイブ　</h4>

    <!-- 新着ニュース記事が存在すれば、ボタンを表示 -->
    <?php if ( chkCategoryCount( $GB_catName_news ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_news ) ) ?>">
        <div class="menuBtn sdw-btn js-catBtns">
          <div class="btnInner">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/newsImageMB.png' ) ?>" alt="新着ニュースをイメージするNEWSロゴ縦型画像" class="mnBtnIcon">
            <p>新着ニュース<i class="fas fa-link extLnkIcon"></i></p>  
          </div>
        </div>
      </a>
    <?php endif; ?>
    <!-- 新築/設計関連記事が存在すれば、ボタンを表示 -->
    <?php // if ( chkCategoryCount( $GB_catName_news ) > 0 ): ?>
    <?php if ( chkCategoryCount( $GB_catName_newBuild ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_newBuild ) ) ?>">
        <div class="menuBtn sdw-btn js-catBtns">
          <div class="btnInner">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/treesAndSun_1080-1080.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の画像" class="mnBtnIcon">
            <p>住宅 新築/設計<i class="fas fa-link extLnkIcon"></i></p>  
          </div>
        </div>
      </a>
    <?php endif; ?>
    <!-- リフォーム関連記事が存在すれば、ボタンを表示 -->
    <?php // if ( chkCategoryCount( $GB_catName_news ) > 0 ): ?>
    <?php if ( chkCategoryCount( $GB_catName_reform ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_reform ) ) ?>">
        <div class="menuBtn sdw-btn js-catBtns">
          <div class="btnInner">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-1_1280-1280.jpg' ) ?>" alt="新たな気持ちでのリフォームをイメージする足場と青空による画像" class="mnBtnIcon">
            <p>住宅リフォーム<i class="fas fa-link extLnkIcon"></i></p>  
          </div>
        </div>
      </a>
    <?php endif; ?>
    <!-- 住宅健康診断関連記事が存在すれば、ボタンを表示 -->
    <?php // if ( chkCategoryCount( $GB_catName_news ) > 0 ): ?>
    <?php if ( chkCategoryCount( $GB_catName_houseIns ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_houseIns ) ) ?>">
        <div class="menuBtn sdw-btn js-catBtns">
          <div class="btnInner">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/health_1280-1280.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器の縦型画像" class="mnBtnIcon">
            <p>住宅健康診断<i class="fas fa-link extLnkIcon"></i></p>  
          </div>
        </div>
      </a>
    <?php endif; ?>
    <!-- ブログ記事が存在すれば、ボタンを表示 -->
    <?php if ( chkCategoryCount( $GB_catName_blog ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_blog ) ) ?>">
        <div class="menuBtn sdw-btn js-catBtns" >
          <div class="btnInner">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/blogBtn.jpg' ) ?>" alt="ブログアーカイブをイメージするBLOGロゴ画像" class="mnBtnIcon">
            <p>ブログ日記　<i class="fas fa-link extLnkIcon"></i></p>  
          </div>
        </div>
      </a>
    <?php endif; ?>
    <!-- ハウツー記事が存在すれば、ボタンを表示 -->
    <?php if ( chkCategoryCount( $GB_catName_howTo ) > 0 ): ?>
      <a href="<?php echo esc_url( get_category_link( $GB_catID_howTo ) ) ?>">
        <div style="display: flex; justify-content: right;">..</div>
      </a>
    <?php endif; ?>

    <!-- <h4 style="margin-bottom: 0; margin-top: 20px;">　■ 記事検索　</h4>
    <div class="searchFunc">
      <form method="get" class="searchform" action="<?php // echo esc_url( home_url('/') ); ?>">
        <input type="text" placeholder="キーワード検索!!" name="s" class="searchfield" value="" />
        <input type="submit" value="" alt="検索" title="検索" class="searchsubmit">
      </form>
    </div> -->
    <?php get_search_form(); ?>

  </div>
</aside>