
<!-- トップページメニュー＃１ -->    
<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************

  $GB_menuPos       = 1;
  $GB_page_flag     = 0;
  $GB_categoryType  = $GB_catName_news;
  $GB_currentCatID  = $GB_catID_news;
  $GB_blogListTitle = "　■ 新着ニュース　";
  $GB_countOfPosts  = 3;

  // 
  // echo "\n\n\n >>>>> \$GB_menuPos  【". $GB_menuPos . "】\n";
  // echo " >>>>> \$GB_page_flag【". $GB_page_flag . "】";
  // 

  // ヘッダー部の取込み
  get_header();
?>

<!-- -->
<!-- **************************************************** -->
<!-- **************************************************** -->
<!-- ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定 -->
<!-- ★ スクロール時表示・非表示する【固定位置表示ナビゲーションメニュー】の制御関連 -->
<!--   1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　 -->
<!--   2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。 -->
<!-- **************************************************** -->
<div id="pageFlag" title="0"></div>
<!-- **************************************************** -->

<div class="mainContents">

  <!-- <section id="section-1" class="sa sa--up"> -->
  <section id="section-1">

    <!--  -->
    <!-- サイト訪問者への、挨拶バナー -->
    <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_frontPage_msg) ); ?>
    
    <!--  -->
    <!-- セクション１、メインスライドショーコードの取込み -->
    <?php include( get_template_directory() . "/contents/com/Slide-MAIN_UseIndex.php" ); ?>

    <div class="container">
    </div>
  </section>

  <!--  -->
  <!-- ************************************************************ -->
  <!-- ************************************************************ -->
  <!-- 
        ■ 新着情報・ブログ機能からの表示
        
          ・・・検証中・・・
   -->
  <!-- ************************************************************ -->
  <!-- ************************************************************ -->
  <?php include( get_template_directory() . "/fpSection-1-2.php" ); ?>
  <!-- ************************************************************ -->
  <!-- ************************************************************ -->
  <!-- ************************************************************ -->
  <!-- ************************************************************ -->

  <section id="section-2">
    <div class="container">

      <?php if ( $GB_SASTOP_FLAG ): ?>
        <div class="sBysBlk">
      <?php else:  ?>
        <div class="sBysBlk sa sa--rl">
      <?php endif; ?>

        <!-- サイドバー部（Twitter/ボタン２個）の取込み -->
        <?php get_sidebar(); ?>

        <!--  -->
        <!-- 右側ペイン -->
        <div class="rightArea" id="myEager">

          <div class="infoArea">
            <p class="infoTitle"><u>　■ ご挨拶　</u></p>
            <div class="sBysBlk">

              <!--  -->
              <!-- 齋藤工氏、スライドショー・Mobile画面用　　　 -->
              <!-- 挨拶・顔写真を、Mobile時は先頭に持ってくる。 -->
              <div class="dspMB sliderTakumi slideShow-Style" style="margin: 30px 0;">
                <?php include( get_template_directory() . "/contents/com/Slide-TAKUMI_UseIndex.php" ); ?>
              </div>
              <!-- *************************************** -->

              <div class="blkInfo">
                <h4 class="dspPC">齋藤建築・<span>一級建築士</span>の「<span class="spBlue">齋藤工</span>（<span class="spBlue">たくみ</span>）」です</h4>
                <h4 class="dspMB">齋藤建築・<span>一級建築士</span>の　　　<br>「<span class="spBlue">齋藤工</span>（<span class="spBlue">たくみ</span>）」です</h4>
                <p class="dspPC">
                    　胎内市荒井浜にて大工を営んで居ります、<br>
                    【<span class="sp16">齋藤建築</span>】と申します。<br><br>
                    　屋号は「<span class="spBlue sp16">大工</span>」。<br>
                    　船大工の時代から代々この地で、地元に根差し、<br>
                    　皆様のご支援を賜りながら長く営まさせて頂いて居ります。<br><br>
                    　長いお付き合いの元、大工仕事は専門にて勿論ですが、<br>
                    【<span class="spBlue">地元の腕の確かな信頼できる職人さん</span>】と、<br>
                    　連携しております。<br><br>
                    　その為に、<br>
                    「<span class="spBlue">設計</span>から<span class="spBlue">施工</span>、そしてお引き渡し後の<span class="spBlue">管理</span>」迄、<br>
                    【<span>ワンストップソリューション</span>】をご提供。<br><br>
                    　<span><u>あちこちへの手配を必要とせず、全てをお任せ</u></span>頂けます。<br><br><br>
                    　新潟は下越地方、<br>
                    　この<span class="spBlue">気候・風土を知っている</span>【<span>齋藤建築</span>】、<br>
                    　この<span class="spBlue">気候・風土で育った木材</span>を使用し、<br>
                    　皆様の、安心・確実な資産を構築致します。<br><br><br>
                  「<span>お住まいに込められた代々の想い</span>」そして、<br>
                  「<span>今、そこにお住まいに成る方の想い</span>」を<span class="spBlue">我が事ととらえ</span>、<br><br>
                    　一つ一つに真摯に向き合い、新しい形にしていく・・・<br>
                    　基本を忘れずに、工務店として鋭意努力して参ります。<br><br>
                    　何卒、宜しくお願い致します。
                </p>
                <p class="dspMB">
                    　胎内市荒井浜にて大工を営んで居ります、<br>
                    【<span class="sp16">齋藤建築</span>】と申します。<br><br>
                    　屋号は「<span class="spBlue sp16">大工</span>」。<br>
                    　船大工の時代から代々この地で、<br>
                    　地元に根差し、<br>
                    　皆様のご支援を賜りながら<br>
                    　長く営まさせて頂いて居ります。<br><br>
                    　長いお付き合いの元、<br>
                    　大工仕事は専門にて勿論ですが、<br>
                    【<span class="spBlue">地元の腕の確かな信頼できる職人さん</span>】<br>
                    　と連携しております。<br><br>
                    　その為に、<br>
                    「<span class="spBlue">設計</span>から<span class="spBlue">施工</span>、<br>
                    　そしてお引き渡し後の<span class="spBlue">管理</span>」迄、<br>
                    【<span>ワンストップソリューション</span>】<br>
                    　をご提案可能です。<br><br>
                    　<span><u>あちこちへの手配を必要とせず、</u><br>
                    　　　　　　　<u>全てをお任せ</u></span>頂けます。<br><br><br>
                    　新潟は下越地方、<br>
                    　この<span class="spBlue">気候・風土を知っている</span><br>
                    【<span>齋藤建築</span>】、<br>
                    　この<span class="spBlue">気候・風土で育った</span><br>
                    【<span>木材</span>】を使用し、皆様の、<br>
                    　安心・確実な資産を構築致します。<br><br><br>
                  「<span>お住まいに込められた代々の想い</span>」、<br>
                  「<span>今、そこにお住まいに成る方の想い</span>」、<br>
                  　これらを「<span class="spBlue">我が事</span>」として感じながら、<br><br>
                    　一つ一つに真摯に向き合い、<br>
                    　　新しい形にしていく・・・<br>
                    　基本を忘れずに、<br>
                    　　工務店として鋭意努力して参ります。<br><br>
                  　何卒、宜しくお願い致します。
                </p>
              </div>

              <!--  -->
              <!-- 齋藤工氏、スライドショー・ＰＣ画面用 -->
              <div class="dspPC sliderTakumi slideShow-Style">
                <?php include( get_template_directory() . "/contents/com/Slide-TAKUMI_UseIndex.php" ); ?>
              </div>
              <!-- *************************************** -->
            </div>
          </div>
          
          <div class="infoArea rlxBGBaseArea" id="whatCanIDo">
          <!-- <div class="infoArea" id="whatCanIDo"> -->
            <p class="infoTitle"><u>　■ 何ができるの？　</u></p>
            <div class="sBysBlk">
              <div class="blkInfo" style="width: 100%;">
                <h4 class="dspPC">お家の事で「<span>気に成る事</span>・<span>困っている事</span>」はありませんか？</h4>
                <h4 class="dspMB">　お家の事で<br>「<span>気に成る事</span>・<span>困っている事</span>」<br>　はありませんか？</h4>
                <p class="dspPC">
                  　何でもお任せください。<br>
                  　お家の「<span>新築</span>・<span>設計</span>」「<span>リフォーム</span>」はもとより・・・<br>
                </p>
                <p class="dspMB">
                  　何でもお任せください。<br>
                  　お家の「<span>新築</span>・<span>設計</span>」<br>
                  　　　　「<span>リフォーム</span>」はもとより・・・<br>
                </p>
                <ul>
                  <li>(1) <span>水回り</span></li>
                  <li>(2) <span>屋根回り</span>・<span class="spBlue">雨漏り</span>/<span class="spBlue">瓦吹き替え</span></li>
                  <li>(3) <span>建付け</span>・<span class="spBlue">バリアフリー</span>/<span class="spBlue">扉</span>/<span class="spBlue">襖</span>/<span class="spBlue">障子</span></li>
                  <li>(4) <span>お庭</span>・<span class="spBlue">植木関係</span></li>
                  <li>(5) <span>敷地内施設</span>・<span class="spBlue">小屋</span>/<span class="spBlue">車庫</span></li>
                  <li>(6) <span>宅地周囲</span>・<span class="spBlue">フェンス</span>/<span class="spBlue">塀</span></li>
                  <li>(7) <span>解体工事</span></li>
                </ul>
                <p class="dspPC">
                  　等々、何でも。<br><br><br>
                  　また「<span>国や地方自治体からの助成</span>」に関するご提案もさせて頂きます。<br>
                  　これら助成を利用する事により、
                </p>
                <p class="dspMB">
                  　等々、何でも。<br><br><br>
                  　また、<br>
                  「<span>国や地方自治体からの助成</span>」に関する<br>
                  　ご提案もさせて頂きます。<br><br>
                  　これら助成を利用する事により例えば、
                </p>
                <ul>
                  <li>(1) <span>木造住宅耐震診断</span></li>
                  <li>(2) <span>各種住宅リフォーム補助制度</span></li>
                </ul>
                <p class="dspPC">
                  　等々、無料或いは支援を受けて実施する事も可能です。<br><br><br>
                  　どんな事でも承ります。<br>
                  「<span>お家の掛かり付け医</span>」としてご用命下さい！<br>
                </p>
                <p class="dspMB">
                  　等々、無料或いは支援<br>
                  　を受けて実施する事も可能です。<br><br><br>
                  　どんな事でも承ります。<br>
                  「<span>お家の掛かり付け医</span>」<br>
                  　　　　　　　としてご用命下さい！<br>
                </p>

              </div>


              <!-- <div class="sideMenu dspMB"> -->
              <div class="dspMB">
                <!--  -->
                <!-- セクションイメージ画像：Pallax効果付き -->
                <div class="rlxParentElmW">
                  <div class="rlxImgFrameW js-rlxImg" data-rellax-speed="3" data-rellax-zindex="2">
                    <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/homeRescue_1980-1521.png' ) ?>" alt="大きな救急箱を背景にして住宅診断・耐震診断に急行するドクターの画像" class="rlxImgCfgW">
                  </div>
                </div>
              </div>
            </div>
            
            <!-- <div class="backgroundRlxArea"> -->
              <div class="rlxParentElmBG dspPC">
                <div class="rlxImgFrameW js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                  <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/toolBox_1280-1280.jpg' ) ?>" alt="リフォーム時に大工さんの工具箱を開けて見せている画像" class="rlxImgCfgW">
                </div>
              </div>
              <div class="rlxParentElmBG dspMB">
                <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                  <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/toolBox_333-1280.jpg' ) ?>"  alt="リフォーム時に大工さんの工具箱を開けて見せている縦型画像" class="rlxImgCfgH">
                </div>
              </div>
            <!-- </div> -->

          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="section-3">
    <div class="container">

      <?php if ( $GB_SASTOP_FLAG ): ?>
        <div class="infoArea rlxBGBaseArea">
      <?php else: ?>
        <div class="infoArea sa sa--up rlxBGBaseArea">
      <?php endif; ?>

        <p class="infoTitle"><u>　■お家の新築/設計　</u></p>

        <div class="sBysBlk">

          <div class="blkInfo">
            <h4>【<span>齋藤建築</span>】の得意技</h4>
            <p class="dspPC">
              　新潟県下越地方、地域密着だから・・・<br><br>
              　お家の悩みをお持ちの方と、同じ地域に住んでいるからこそ、<br>
              　気候を知っているからこそ、ご提案できる事。<br>
            </p>
            <p class="dspMB">
              　新潟県下越地方、地域密着だから・・・<br><br>
              　お家の悩みをお持ちの方と、<br>
              　　　同じ地域に住んでいるからこそ、<br>
              　気候を知っているからこそ、<br>
              　　　ご提案できる事。<br>
            </p>
            <ul>
              <li class="dspPC">(1) <span class="spBlue">海辺の浜風等</span>、<span>地理特性対応快適性</span></li>
              <li class="dspMB">(1) <span class="spBlue">海辺の浜風</span>、<span>地理特性対応快適性</span></li>
              <li>(2) <span class="spBlue">雪国新潟</span>、<span>季節特性対応快適性</span></li>
              <li>(3) (1)/(2)を踏まえた<span>省エネ対策</span></li>
              <li>(4) 専門知識を持っての<span>耐震対策</span></li>
            </ul>
            <br>
            <p class="dspPC">
              　正しい知識で家を造り続けて来た経験と実績から、<br>
              「<span class="spBlue">国や地方自治体</span>」からの「<span>優遇措置</span>」を得る事も可能です。<br><br>
              「<span class="spBlue">国や地方自治体</span>」からの様々な「<span>助成</span>」について、<br>
              　私共からご提案をさせて頂きます。<br><br><br>
            </p>
            <p class="dspMB">
              　正しい知識で<br>
              　家を造り続けて来た経験と実績から、<br><br>
              「<span class="spBlue">国や地方自治体</span>」からの<br>
              「<span>優遇措置</span>」を得る事も可能です。<br>
              「<span class="spBlue">国や地方自治体</span>」からの様々な<br>
              「<span>助成</span>」について、<br><br>
              　私共からご提案をさせて頂きます。<br><br><br>
            </p>
            <p>
              　施主様の想いに寄り添い、<br>
              　組織的に蓄積された知識と経験を持って、<br>
            </p>
            <ul>
              <li>(1) SDG'S に貢献できる<span class="spBlue">省エネ性能</span></li>
              <li class="dspPC">(2) 近年無視する事の出来ない、<span class="spBlue">耐自然災害性能</span></li>
              <li class="dspMB">(2) 近年無視する事の出来ない、<br>　　　 　　 　　　<span class="spBlue">耐自然災害性能</span></li>
            </ul>
            <p>
              　施主様と密にお話をさせて頂きながら、<br>
              　ご納得頂けるお家を造り上げて参ります。
            </p>

            <div class="extLink linkInternalDec">
              <!-- <a href="<?php // echo esc_url( home_url( '/index.php/homenewbuild' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a> -->
              <a href="<?php echo esc_url( home_url( '/homenewbuild' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a>
            </div>

          </div>

          <div class="sideMenu">
            <!--  -->
            <!-- セクションイメージ画像：Pallax効果付き -->
            <div class="rlxParentElmH">
              <div class="rlxImgFrameH js-rlxImg" data-rellax-speed="3" data-rellax-zindex="2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/treesAndSun_763-1080.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の縦型画像" class="rlxImgCfgH">
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="backgroundRlxArea"> -->
          <div class="rlxParentElmBG dspPC">
            <div class="rlxImgFrameW js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/buildHome_1080-1080.png' ) ?>"  alt="住宅新築設計図面と計算機が置いてある机の画像" class="rlxImgCfgW">
            </div>
          </div>
          <div class="rlxParentElmBG dspMB">
            <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/bluePrint_280-1080.jpg' ) ?>" alt="住宅新築設計図面と計算機が置いてある机の細い縦型画像" class="rlxImgCfgH">
            </div>
          </div>
        <!-- </div> -->

      </div>

    </div>
  </section>

  <section id="section-4">
    <div class="container" id="sec4-bgColor">

    <?php if ( $GB_SASTOP_FLAG ): ?>
      <div class="infoArea">
    <?php else: ?>
      <div class="infoArea sa sa--up">
    <?php endif; ?>

        <p class="infoTitle"><u>　■お家のリフォーム　</u></p>

        <div class="sBysBlk">

          <!--  -->
          <!-- セクションイメージ画像：Pallax効果付き -->
          <div class="mgnLR30">
            <div class="rlxParentElmW">
              <div class="rlxImgFrameW js-rlxImg" data-rellax-speed="3" data-rellax-zindex="2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-2.jpg' ) ?>" alt="住宅新築リフォーム用の壁板サンプルの展示を切り取った画像" class="rlxImgCfgW">
              </div>
            </div>
          </div>

          <div class="blkInfo">
            <h4>【<span>齋藤建築</span>】の想い</h4>
            <p class="dspPC">
            　全国的に有名な村上市を始め、<br>
            　胎内市・新発田市と古くからの建屋も多く、<br><br>
            「<span class="spBlue">立派な黒瓦の屋根を持つ建屋</span>」で有ったり、<br>
            　その建付けに至っては「<span class="spBlue">欄間の彫り物</span>」、<br>
            「<span class="spBlue">季節に応じて交換する襖の造り</span>」等々、<br><br>
            　時の流れを感じる状態にはなれど、<br>
            　素晴らしい、見事な作品がたくさん見られます。<br><br>
            「<span>住み慣れた、そこに住む方の想いの籠った</span>」、<br>
            　しかしながら古くなってしまった木造住宅に、<br><br>
            　ひとつ手を加え、更に「<span>暮らしやすく</span>」<br>
            　新たな想いが加わる様に、よみがえらせます。
            </p>
            <p class="dspMB">
            　全国的に有名な村上市を始め、<br>
            　胎内市・新発田市と<br>
            　古くからの建屋も多く、<br><br>
            「<span class="spBlue">立派な黒瓦の屋根を持つ建屋</span>」<br>
            　で有ったり、その建付けに至っては<br>
            「<span class="spBlue">欄間の彫り物</span>」、<br>
            「<span class="spBlue">季節に応じて交換する襖の造り</span>」等々、<br><br>
            　時の流れを感じる状態にはなれど、<br>
            　素晴らしい、<br>
            　見事な作品がたくさん見られます。<br><br>
            「<span>住み慣れた、<br>
            　そこに住む方の想いの籠った</span>」、<br>
            　しかしながら、時の流れと共に、<br>
            　古くなってしまった木造住宅に、<br><br>
            　ひとつ手を加え、更に「<span>暮らしやすく</span>」<br>
            　新たな想いが加わる様に、<br>
            　よみがえらせます。
            </p>

            <div class="extLink linkInternalDec">
              <!-- <a href="<?php // echo esc_url( home_url( '/index.php/homereform' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a> -->
              <a href="<?php echo esc_url( home_url( '/homereform' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

