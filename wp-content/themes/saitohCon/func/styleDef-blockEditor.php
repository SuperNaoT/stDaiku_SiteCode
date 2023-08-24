<?php
  function custom_inline_style() {
    if( is_single() ) {
  
      // CSSスタイルファイルをキューに追加
      wp_register_style( 'style' , false );
      wp_enqueue_style ( 'style' );
  
      //追加するCSS
      $css =
      ".heading-primary-red {
        font-size: 36px !important;
        color: red !important;
        text-shadow:1px 1px 0 #333, -1px -1px 0 #333,
        -1px 1px 0 #333, 1px -1px 0 #333,
        0px 1px 0 #333, 0-1px 0 #333,
        -1px 0 0 #333, 1px 0 0 #333;
        padding-left: 50px;
      }"
      .
      ".heading-primary {
        font-size: 28px !important;
        color: #fffafa !important;
        text-shadow:1px 1px 0 #333, -1px -1px 0 #333,
        -1px 1px 0 #333, 1px -1px 0 #333,
        0px 1px 0 #333, 0-1px 0 #333,
        -1px 0 0 #333, 1px 0 0 #333;
        padding-left: 50px;
      }"
      .
      ".heading-primary-blue {
        color: blue !important;
        text-shadow:1px 1px 0 #333, -1px -1px 0 #333,
        -1px 1px 0 #333, 1px -1px 0 #333,
        0px 1px 0 #333, 0-1px 0 #333,
        -1px 0 0 #333, 1px 0 0 #333;
      }"
      .
      ".blockEditor-displayNone {
        display: none;
      }"
      .
      ".blockEditor-paragraph {
        color: #333;
        font-family: 'M PLUS Rounded 1c', 'Hiragino Kaku Gothic ProN', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, sans-serif;

        font-size: 16px;
      }"
      // 👆 $articleCharSize 16px
      .
      ".blockEditor-marginTopBottom20 {
        margin-top:    20px;
        margin-bottom: 20px;
      }"
      .
      ".blockEditor-mainImage {
        width: 80%;
        height: auto;
        margin: 0 auto;
        border: 1px solid blue;
        border-radius: 20px;
      }"
      ;
  
      // インラインにCSSの内容を出力
      wp_add_inline_style( 'style', $css );
    }
  }
  // add_action( 'wp_enqueue_scripts', 'custom_inline_style' );

?>