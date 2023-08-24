<?php
  // 
  // *******************************************************
  // *******************************************************
  // ★ 【global：グローバル変数】の取込み
  // *******************************************************
  // *******************************************************
  require( get_template_directory() . '/func/globalVariablesDef.php' );

  // 

  // 
  // これら「メニュー位置とページ制御用フラグ」は、
  // グローバル変数化して呼出し元にて定義、ここで受ける。
  // 
  // echo " >>>>> [footer] \$GB_menuPos  【". $GB_menuPos . "】\n";
  // echo " >>>>> [footer] \$GB_page_flag【". $GB_page_flag . "】";

  // 
  // フッター内メニュー遷移先指定
  // １．基本的にページリンク遷移際を設定
  // ２．シルバー表示メニューは、ページトップへの遷移「#pageTop」を設定する。
  // ★ ページのリロード防止
  // 
  $movePTop    = "#pageTop";

  // 会社ロゴ
  $logoImgPath  =  get_template_directory_uri()."/Images/Takumi_LogoName.png";
  // コンタクトアイコン、電話マーク画像
  $phoneImgPath =  get_template_directory_uri()."/Images/黒電話アイコン.png";
  // コンタクトアイコン、郵便マーク画像
  $mailImgPath  =  get_template_directory_uri()."/Images/郵便局のマーク.png";
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
  $pageLink[ 5] = esc_url( home_url( '/?page_id=' . $GB_pID_stConstGallery   ) );
  $pageLink[ 6] = esc_url( home_url( '/?page_id=' . $GB_pID_companyProfile ) );
  $pageLink[ 7] = esc_url( home_url( '/?page_id=' . $GB_pID_privacyPolicy  ) );
  $pageLink[ 8] = esc_url( home_url( '/?page_id=' . $GB_pID_contactForm    ) );


  // その他、「W3C」
  $w3ValidPath = get_template_directory_uri() . "/w3cValidation";

  // 初期化
  $menuCount = 9;
  for( $i=0 ; $i< $menuCount ; $i++ ) { $menuColor[$i] = ""; }
                                        $menuColor[$GB_menuPos-1] = 'style="color:lime;"';
                                        $pageLink [$GB_menuPos-1] = $movePTop;

  // 
  // メインナビメニュー表示制御用データ設定
  $menuDetail[0] ='ホーム';
  $menuDetail[1] ='お約束できる技術力';
  $menuDetail[2] ='住宅・新築/設計';
  $menuDetail[3] ='住宅リフォーム';
  $menuDetail[4] ='お家の健康診断';
  $menuDetail[5] ='ギャラリー';
  $menuDetail[6] ='会社のご案内';
  $menuDetail[7] ='個人情報保護指針';
  $menuDetail[8] ='ご相談・お問い合わせ';

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

  <footer id="footerPos">
    <div class="container">
      <div class="siteFooter" id="footerSection">
        <div class="cmpyInfo" >
          <?php if ( $GB_page_flag != 1 ): ?>
            <div class="footerLogo">
              <a href="<?php echo esc_url( $pageLink[0] ) ?>">
                <img src="<?php echo esc_url( $logoImgPath ) ?>" alt="株式会社齋藤建築の会社ロゴと社名の画像">
              </a>
            </div>
          <?php else: ?>
            <div class="footerLogoNL">
              <img src="<?php echo esc_url( $logoImgPath ) ?>" alt="株式会社齋藤建築の会社ロゴと社名の画像">
            </div>
          <?php endif; ?>
          <!-- <h1>お家の事なら何でもお任せください！</h1> -->
          <div class="fixed-greeting-area">
            <div class="gradient">
              <div class="gra-inner -gradient"></div>
              <div class="gra-out   -gradient"></div>
            </div>    
            <div class="news-banner">
              <div class="news-banner__content">
                <h1><?php echo $greetingMessage ?></h1>
              </div>
            </div>          
          </div>  

          <div class="companyAddr">
            <h5>【<span class="spBlue sp16">齋藤工一級建築事務所</span>】</h5>
            <div class="ftPhIcon">
              <img src="<?php echo esc_url( $mailImgPath ) ?>" alt="株式会社齋藤建築の郵便番号" class="phoneIcon">９５９－２６０９</i>
            </div>
            <p style="margin: 3px 0;">
              新潟県<br>
              胎内市<br>
              荒井浜 79
            </p>
            <div class="ftPhIcon">
              <img src="<?php echo esc_url( $phoneImgPath ) ?>" alt="株式会社齋藤建築へのお問い合わせご相談用電話アイコン" class="phoneIcon">０２５４-４６-３０５５</i>
            </div>
          </div>
        </div>

        <?php if ( $GB_page_flag != 1 ): ?> 
          <div id="footerNav" class="footerNavArea">
            <ul>
              <li><a <?php echo $menuColor[0] ?> href="<?php echo esc_url( $pageLink[0] ) ?>">- <?php echo $menuDetail[0] ?></a></li>
              <li><a <?php echo $menuColor[1] ?> href="<?php echo esc_url( $pageLink[1] ) ?>">- <?php echo $menuDetail[1] ?></a></li>
              <li><a <?php echo $menuColor[2] ?> href="<?php echo esc_url( $pageLink[2] ) ?>">- <?php echo $menuDetail[2] ?></a></li>
              <li><a <?php echo $menuColor[3] ?> href="<?php echo esc_url( $pageLink[3] ) ?>">- <?php echo $menuDetail[3] ?></a></li>
              <li><a <?php echo $menuColor[4] ?> href="<?php echo esc_url( $pageLink[4] ) ?>">- <?php echo $menuDetail[4] ?></a></li>
              <li><a <?php echo $menuColor[5] ?> href="<?php echo esc_url( $pageLink[5] ) ?>">- <?php echo $menuDetail[5] ?></a></li>
              <li><a <?php echo $menuColor[6] ?> href="<?php echo esc_url( $pageLink[6] ) ?>">- <?php echo $menuDetail[6] ?></a></li>
              <li><a <?php echo $menuColor[7] ?> href="<?php echo esc_url( $pageLink[7] ) ?>">- <?php echo $menuDetail[7] ?></a></li>
              <li><a <?php echo $menuColor[8] ?> href="<?php echo esc_url( $pageLink[8] ) ?>" class="GTM_contactFEvent">- <?php echo $menuDetail[8] ?></a></li>
            </ul>  
          </div>
        <?php endif; ?>
      </div>
    </div>
    <br><br>
    <!-- ***************************************** -->
    <!-- ***************************************** -->
    <!-- DigiCert Seal HTML -->
    <!-- Place HTML on your site where the seal should appear -->
    <div id="DigiCertClickID_dO-4fRgF"></div>

    <!-- DigiCert Seal Code -->
    <!-- Place with DigiCert Seal HTML or with other scripts -->
    <script type="text/javascript">
      var __dcid = __dcid || [];
      __dcid.push({"cid":"DigiCertClickID_dO-4fRgF","tag":"dO-4fRgF"});
      (function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
    </script>
    <!-- ***************************************** -->
    <!-- ***************************************** -->

    <!-- ***************************************** -->
    <!-- ***************************************** -->
    <!-- W3C CSS Validation -->
    <!-- <a href="http://jigsaw.w3.org/css-validator/check/referer"> -->
    <div class="w3cValidation">
      <a href="<?php echo esc_url( $w3ValidPath ) ?>/w3cValidate.html" target="_blank" rel="noopener noreferrer">
        <img style="width:88px;height:31px"
              src="<?php echo esc_url( $w3ValidPath ) ?>/images/vcss.gif"
              alt="当該ホームページの「CSS」が正当である事を証明する画像" />
      </a>    
    </div>
    <!-- ***************************************** -->
    <!-- ***************************************** -->

    <div class="rightsNote dspPC"><p>Copyright © 1630 Saitoh Construction Co., Ltd. All Rights Reserved.</p></div>
    <div class="rightsNote dspMB"><p>Copyright © 1630</p><p style="margin-top: 3px;">Saitoh Construction Co., Ltd. All Rights Reserved.</p></div>
    <div class="powerdNote"><p>Powerd by <a href="//www.waplus-jpn.co.jp" target="_blank" rel="noopener noreferrer" style="color: blue;"><u>WaPlus Co., Ltd.</u></a></p></div>
  </footer>

  <!-- WORDPRESSのお約束 -->
  <?php wp_footer(); ?>

</body>
</html>