<?php if ( $GB_SASTOP_FLAG ): ?>
  <section id="section-5">
<?php else: ?>
  <section id="section-5" class="sa sa--up">
<?php endif; ?>

  <div class="container">
        
      <div class="infoArea rlxBGBaseArea">
        <p class="infoTitle"><u>　■ お家の健康診断　</u></p>

        <div class="sBysBlk">
          <!--  -->
          <!-- 単一プリミティブ記事 -->
          <div class="blkInfo">
            <h4 class="dspPC">住宅診断・ホームインスペクションとは？</h4>
            <h4 class="dspMB">住宅診断<br>・ホームインスペクションとは？</h4>
            <p class="dspPC">
            　私共【<span><u>齋藤建築</u></span>】では、<br>
            「<span class="spBlue">お家の健康診断</span>」として、二つの検診を用意して居ります。
            </p>
            <p class="dspMB">
            <!-- 　私共【<span><u>齋藤建築</u></span>】では、<br> -->
            「<span class="spBlue">お家の健康診断</span>」として、<br>
            　二つの検診（診断）を用意して居ります。
            </p>
            <ul>
              <li>(1) <span>木造住宅耐震診断</span></li>
              <li>(2) <span>住宅診断</span>・<span>ホームインスペクション</span></li>
            </ul>
            <p class="dspPC">
            「(1) <span>木造住宅耐震診断</span>」は、<br>
            「<span class="spBlue">地方公共団体からの助成</span>」を受け、実施することが可能です。<br><br>
            　費用をかけた本格的な「<span>住宅診断</span>・<span>ホームインスペクション</span>」を実施する前に、<br>
            　いわゆる「<span class="spBlue">お家の健康診断</span>・<span class="spBlue">一般検診</span>」として、受けてみるのは如何でしょうか？<br><br><br>

            「<span>木造住宅耐震診断</span>」では、目視に因る検診を行います。<br><br>
            　その際、耐震性能を評価する事は勿論ですが、<br>
            「<span class="spBlue">お家全体の健康状態</span>」も、可能な範囲で拝見する事に成ります。<br><br>
            　その結果から、<br>
            「<span class="spBlue">更なる<span>住宅診断</span>（<span>ホームインスペクション</span>）の必要性</span>」或いは、<br>
            「<span class="spBlue">お家そのものの改善ポイント</span>」のアドバイスもさせて頂ければ、<br>
            　と考えて居ります。<br><br><br>
            　皆様のお役に立ちたい！<br>
            　その思い一筋で、日々努力をしております。
            </p>
            <p class="dspMB">
            「(1) <span>木造住宅耐震診断</span>」は、<br>
            「<span class="spBlue">地方公共団体からの助成</span>」を受け、<br>
            　実施することが可能です。<br><br>
            　費用をかけた本格的な<br>「<span>住宅診断</span>・<span>ホームインスペクション</span>」<br>
            　を実施する前に、<br><br>
            「<span class="spBlue">お家の健康診断</span>・<span class="spBlue">一般検診</span>」として、<br>
            「(1) <span>木造住宅耐震診断</span>」を一度、<br>
            　受けてみるのは如何でしょうか？<br><br><br>

            「<span>木造住宅耐震診断</span>」では、<br>
            　目視に因る検診を行います。<br><br>
            　その際、<br>
            　耐震性能を評価する事は勿論ですが、<br>
            「<span class="spBlue">お家全体の健康状態</span>」も、<br>
            　可能な範囲で拝見する事に成ります。<br><br>
            　その結果から、更なる<br>
            「<span>住宅診断</span>・<span>ホームインスペクション</span>」<br>
            　の必要性、<br><br>
            　或いは、<br>
            「<span class="spBlue">お家そのものの改善ポイント</span>」<br>
            　のアドバイスもさせて頂ければ、<br>
            　と考えて居ります。<br><br><br>
            　皆様のお役に立ちたい！<br>
            　その思い一筋で、努力をして参ります。<br>
            　是非、ご検討下さいませ。
            </p>

            <div class="extLink linkInternalDec">
              <!-- <a href="<?php //echo esc_url( home_url( '/index.php/homeinspect' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a> -->
              <a href="<?php echo esc_url( home_url( '/homeinspect' ) ) ?>">詳しくはこちら・・・ <i class="fas fa-link extLnkIcon"></i></a>
            </div>

          </div>

          <!-- <div class="mgnLR30"> -->
            <div class="rlxParentElmH">
              <div class="rlxImgFrameH js-rlxImg" data-rellax-speed="3" data-rellax-zindex="2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/health_1280-1920.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器の縦型画像" class="rlxImgCfgH">
              </div>
            </div>
          <!-- </div> -->
        </div>

        <!-- <div class="backgroundRlxArea"> -->
          <div class="rlxParentElmBG dspPC">
            <div class="rlxImgFrameW js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/homeIns_1920-1079.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器と住宅モックをフローリングに置いてある画像" class="rlxImgCfgW">
            </div>
          </div>
          <div class="rlxParentElmBG dspMB">
            <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
              <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/homeIns_280-1080.jpg' ) ?>" alt="住宅診断・耐震診断をイメージする聴診器と住宅モックをフローリングに置いてある縦型切り取り画像" class="rlxImgCfgH">
            </div>
          </div>
        <!-- </div> -->
      </div>
    </div>
  </section>
</div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
