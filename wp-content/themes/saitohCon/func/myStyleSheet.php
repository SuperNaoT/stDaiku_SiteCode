<?php

  if ( ! is_admin() ) {
    
    // 
    // *******************************************************
    // *******************************************************
    // ★ 【独自スタイルシート】の取込み
    // *******************************************************
    // *******************************************************
    function add_myStyleSheet() {

      // ハンドル名（識別要の文字列）.CSSリセット用
      $handle = 'resetCss';
      // 追加したいCSSのURL.
      $src = get_template_directory_uri().'/assets/clearEnvStyle.min.css';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array();
      // 読み込むファイルのバージョン（省略可）.
      $ver = '';
      // 'all'、'screen'、'handheld'、'print' など 対象とするメディア.
      $media = 'all';
      // CSSファイル取込実行
      wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // ハンドル名（識別要の文字列）.ハンバーガーメニュー表示用
      $handle = 'hbgMenu_css';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array('resetCss');
      // 追加したいCSSのURL.
      $src = get_template_directory_uri().'/assets/hbgMenu.min.css';
      // CSSファイル取込実行
      wp_enqueue_style( $handle, $src, $deps, $ver, $media );
      
      // ハンドル名（識別要の文字列）.Googleフォント取込み用
      $handle = 'googleApis_css';
      // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      $deps = array();
      // 追加したいCSSのURL.
      $src = '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap';
      // CSSファイル取込実行
      wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      
      // // 
      // // 「投稿ページ（single）」
      // // サイドバー追加にて変更になった部分
      // if ( is_single() )  {

      //   // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
      //   $handle = 'newsBlog_css';
      //   // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
      //   $deps = array();
      //   // 追加したいCSSのURL.
      //   $src = get_template_directory_uri().'/assets/scss/contents/newsBlog/style.min.css';
      //   // CSSファイル取込実行
      //   wp_enqueue_style( $handle, $src, $deps, $ver, $media );
      
      // 
      // 「投稿ページ（single）」
      // 「投稿ページ（archive）」
      // } else if ( is_archive() )  {
      if ( is_single() || is_archive() || is_search() )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'archive_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/archive/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

        // 
        // サイドバー追加にて変更になった部分
        if ( is_single() )  {

          // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
          $handle = 'forSingle_css';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( 'archive_css' );
          // 追加したいCSSのURL.
          $src = get_template_directory_uri().'/assets/scss/contents/archive/forSingle.min.css';
          // CSSファイル取込実行
          wp_enqueue_style( $handle, $src, $deps, $ver, $media );
 
          // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
          $handle = 'forWPBlock_css';
          // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
          $deps = array( 'forSingle_css' );
          // 追加したいCSSのURL.
          $src = get_template_directory_uri().'/assets/scss/contents/archive/forWPBlock.min.css';
          // CSSファイル取込実行
          wp_enqueue_style( $handle, $src, $deps, $ver, $media );
        }

      // 
      // 「お約束できる技術力」$GB_menuPos = 2;
      } else if ( is_404() )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = '404Page_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/404/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「お約束できる技術力」$GB_menuPos = 2;
      } else if ( is_page("ourskills") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'ourSkill_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/ourSkills/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「住宅・新築/設計」$GB_menuPos = 3;
      } else if ( is_page("homenewbuild") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'homeNewBuild_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/homeNewBuild/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「住宅リフォーム」$GB_menuPos = 4;
      } else if ( is_page("homereform") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'homeReform_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/homeReform/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「お家の健康診断」$GB_menuPos = 5;
      } else if ( is_page("homeinspect") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'homeInspect_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/homeInspect/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「ギャラリー」$GB_menuPos = 6;
      } else if ( is_page("stconstgallery") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'stConstGallery_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/stConstGallery/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'lightBox_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「会社のご案内」$GB_menuPos = 7;
      } else if ( is_page("companyprofile") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'companyProfile_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/companyProfile/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「会社のご案内」$GB_menuPos = 8;
      } else if ( is_page("privacypolicy") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'privacyPolicy_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/privacyPolicy/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「ご相談・お問い合わせ」$GB_menuPos = 9;
      } else if ( is_page("contactform") )  {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'contactForm_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array();
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/contactForm/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      // 
      // 「メインページ（front-page.php）」$GB_menuPos = 1;
      } else {

        // ハンドル名（識別要の文字列）.トップページ表示、個別定義用
        $handle = 'topPage_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( 'hbgMenu_css' );
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/scss/contents/a_index/style.min.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

        // ハンドル名（識別要の文字列）.トップページ内スライドショー表示用
        $handle = 'flexSlider_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( 'topPage_css' );
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/flexslider.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

        // ハンドル名（識別要の文字列）.トップページ内ふわり現れ表示用
        $handle = 'fuwariAppearElm_css';
        // 特定のCSSの後で読み込ませたい場合はそのハンドル名（指定がなければ空の array() でも可）.
        $deps = array( 'flexSlider_css' );
        // 追加したいCSSのURL.
        $src = get_template_directory_uri().'/assets/fuwariAppearElmOnScrollUp.css';
        // CSSファイル取込実行
        wp_enqueue_style( $handle, $src, $deps, $ver, $media );

      }
    }

    // enqueue：「ＦＩＦＯスタック」に積み込む事
    // dequeue：「ＦＩＦＯスタック」から取り出す事（古い物から取り出す）
    add_action( 'wp_enqueue_scripts', 'add_myStyleSheet' );

  }

?>