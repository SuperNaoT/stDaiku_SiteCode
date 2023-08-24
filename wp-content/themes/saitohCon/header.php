<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){
      w[l]=w[l]||[];
      w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),
          dl=l!='dataLayer'?'&l='+l:'';
          j.async=true;
          j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
          f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PPNPCJ3');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- レスポンシブ対応設定。-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    // 
    // *******************************************************
    // *******************************************************
    // ★ 【global：グローバル変数】の取込み
    // *******************************************************
    // *******************************************************
    require( get_template_directory() . '/func/globalVariablesDef.php' );
    
    // 
    // *******************************************************
    // *******************************************************
    // ★ SEO対策：【構造化データ】の取込み
    // *******************************************************
    // *******************************************************
    require( get_template_directory() . '/func/seo_structureData.php' );

    // 
    // これら「メニュー位置とページ制御用フラグ」は、
    // グローバル変数化して呼出し元にて定義、ここで受ける。
    // 
    // echo "\n\n\n >>>>> header.php [\$GB_menuPos] ☛【". $GB_menuPos . "】\n";
    // echo " >>>>> \$GB_page_flag【". $GB_page_flag . "】";
  ?>

  <title>
  <?php
    // 
    // これら「メニュー位置とページ制御用フラグ」は、
    // グローバル変数化して呼出し元にて定義、ここで受ける。
    // 

    switch( $GB_menuPos )  {
      case 1:
        $titleMsg = "お家の掛かりつけ医 | 新築設計からリフォームの事迄、何でもご相談下さい | 一級建築士事務所 | 工務店 |";
        break;
      case 2:
        $titleMsg = "お約束できる技術力 | ホームインスペクター・住宅診断士 | 木造住宅耐震診断士 | 一級建築士事務所 | 工務店 |";
        break;
      case 3:
        $titleMsg = "住宅・新築/設計 | 一級建築士事務所 | 工務店 |";
        break;
      case 4:
        $titleMsg = "住宅リフォーム | 住宅設備・修繕からリフォーム迄、何でもご相談下さい | 一級建築士事務所 | 工務店 |";
        break;
      case 5:
        $titleMsg = "お家の健康診断・住宅診断 | ホームインスペクター・住宅診断士 | 木造住宅耐震診断士 | 一級建築士事務所 | 工務店 |";
        break;
      case 6:
        $titleMsg = "ギャラリー | 過去の実績からのご案内です |";
        break;
      case 7:
        $titleMsg = "会社のご案内 |";
        break;
      case 8:
        $titleMsg = "Privacy policy | 個人情報保護 |";
        break;
      case 9:
        $titleMsg = "お問い合わせ |";
        break;
      case 10:
        $titleMsg = "新着情報 |";
        break;
      case 11:
        $titleMsg = "住宅・新築/設計 |";
        break;
      case 12:
        $titleMsg = "住宅リフォーム |";
        break;
      case 13:
        $titleMsg = "お家の健康診断・住宅診断 |";
        break;
      case 14:
        $titleMsg = "ブログ日記 |";
        break;
      case 15:
        $titleMsg = "HowTo |";
        break;
      default:
        // $titleMsg = "new |";
        $titleMsg = get_the_title() . " |";
    }
    echo $titleMsg;
    echo bloginfo( 'name' );
  ?>
  </title>
  <meta name="description" content="<?php echo bloginfo( 'description' ); ?>" >
  <meta name="keywords"    content="新築,木造住宅,新築設計,リフォーム,木造住宅耐震診断,住宅診断,ホームインスペクション,ホームインスペクター,内装,外装,水廻り,バリアフリー,新潟県,胎内市,新発田市,齋藤建築,建築会社,一級建築士設計事務所" />

  <!-- WORDPRESSのお約束：WORDPRESS利用のJavascript/PHP等の取込み（WORDPRESS管理バー表示等々） -->
  <?php wp_head(); ?>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NT8RET6FH9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NT8RET6FH9');
  </script>
  <meta name="google-site-verification" content="suLV6r_NYretcXOJTcugI15YLZrcpFHwRwnn7XNcoII" />

  <!-- For Microsoft:Clarity -->
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "g4rljju3o5");
  </script>

</head>

