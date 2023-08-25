<?php

if ( ! is_admin() ) {

    // 
    // *******************************************************
    // *******************************************************
    // ★ 【JavaScriptファイル】の取込み
    // *******************************************************
    // *******************************************************
    function init_myJavaScript() {

      // WordPressに含まれているjquery.jsを読み込まない
      wp_deregister_script('jquery');

      // ハンバーガーメニュー用Scriptの読み込み
      // ハンドル名（識別要の文字列）.
      $handle = 'hbgMenu_js';
      // 追加したいJavaScriptファイルのURL.
      $src = get_template_directory_uri().'/Js/com/hbgMenu.min.js';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array();
      // 読み込むファイルのバージョン（省略可）.
      $ver = '';
      // JavaScriptの取込み実行
      wp_enqueue_script( $handle, $src, $deps, $ver );

      // パララックス効果用Scriptの読み込み
      // ハンドル名（識別要の文字列）.
      $handle = 'pallax_js';
      // 追加したいJavaScriptファイルのURL.
      $src = '//cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js';
      // $src = get_template_directory_uri().'/Js/com/rellax.min.js';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array( "hbgMenu_js" );
      // JavaScriptの取込み実行
      wp_enqueue_script( $handle, $src, $deps, $ver );

      // fontawesomeアイコン表示用Scriptの読み込み
      // ハンドル名（識別要の文字列）.
      $handle = 'fontAwesome_js';
      // 追加したいJavaScriptファイルのURL.
      $src = '//kit.fontawesome.com/2a411c1cdb.js';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array( "pallax_js" );
      // JavaScriptの取込み実行
      wp_enqueue_script( $handle, $src, $deps, $ver );

      // 全ページ共通要素表示用Scriptの読み込み
      // ハンドル名（識別要の文字列）.
      $handle = 'pageComElmDspCtr_js';
      // 追加したいJavaScriptファイルのURL.
      $src = get_template_directory_uri().'/Js/com/pageComElmDspCtr.min.js';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array();
      // JavaScriptの取込み実行
      wp_enqueue_script( $handle, $src, $deps, $ver );
        
      if ( is_home() || is_page( "ourskills" ) || is_page( "homeinspect" ) )  {
        // パララックス効果、rellax処理用インスタンス生成Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'rellaxImage_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/com/rellaxImage.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        // $deps = array( "hbgMenu_js", "pallax_js", "fontAwesome_js", "pageComElmDspCtr_js", "mainPageSlideshow_js" );
        $deps = array();
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );
      } 
      if ( is_home()                 ||
           is_archive()              ||
           is_category()             ||
           is_page( "homeinspect"  ) ||
           is_page( "homenewbuild" ) ||
           is_page( "homereform"   )    )  {
          //  is_single() )  {
        // パララックス効果、rellax処理用インスタンス生成Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'rellaxBgImage_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/com/rellaxBgImage.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        // $deps = array( "hbgMenu_js", "pallax_js", "fontAwesome_js", "pageComElmDspCtr_js", "mainPageSlideshow_js" );
        $deps = array();
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );
      }

      // 
      // $GB_menuPos = 2 「お約束できる技術力」
      // $GB_menuPos = 3 「住宅・新築/設計」
      // $GB_menuPos = 4 「住宅・リフォーム」
      // $GB_menuPos = 5 「お家の健康診断」
      // $GB_menuPos = 6 「ギャラリー」
      // $GB_menuPos = 7 「会社概要」
      // $GB_menuPos = 8 「個人情報保護指針」
      // $GB_menuPos = 9 「お問い合わせ」
      // 投稿ページ（single）
      if ( is_page("ourskills"     ) || 
           is_page("homenewbuild"  ) ||
           is_page("homereform"    ) ||
           is_page("homeinspect"   ) ||
           is_page("stconstgallery") ||
           is_page("companyprofile") ||
           is_page("privacypolicy" ) ||
           is_page("contactform"   ) ||
           is_single ()              ||
           is_archive()              ||
           is_404()                     )  {

        // jQueryの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'myjQuery360';
        // 追加したいJavaScriptファイルのURL.
        $src = "//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js";
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // GreenSock用Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'gsap_js';
        // 追加したいJavaScriptファイルのURL.
        $src = "//cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js";
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( "myjQuery360" );
        // Scriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // GreenSock用Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'scrollTrigger_js';
        // 追加したいJavaScriptファイルのURL.
        $src = "//cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js";
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( "gsap_js" );
        // Scriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        if ( is_page("contactform") )  {
          
          //  入力データ確認画面用、タイトル・記事本体を GSAP にてアニメーション表示Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'contactFormGSAP_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/contactForm/subPageArticlesDspCtr.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "autoKana_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

        } else if ( is_404() ) {

          // GreenSock用Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = '404GSAPExec_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/404/404PageGSAPDspCtr.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "gsap_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

        } else  {

          // GreenSock用Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'myGSAPExec_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/com/subPageGSAPDspCtr.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "gsap_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

        }

        // 
        // 住宅・新築/設計固有スクリプト取込み
        if ( is_page("homenewbuild") )  {

          // echo " >>>> Read homeNewBuild JavaScript \n";

          // 拡大表示用Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'homeNewBuild_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src =  get_template_directory_uri() . "/Js/homeNewBuild/homeNewBuild.min.js";
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "myGSAPExec_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

          // echo "【". $src ."】";

        // 
        // ギャラリー固有スクリプト取込み
        } else if ( is_page("stconstgallery") )  {

          // 拡大表示用Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'lightBox_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = "//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js";
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "gsap_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );         // for DEBUG!

          // 画像種別切替え用ローカルScriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'myGallaryExec_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/com/imgGallary.min.js';
          // $src = get_template_directory_uri().'/Js/com/imgGallary.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "lightBox_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );         // for DEBUG!

        } else if ( is_page("contactform") )  {

          // カナ文字入力チェック用jQueryの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'jQAutoKana_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/contactForm/jquery.autoKana.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "gsap_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );      

          // カナ文字入力チェックScriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'autoKana_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/contactForm/autoKanajQ.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "jQAutoKana_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

          // 画像種別切替え用ローカルScriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'myContactForm_js';
          // 追加したいサブページ利用GSAPアニメーションスクリプトのURL.
          $src = get_template_directory_uri().'/Js/contactForm/contactForm.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "contactFormGSAP_js" );
          // Scriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );
        
        } else if ( is_archive() || is_single() )  {

          // アーカイブページ内アーカイブリスト表示処理Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'archiveList_js';
          // 追加したいJavaScriptファイルのURL.
          $src = get_template_directory_uri().'/Js/singleArchive/jquery.archiveList.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "scrollTrigger_js" );
          // JavaScriptの取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

          // アーカイブページサイドバー内スクロールバー表示制御Scriptの読み込み
          // ハンドル名（識別要の文字列）.
          $handle = 'scrollBarCtr_js';
          // 追加したいJavaScriptファイルのURL.
          $src = get_template_directory_uri().'/Js/singleArchive/js_scrollBarCtl.min.js';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( "archiveList_js" );
          // スクロール表示制御の取込み実行
          wp_enqueue_script( $handle, $src, $deps, $ver );

        }

      // 
      // 「メインページ（front-page.php）」$GB_menuPos = 1;
      } else  {

        // jQueryの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'myjQuery360';
        // 追加したいJavaScriptファイルのURL.
        $src = "//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js";
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // スライドショー用Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'flexSlider_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/com/jquery.flexslider-min.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        // $deps = array( "myjQuery" );
        $deps = array( "myjQuery360" );
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // ふわり横から・下から表示用Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'fuwariAppearElm_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/com/fuwariAppearElmOnScrollUp.min.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( "flexSlider_js" );
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // トップページ内スライドショー固有処理Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'mainPageSlideshow_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/com/mainPageSlideshow.min.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( "pageComElmDspCtr_js" );
        // JavaScriptの取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

        // アーカイブページサイドバー内スクロールバー表示制御Scriptの読み込み
        // ハンドル名（識別要の文字列）.
        $handle = 'scrollBarCtr_js';
        // 追加したいJavaScriptファイルのURL.
        $src = get_template_directory_uri().'/Js/singleArchive/js_mainPageCatBtnClk.min.js';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // スクロール表示制御の取込み実行
        wp_enqueue_script( $handle, $src, $deps, $ver );

      }
    }

    // enqueue：「ＦＩＦＯスタック」に積み込む事
    // dequeue：「ＦＩＦＯスタック」から取り出す事（古い物から取り出す）
    add_action( 'wp_enqueue_scripts', 'init_myJavaScript');

  }
?>