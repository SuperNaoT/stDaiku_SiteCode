<?php

  // 
  // *******************************************************************************
  // *******************************************************************************
  // *******************************************************************************
  // *******************************************************************************
  // *******************************************************************************
  // ★ ブロックエディタに適用したい【CSSファイル】の読み込み
  //    ☛ フロント：ブロックエディタ用CSSの追加
  // 
  // 【参考】「https://rfs.jp/sb/wordpress/wp-lab/add-block-style.html」
  // 　　　　「https://webnote.i-sight.jp/gutenberg-block-editor-css/」
  // *******************************************************
  // *******************************************************
  function blockEditor_css() {

    // echo " >>>>> block_editor_css() ";

    // 
    // ブロックエディタ用スタイル機能をテーマに追加
    add_theme_support( 'editor-styles' );

    // 
    // ブロックエディタ用CSSファイルの読み込み
    add_editor_style( '/assets/scss/blockEditor/style.min.css' );

  }
  add_action( 'after_setup_theme', 'blockEditor_css' );

  // *******************************************************
  //    ☛ 管理画面：ブロックエディタ用CSSの追加
  // *******************************************************
  function blockEditor_css_dashboard( $hook_suffix ) {

    // 
    // 新規・投稿編集ページの場合のみ読込む
    if ( $hook_suffix === 'post.php' || $hook_suffix === 'post-new.php' )  {

      // 
      // CSSファイルパスの生成
      $uri = get_template_directory_uri() . '/assets/scss/blockEditor/style.min.css';
      // 
      // CSSファイルの読み込み
      wp_enqueue_style( 'smart-style', $uri, array(), wp_get_theme()->get( 'Version' ) );

      // 
      // JavaScriptファイルパスの生成
      $uri = get_template_directory_uri() . '/Js/blockEditor/blockEditorStyle.js';
      // 
      // JavaScriptファイルの読み込み
      wp_enqueue_script( 'smart-script', $uri, array(), wp_get_theme()->get( 'Version' ), true );
    }
  }
  add_action( 'admin_enqueue_scripts', 'blockEditor_css_dashboard');

  // *******************************************************
  // *******************************************************

  // ========================================================
  //  管理画面ブロックエディタ用のJSを追加
  //  enqueue_block_editor_asset：ブロックエディタ用のフック
  // 【ブロック一覧参考】「https://wemo.tech/2166」
  // =========================================================
  add_action( 'enqueue_block_editor_assets', function() {
    // ブロック用のJSは第3引数を指定する必要がある
    wp_enqueue_script( 'new-theme-editor-js', get_theme_file_uri( '/Js/blockEditor/blockEditorStyle.js' ),
      [
        'wp-element',
        'wp-rich-text',
        'wp-editor',
      ] 
    );
  });

?>