//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
// 
// ■【contactFormCtr】のみにて利用
// 　編集・確認・送信の処理に応じて、タイトル・コンテンツ・背景画像をアニメ表示する
// 　************************************************************************
document.addEventListener( 'DOMContentLoaded', function() {

  // console.log( "\n >>>>> Enter【subPageArticlesDspCtr.js】>>>>> " );

  // let pageFlag = document.getElementById( 'pageFlag' ).title;

  let pageFlag = "2";
  if (      document.getElementById( 'pageFlag-0' ) != null )  { pageFlag = "0"; }
  else if ( document.getElementById( 'pageFlag-1' ) != null )  { pageFlag = "1"; }
  else                                                         { pageFlag = "2"; }

  // console.log( pageFlag );
  // console.log( pageFlag );
  // console.log( pageFlag );
  // console.log( pageFlag );
  // console.log( pageFlag );

  // お問い合わせフォームコントローラ機能「編集画面」
  if ( pageFlag == "0" )  {
    $pageTitle    = "#pageTitle";
    $detailInfo   = "#detailInfo";
    $pageCthImage = "#pageCthImage";
    $trigger      = "#section-1";

  // お問い合わせフォームコントローラ機能「確認画面」
  } else if ( pageFlag == "1" )  {
    $pageTitle    = "#pageTitle-1";
    $detailInfo   = "#detailInfo-1";
    $pageCthImage = "#pageCthImage-1";
    $trigger      = "#section-0";

  // お問い合わせフォームコントローラ機能「送信完了画面」
  } else {
    $pageTitle    = "#pageTitle-2";
    $detailInfo   = "#detailInfo-2";
    $pageCthImage = "#pageCthImage-2";
    $trigger      = "#section-2";
  }
  // 
  //  クライアント画面サイズ認識：レスポンシヴ対応用
  if (window.matchMedia('(max-width: 799px)').matches) {
    //スマホ処理
    // document.querySelector( 'body' ).classList.add( 'mobile' );

    //MB処理    
    // console.log( "\n\n >>>>>【subPageGSAPDspCtr.js】Mobile Device Size 認識！\n\n" );
        
    // 
    // キャッチコピー表示
    gsap.to( $pageTitle, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 3.0,  // 1.8 (like2.5)
      scrollTrigger: {
        trigger: $trigger,  //アニメーションが始まるトリガーとなる要素
        start: 'top 70%', //アニメーションが始まる位置
        end:   'top 70%', //アニメーションが終了する位置
        // scrub: true,
        // markers: true,
      }
    });
    // 
    // ページ記事本体表示
    gsap.to( $detailInfo, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 3.0,  // 1.8 (like2.5)
      scrollTrigger: {
        trigger: $trigger,  //アニメーションが始まるトリガーとなる要素
        start: 'top center', //アニメーションが始まる位置
        end:   'top center', //アニメーションが終了する位置
        // scrub: true,
        // markers: true,
      }
    });
    // 
    // 理念・イメージ画像表示
    gsap.to( $pageCthImage, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 2.5,  // 1.8 (like2.5)
      scrollTrigger: {
        trigger: $trigger,  //アニメーションが始まるトリガーとなる要素
        start: 'top 30%', //アニメーションが始まる位置
        end:   'top 30%', //アニメーションが終了する位置
        // scrub: true,
        // markers: true,
      }
    });

  } else if (window.matchMedia('(min-width:768px)').matches) {
    //PC処理    
    // console.log( "\n\n >>>>>【subPageGSAPDspCtr.js】PC Device Size 認識！\n\n" );

    gsap.timeline()
    
    // 
    // キャッチコピー表示
    .to( $pageTitle, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 3.0,  // 1.8 (like2.5)
    } )
    // 
    // ページ記事本体表示
    .to( $detailInfo, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 3.0,  // 1.8 (like2.5)
    }, "<2" )
    // 
    // 理念・イメージ画像表示
    .to( $pageCthImage, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 2.5,  // 1.8 (like2.5)
    }, '<0' )
  }

  // console.log( "\n <<<<< Exit-【subPageArticlesDspCtr.js】<<<<< \n" );

});