<!-- WORDPRESSのお約束：WORDPRESS管理のクラスを追加している -->
<body <?php body_class(); ?> > <?php wp_body_open(); ?>


  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPNPCJ3" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!--  -->
  <!-- **************************************************************** -->
  <!-- **************************************************************** -->
  <!-- ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- ★ スクロール時表示・非表示する【固定位置表示ナビゲーションメニュー】の制御関連 -->
  <!--   1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　 -->
  <!--   2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。 -->
  <!-- **************************************************************** -->
  <div id="pageFlag" title="0"></div>
  <!-- **************************************************************** -->

  <!-- ここから ********************************************* -->
  <!-- 【$GB_menuPos】当該ページを指示する、各種メニュー位置
          0. $GB_menuPos = 0：全メニュー、ノーマル表示
          1. $GB_menuPos = 1：各種メニュー、上からの位置「ホーム」
          2. $GB_menuPos = 2：各種メニュー、上からの位置「お約束できる技術力」
          3. $GB_menuPos = 3：各種メニュー、上からの位置「住宅・新築/設計」

      ※ メインナビゲーションメニューについては、
       「当該表示中ページ」該当メニューは、非表示と成る。
      ※ ハンバーガーメニュー・フッターメニューのカレント位置指定フラグ
       「当該表示中ページ」該当メニューは、シルバー表示に変化させる。
  ********************************************************* -->
  <?php
    // 「ホーム」メニュー、左から【１番目】に割り当てる。
    // $GB_menuPos = 1;

    // *************************************************************
    // *************************************************************
    // *************************************************************
    // 
    // 【$GB_page_flag】
    // 1. $GB_page_flag = 0：入力フォームページ（他、通常ページは全て「0」）
    // 2. $GB_page_flag = 1：入力内容確認ページ（他ページへ遷移不可能）
    // 3. $GB_page_flag = 2：送信完了報告ページ
    // ※ 入力内容確認ページでは、固定メニューを表示しない。
    // 
    // 入力フォーム関連ページ指定フラグ
    // $GB_page_flag != 1：他ページ遷移リンク【　動作】（通常ページ表示にて利用）
    // $GB_page_flag  = 1：他ページ遷移リンク【非動作】（入力値確認画面にて利用・何処にも行かせたくない！）
    // 
    // ★ この機能は「入力フォーム処理」にて、
    //  「入力値確認画面」では他ページに移動させたく無いので、
    //  「ヘッダー・フッター」にてリンクを表示させない。
    // 
    // $GB_page_flag = 0;
    // 
    // *************************************************************
    // 
    // 【$GB_menuPos】
    // 1. $GB_menuPos = 1：各種メニュー、上からの位置
    // 2. $GB_menuPos = 2：各種メニュー、上からの位置
    // 3. $GB_menuPos = 3：各種メニュー、上からの位置
    //       ・
    //       ・
    //       ・
    // ※ ハンバーガーメニュー・フッターメニューのカレント位置指定フラグ
    //   「当該表示中ページ」該当メニューは、シルバー表示に変化させる。
    // *************************************************************

    // echo get_template_directory();

    // 
    // フッター内メニュー遷移先指定
    // １．基本的にページリンク遷移際を設定
    // ２．シルバー表示メニューは、ページトップへの遷移「#pageTop」を設定する。
    // ★ ページのリロード防止
    // 
    $movePTop    = "#pageTop";

    // 
    // ■ 画像格納パスが、「index.php：$GB_menuPos=1」の時だけ異なる！
    // 【index.php】
    // if ( $GB_menuPos == 1 )  {

    // 会社ロゴ
    $logoImgPath  = get_template_directory_uri()."/Images/Takumi_LogoName.png";
    // コンタクトアイコン、電話マーク画像
    $phoneImgPath = get_template_directory_uri()."/Images/黒電話アイコン.png";
    // 各種ナビゲーションメニューパス設定
    // $pageLink[ 0] = esc_url( home_url( '/index.php' ) );
    // $pageLink[ 1] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_ourSkills      ) );
    // $pageLink[ 2] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_homeNewBuild   ) );
    // $pageLink[ 3] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_homeReform     ) );
    // $pageLink[ 4] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_homeInspect    ) );
    // $pageLink[ 5] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_stConstGallery   ) );
    // $pageLink[ 6] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_companyProfile ) );
    // $pageLink[ 7] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_privacyPolicy  ) );
    // $pageLink[ 8] = esc_url( home_url( '/index.php/?page_id=' . $GB_pID_contactForm    ) );

    $pageLink[ 0] = esc_url( home_url( '/' ) );
    $pageLink[ 1] = esc_url( home_url( '/?page_id=' . $GB_pID_ourSkills      ) );
    $pageLink[ 2] = esc_url( home_url( '/?page_id=' . $GB_pID_homeNewBuild   ) );
    $pageLink[ 3] = esc_url( home_url( '/?page_id=' . $GB_pID_homeReform     ) );
    $pageLink[ 4] = esc_url( home_url( '/?page_id=' . $GB_pID_homeInspect    ) );
    $pageLink[ 5] = esc_url( home_url( '/?page_id=' . $GB_pID_stConstGallery ) );
    $pageLink[ 6] = esc_url( home_url( '/?page_id=' . $GB_pID_companyProfile ) );
    $pageLink[ 7] = esc_url( home_url( '/?page_id=' . $GB_pID_privacyPolicy  ) );
    $pageLink[ 8] = esc_url( home_url( '/?page_id=' . $GB_pID_contactForm    ) );

    $pageLink[ 9] = esc_url( get_category_link( $GB_catID_news     ) );   // news  カテゴリ
    $pageLink[10] = esc_url( get_category_link( $GB_catID_newBuild ) );   // blog  カテゴリ
    $pageLink[11] = esc_url( get_category_link( $GB_catID_reform   ) );   // howto カテゴリ
    $pageLink[12] = esc_url( get_category_link( $GB_catID_houseIns ) );   // news  カテゴリ
    $pageLink[13] = esc_url( get_category_link( $GB_catID_blog     ) );   // blog  カテゴリ
    $pageLink[14] = esc_url( get_category_link( $GB_catID_howTo    ) );   // howto カテゴリ

    $menuCount = 12;

    // 初期化
    for( $i=0 ; $i< $menuCount ; $i++ ) { $menuColor[$i] = ""; }

    // ヘッダー表示の当該ページ内メインメニューの、
    // １．当該ページのメニュー色変更と、
    // ２．他ページへの遷移ではない、ページトップへの移動を設定する。
    // ３．新着ニュース等カテゴリ一覧については「表示ぺージが二種類」あるので、
    // 　　「#pageTopタグ」に変更しない。
    // 　　変更してしまうと、月別表示から、全カテゴリー一覧に戻れなくなる。
                               $menuColor[$GB_menuPos-1] = 'style="color:lime;"';
    if ( $GB_menuPos < 10 )  { $pageLink [$GB_menuPos-1] = $movePTop; }

    // 
    // メインナビメニュー表示制御用文字列データ設定
    $menuDetail[ 0] ='ホーム';
    $menuDetail[ 1] ='お約束できる技術力';
    $menuDetail[ 2] ='住宅・新築/設計';
    $menuDetail[ 3] ='住宅リフォーム';
    $menuDetail[ 4] ='お家の健康診断';
    $menuDetail[ 5] ='ギャラリー';
    $menuDetail[ 6] ='会社のご案内';
    $menuDetail[ 7] ='個人情報保護指針';
    $menuDetail[ 8] ='ご相談・お問い合わせ';

    $menuDetail[ 9] ='新着ニュース';
    $menuDetail[10] ='住宅・新築/設計';
    $menuDetail[11] ='住宅リフォーム';
    $menuDetail[12] ='お家の健康診断';
    $menuDetail[13] ='ブログ日記';
    $menuDetail[14] ='-';

    // 
    // 当該ページ対応の、流れるバナー表示用文字列を設定
    switch( $GB_menuPos ) {
      case 1:
        $greetingMessage = $DEF_frontPage_msg;
        break;
      case 2:
        $greetingMessage = $DEF_pageOurSkills_msg;
        break;
      case 3:
        $greetingMessage = $DEF_pageHomeNewBuild_msg;
        break;
      case 4:
        $greetingMessage = $DEF_pageHomeReform_msg;
        break;
      case 5:
        $greetingMessage = $DEF_pageHomeInspect_msg;
        break;
      case 6:
        $greetingMessage = $DEF_pageStArcGallery_msg;
        break;
      case 7:
        $greetingMessage = $DEF_pageCompanyProfile_msg;
        break;
      case 8:
        $greetingMessage = $DEF_pagePrivacyPolicy_msg;
        break;
      case 9:
        $greetingMessage = $DEF_pageContactForm_msg;
        break;
      default:
        $greetingMessage = $DEF_frontPage_msg;
    }
  ?>
  <!-- **************************************************************** -->
  <!-- **************************************************************** -->

  <header class="siteHeader" id="pageTop">

    <!-- <?php // echo " >>>>> menuPos【" . $GB_menuPos . "】\n\n";?> -->

    <!-- 「お問い合わせフォーム・入力内容確認画面」ではない場合、
          ハンバーガーメニューを表示するので準備 -->
    <?php if ( $GB_page_flag != 1 ): ?> 
      <div class="hamburgerMenu-Wrapper">
        <!-- <a class="hamburgerMenuButton" id="hamburgerMenuButton">
          <div></div>
          <div></div>
          <div></div>
        </a> -->
        <div class="hamburgerMenuButton" id="hamburgerMenuButton">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <!-- EMACCS【nav>ul>li*3>a{menu$}】 -->
        <?php // if ( $GB_menuPos < 10 ): ?>
          <div class="hamburgerNav" id="hamburgerNav">
            <ul id="pageLink-MB1">
              <li><a class="hbgrMenuElm" <?php echo $menuColor[0] ?> href="<?php echo esc_url( $pageLink[0] ) ?>">- <?php echo $menuDetail[0] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[1] ?> href="<?php echo esc_url( $pageLink[1] ) ?>">- <?php echo $menuDetail[1] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[2] ?> href="<?php echo esc_url( $pageLink[2] ) ?>">- <?php echo $menuDetail[2] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[3] ?> href="<?php echo esc_url( $pageLink[3] ) ?>">- <?php echo $menuDetail[3] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[4] ?> href="<?php echo esc_url( $pageLink[4] ) ?>">- <?php echo $menuDetail[4] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[5] ?> href="<?php echo esc_url( $pageLink[5] ) ?>">- <?php echo $menuDetail[5] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[6] ?> href="<?php echo esc_url( $pageLink[6] ) ?>">- <?php echo $menuDetail[6] ?></a></li>
              <li><a class="hbgrMenuElm" <?php echo $menuColor[7] ?> href="<?php echo esc_url( $pageLink[7] ) ?>">- <?php echo $menuDetail[7] ?></a></li>
              <li><a class="hbgrMenuElm GTM_contactFEvent" <?php echo $menuColor[8] ?> href="<?php echo esc_url( $pageLink[8] ) ?>">- <?php echo $menuDetail[8] ?></a></li>
            </ul>
          </div>
        <?php // endif; ?>

      </div>
    <?php endif; ?>
    <!-- ここ迄 ********************************************* -->

    <!-- ハンバーガーメニュー表示時のマスク表示の設定 -->
    <div class="mask" id="mask"></div>

    <!-- 流れるバナー表示の設定 -->
    <div class="fixed-greeting-area" id="dspCtr-greetingArea">
      <div class="gradient">
        <div class="gra-inner -gradient"></div>
        <div class="gra-out   -gradient"></div>
      </div>    
      <div class="news-banner">
        <div class="news-banner__content">
          <?php echo $greetingMessage ?>
        </div>
      </div>          
    </div>

    <!-- ヘッダー部本体の設定 -->
    <div class="headInformation"> 
      <div class="container">
        <div class="greeting">
          <h1 class="sp18">【 <u><span class="spBlue">「設計から施工、そしてお引き渡し後の管理」迄、なんでもお任せ「<span>お家の専門店</span>」</span></u> 】</h1>
        </div>
        <div class="headArea">
          <div class="headAreaL">

          <?php if ( $GB_page_flag != 1 ): ?> 
            <div class="headerLogo">
              <a href="<?php echo esc_url( $pageLink[0] ) ?>">
                <img src="<?php echo esc_url( $logoImgPath ) ?>" alt="株式会社齋藤建築の会社ロゴと社名の画像">
              </a>
            </div>
          <?php else: ?>
            <div class="headerLogoNL">
              <img src="<?php echo esc_url( $logoImgPath ) ?>" alt="株式会社齋藤建築の会社ロゴと社名の画像">
            </div>
          <?php endif; ?>

            <h2>本社　： 新潟県胎内市荒井浜 79　〒959-2609</h2>
            <h2>作業場： 新潟県胎内市高野 1204</h2>
          </div>  <!-- headAreaL -->        
          <div class="headAreaC">
            <div class="openInfo">
              <div class="openTime">営業時間</div>
              <div class="detailTMInfo">
                <div class="detailOT1">
                  10:00 ～ 17:00（月曜日～土曜日）
                </div>
                <div class="detailOT2">
                  10:00 ～ 13:00（日曜日・祝祭日）
                </div>  
              </div>
            </div>
            <div class="openInfo">
              <div class="dayOff"  >休業日</div>
              <div class="detailTMInfo">
                <div class="detailDO">お盆・年末年始</div>
              </div>
            </div>
          </div>
          <div class="headAreaR">
            <p>● お気軽にご相談・お問い合わせ下さい</p>
            <a href="tel:0254463055" class="phoneNo sdw-btn">
              <img src="<?php echo esc_url( $phoneImgPath ) ?>" alt="株式会社齋藤建築へのお問い合わせご相談用電話アイコン" class="phoneIcon"><p>０２５４-４６-３０５５　<i class="far fa-hand-pointer faClkHand"></i></p>
            </a>
            <?php if ( $GB_page_flag != 1 ): ?>             
              <p>● メールでのお問い合わせはこちらから・・・</p>
              <div class="contactInfo sdw-btn">
                <a href="<?php echo esc_url( $pageLink[8] ) ?>" class="GTM_contactFEvent">ご相談・お問い合わせメールはこちら　<i class="far fa-hand-pointer faClkHand"></i></a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>  <!-- container -->
    </div>  <!-- headInformation-->


    <!-- 「お問い合わせフォーム・入力内容確認画面」ではない場合、
          通常のナビゲーションメニューを表示するので準備 -->
    <?php if ( $GB_page_flag != 1 ): ?> 
      <div class="navMenuArea">
        <div class="container">
          <nav id="navigation">

            <?php // if ( $GB_menuPos < 10 ): ?>
              <ul class="mainNav">
                <li>  <a <?php echo $menuColor[0] ?> href="<?php echo esc_url( $pageLink[0] ) ?>"><?php echo $menuDetail[0] ?></a>　</li>
                <li>　<a <?php echo $menuColor[1] ?> href="<?php echo esc_url( $pageLink[1] ) ?>"><?php echo $menuDetail[1] ?></a>　</li>
                <li>　<a <?php echo $menuColor[2] ?> href="<?php echo esc_url( $pageLink[2] ) ?>"><?php echo $menuDetail[2] ?></a>　</li>
                <li>　<a <?php echo $menuColor[3] ?> href="<?php echo esc_url( $pageLink[3] ) ?>"><?php echo $menuDetail[3] ?></a>　</li>
                <li>　<a <?php echo $menuColor[4] ?> href="<?php echo esc_url( $pageLink[4] ) ?>"><?php echo $menuDetail[4] ?></a>　</li>
                <li>　<a <?php echo $menuColor[5] ?> href="<?php echo esc_url( $pageLink[5] ) ?>"><?php echo $menuDetail[5] ?></a>　</li>
                <li>　<a <?php echo $menuColor[6] ?> href="<?php echo esc_url( $pageLink[6] ) ?>"><?php echo $menuDetail[6] ?></a>　</li>
                <li>　<a <?php echo $menuColor[7] ?> href="<?php echo esc_url( $pageLink[7] ) ?>"><?php echo $menuDetail[7] ?></a>　</li>
                <li>　<a <?php echo $menuColor[8] ?> href="<?php echo esc_url( $pageLink[8] ) ?>" class="GTM_contactFEvent"><?php echo $menuDetail[8] ?></a></li>
              </ul>    
            <?php // else: ?>

              <?php // echo " >>>>> Check Header.php (2)「\$pageLink[09]」【 " . $pageLink[ 9] . " 】<br><br>"; ?>
              <?php // echo " >>>>> Check Header.php (3)「\$pageLink[10]」【 " . $pageLink[10] . " 】<br><br>"; ?>

            <?php // endif; ?>
          </nav>
        </div>
      </div>
    <?php endif; ?>

  </header>

  <!--  -->
  <!-- スクロールガイド -->
  <div class="scrollGuideArea" id="scrollGuideArea">
  <p>scroll</p><div class="downArrow"></div>
  </div>

  <!--  -->
  <!-- ************************************************ -->
  <!-- 画面スクロール実行時、固定ナビメニューを表示する！ -->
  <!-- ************************************************ -->
  <?php if ( $GB_page_flag != 1 ): ?> 
  <div class="fixedSiteHeader" id="fixedNavElm">
    <div class="fixedNavMenuArea">
      <div class="container">
        <nav id="fixedNavigation">
          <ul class="mainNav">
            <li>  <a <?php echo $menuColor[0] ?> href="<?php echo esc_url( $pageLink[0] ) ?>"><?php echo $menuDetail[0] ?></a>　</li>
            <li>　<a <?php echo $menuColor[1] ?> href="<?php echo esc_url( $pageLink[1] ) ?>"><?php echo $menuDetail[1] ?></a>　</li>
            <li>　<a <?php echo $menuColor[2] ?> href="<?php echo esc_url( $pageLink[2] ) ?>"><?php echo $menuDetail[2] ?></a>　</li>
            <li>　<a <?php echo $menuColor[3] ?> href="<?php echo esc_url( $pageLink[3] ) ?>"><?php echo $menuDetail[3] ?></a>　</li>
            <li>　<a <?php echo $menuColor[4] ?> href="<?php echo esc_url( $pageLink[4] ) ?>"><?php echo $menuDetail[4] ?></a>　</li>
            <li>　<a <?php echo $menuColor[5] ?> href="<?php echo esc_url( $pageLink[5] ) ?>"><?php echo $menuDetail[5] ?></a>　</li>
            <li>　<a <?php echo $menuColor[6] ?> href="<?php echo esc_url( $pageLink[6] ) ?>"><?php echo $menuDetail[6] ?></a>　</li>
            <li>　<a <?php echo $menuColor[7] ?> href="<?php echo esc_url( $pageLink[7] ) ?>"><?php echo $menuDetail[7] ?></a>　</li>
            <li>　<a <?php echo $menuColor[8] ?> href="<?php echo esc_url( $pageLink[8] ) ?>"class="GTM_contactFEvent"><?php echo $menuDetail[8] ?></a></li>
          </ul>    
        </nav>
      </div>
    </div>  <!-- navMenuArea -->  
  </div>
  <?php endif; ?>
  <!-- ************************************************ -->
  <!-- ************************************************ -->

  <?php if ( $GB_iconDspCtr != 1 ): ?> 

    <!--  -->
    <!-- メール・電話・フォーム等々、コンタクト用アイコン表示 -->
    <div class="navBtnCtr" id="navBtnCtr">
      <div class="navBtn">
        <a href="<?php echo esc_url( home_url( '/contactForm' ) ) ?>"><img src="<?php echo esc_url( get_template_directory_uri(). '/Images/メールのアイコン.png' ) ?>" alt="お問い合わせページへ誘導できるメールのアイコン画像" class="navBtnEmail"></a>
        <div class="phnDspCtr">
          <a href="tel:0254463055"><img src="<?php echo esc_url( get_template_directory_uri(). '/Images/固定電話のアイコン3.png' ) ?>" alt="お問い合わせご相談の為に電話発信へ誘導できる電話のアイコン画像" class="navBtnPhone"></a>
        </div>
        <a href="#pageTop" class="navBtnUP"></a>
      </div>
    </div>
  
  <?php else: ?>
  
    <div class="navBtnCtr" id="navBtnCtr">
      <div class="navBtn">
        <a href="#pageTop" class="navBtnUP"></a>
      </div>
    </div>

  <?php endif; ?>
