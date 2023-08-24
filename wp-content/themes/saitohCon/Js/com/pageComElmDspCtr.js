//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  
                                                            let  pageFlag = "2";
  if (      document.getElementById( 'pageFlag-0' ) != null )  { pageFlag = "0"; }
  else if ( document.getElementById( 'pageFlag-1' ) != null )  { pageFlag = "1"; }
  else                                                         { pageFlag = "2"; }

  // let pageFlag = document.getElementById( 'pageFlag' ).title;


// 
// ********************************************************************
// ********************************************************************
// ********************************************************************
// 当スクリプトは、
// １．スクロールガイド
// ２．ヘッダー部固定バナー
// ３．お問い合わせ/電話/ページトップアイコン
// の表示制御を行うスクリプト群
// ********************************************************************
// ********************************************************************
// ********************************************************************
  // 
  // スクロール対応、表示/非表示制御：コンタクト用アイコンパッケージ
  const contactElm  = document.getElementById('navBtnCtr'   );
  const fixedNavElm = document.getElementById('fixedNavElm' );
  let   headerHgt   = document.getElementById('pageTop'     ).clientHeight;
 
  // ******************************************************************
  // ******************************************************************
  // 
  // 【関数名】window.addEventListner( LOAD )
  //  機能：画面表示・ロードイベント対応処理
  //  引数：e / エレメント情報
  // ***************************************
  window.addEventListener( 'load', ()=>{

    // // 
    // //  クライアント画面サイズ認識：レスポンシヴ対応用
    // if (window.matchMedia('(max-width: 799px)').matches) {
    //   //スマホ処理
    //   document.querySelector( 'body' ).classList.add( 'mobile' );
      
    //   console.log( "\n\n >>>>>【pageComElmDspCtr.js】Mobile Device Size 認識！\n\n" );

    // } else if (window.matchMedia('(min-width:768px)').matches) {
    //   //PC処理
    //   console.log( "\n\n >>>>>【pageComElmDspCtr.js PC Device Size 認識！\n\n" );
    // }

    // 
    // スクロール、カレント位置取得
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // 
    // スクロール対応、表示/非表示制御：コンタクト用アイコンパッケージ
    // スクロール位置が、ヘッダー・セクション１の高さ分を超えた？
    if (scrollTop <= headerHgt ) {
      // コンタクトアイコンを消去
       contactElm.style.opacity    = 0;
       contactElm.style.visibility = "hidden";
      if ( pageFlag != 1 )  {
        // 固定ナビゲーションメニューを消去
        fixedNavElm.style.opacity    = 0;
        fixedNavElm.style.visibility = "hidden";
      }
    } else {
      // コンタクトアイコンを表示
       contactElm.style.opacity    = 1;
       contactElm.style.visibility = "visible";
      if ( pageFlag != 1 )  {
        // 固定ナビゲーションメニューを消去
        fixedNavElm.style.opacity    = 1;
        fixedNavElm.style.visibility = "visible";
      }
    }

    // 
    // スクロール対応、表示/非表示制御：スクロール促進ガイド
    // スクロール位置が、フッタートップの位置マイナス１００ｐｘを超えた？
    scrollGuideDispCtr( scrollTop );

  });

  // ******************************************************************
  // ******************************************************************
  // 
  // 【関数名】window.onscroll()
  //  機能：スクロールイベント対応処理
  //  引数：e / エレメント情報
  // ***************************************
  window.onscroll = function(e) {
    // console.log( ` >>>>> Start window.onscroll( e ) >>>>> `);
      
    // 
    // スクロール、カレント位置取得
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let fixedNavE = headerHgt + 500;

    let   footer_Inf = document.getElementById('footerPos'           ).getBoundingClientRect();
    let   footer_Hgt = document.getElementById('footerPos'           ).clientHeight;
    let   footer_Pos = footer_Inf.top+window.pageYOffset-footer_Hgt;
    if (  footer_Pos < 0 )  { footer_Pos = 0; }

    // 
    // スクロール対応、表示/非表示制御：コンタクト用アイコンパッケージ
    // スクロール位置が、ヘッダー・セクション１の高さ分を超えた？

    // console.log( " ????? スクロールトップ位置　　　【" + scrollTop + "】\n" );
    // console.log( " ????? 固定ナビメニュー消去位置　【" + fixedNavE + "】\n" );

    // 
    // コンタクトフォーム・入力データ確認画面では、固定ナビゲーションメニューは非表示
    if ( pageFlag != 1 )  {
      if (scrollTop <= fixedNavE || scrollTop > footer_Pos ) {
        // 固定ナビゲーションメニューを消去
        // console.log(" !!!!! 固定ナビゲーションメニューを消去 !!!!!");
        fixedNavElm.style.opacity      = 0;
        fixedNavElm.style.visibility   = "hidden";
      } else {
        // 固定ナビゲーションメニューを消去
        fixedNavElm.style.opacity      = 1;
        fixedNavElm.style.visibility   = "visible";
      }
    }

    if (scrollTop <= headerHgt ) {
      // コンタクトアイコンを消去
      contactElm.style.opacity      = 0;
      contactElm.style.visibility   = "hidden";
    } else {
      // コンタクトアイコンを表示
      contactElm.style.opacity      = 1;
      contactElm.style.visibility   = "visible";
     }

    // // 
    // // スクロール対応、表示/非表示制御：スクロール促進ガイド
    // // スクロール位置が、フッタートップの位置マイナス１００ｐｘを超えた？    
    scrollGuideDispCtr( scrollTop );

    // 
    // console.log( ` <<<<< Exit  window.onscroll( e ) <<<<< `);
  }

  function scrollGuideDispCtr( scrollPos ) {
    // console.log( ` >>>>> Enter scrollGuideDspCtr() >>>>> `);

    const greetA_Elm = document.getElementById('dspCtr-greetingArea' );
    const scroll_Elm = document.getElementById('scrollGuideArea'     );
    let   footer_Inf = document.getElementById('footerPos'           ).getBoundingClientRect();
    let   footer_Hgt = document.getElementById('footerPos'           ).clientHeight;
    let   footer_Pos = footer_Inf.top+window.pageYOffset-footer_Hgt;
    if (  footer_Pos < 0 )  { footer_Pos = 0; }

    // console.log( " ????? フッター先頭位置　【" + footer_Inf.top + "】\n" );
    // console.log( " ????? フッター部・高さ　【" + footer_Hgt + "】\n" );
    // console.log( " ????? ページオフセット量【" + window.pageYOffset + "】\n" );

    // console.log( " >>>>> フッター　位置【" + footer_Pos + "】\n" );
    // console.log( " >>>>> スクロール位置【" + scrollPos + "】" );

    // 
    // スクロール対応、表示/非表示制御：スクロール促進ガイド
    // スクロール位置が、フッタートップの位置マイナス１００ｐｘを超えた？
    // if (scrollPos >= (footer_Inf.top+window.pageYOffset-footer_Hgt) ) {
    if (scrollPos > footer_Pos ) {
      // 挨拶バナー・スクロールガイドを消去
      // console.log( " 挨拶バナー・スクロールガイドを【消去】" );
      scroll_Elm.style.opacity    = 0;
      scroll_Elm.style.visibility = "hidden";
      greetA_Elm.style.opacity    = 0;
      greetA_Elm.style.visibility = "hidden";
    } else {
      // 挨拶バナー・スクロールガイドを表示
      // console.log( " 挨拶バナー・スクロールガイドを【表示】" );
      scroll_Elm.style.opacity    = 1;
      scroll_Elm.style.visibility = "visible";
      greetA_Elm.style.opacity    = 0.8;
      greetA_Elm.style.visibility = "visible";
    }

    // console.log( ` <<<<< Exit  scrollGuideDspCtr() <<<<< `);
  }

});
