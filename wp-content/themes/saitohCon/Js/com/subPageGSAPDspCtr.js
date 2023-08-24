//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  // console.log( "\n\n >>>>> Enter【subPageGSAPDspCtr.js】>>>>>" );


  // 
  //  クライアント画面サイズ認識：レスポンシヴ対応用
  if (window.matchMedia('(max-width: 799px)').matches) {
    //スマホ処理
    // document.querySelector( 'body' ).classList.add( 'mobile' );

    //MB処理    
    // console.log( "\n\n >>>>>【subPageGSAPDspCtr.js】Mobile Device Size 認識！\n\n" );
        
    // 
    // キャッチコピー表示
    if ( document.getElementById('section-1') != null )  {
      gsap.to( '#pageTitle', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
        scrollTrigger: {
          trigger: '#section-1',  //アニメーションが始まるトリガーとなる要素
          start: 'top 70%', //アニメーションが始まる位置
          end:   'top 70%', //アニメーションが終了する位置
          // scrub: true,
          // markers: true,
        }
      });

      // 
      // ページ記事本体表示
      gsap.to( '#detailInfo', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
        scrollTrigger: {
          trigger: '#section-1',  //アニメーションが始まるトリガーとなる要素
          start: 'top center', //アニメーションが始まる位置
          end:   'top center', //アニメーションが終了する位置
          // scrub: true,
          // markers: true,
        }
      });
    }
    else  {
      gsap.timeline()
      // 
      // キャッチコピー表示
      .to( '#pageTitle', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      } )
      // 
      // ページ記事本体表示
      .to( '#detailInfo', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      }, "<2" )    
    }

    // 
    // 理念・イメージ画像表示
    if ( document.getElementById('pageCthImage') != null )  {

      if ( document.getElementById('section-1') != null )  {

        gsap.to( '#pageCthImage', {
          x: 0,
          y: 0,
          opacity: 1,
          duration: 2.5,  // 1.8 (like2.5)
          scrollTrigger: {
            trigger: '#section-1',  //アニメーションが始まるトリガーとなる要素
            start: 'top 30%', //アニメーションが始まる位置
            end:   'top 30%', //アニメーションが終了する位置
            // scrub: true,
            // markers: true,
          }
        });

      } else  {
        gsap.timeline()

        // 
        // 理念・イメージ画像表示
        .to( '#pageCthImage', {
          x: 0,
          y: 0,
          opacity: 1,
          duration: 2.5,  // 1.8 (like2.5)
        })
      }

    }

    if ( document.getElementById('detailInfo2') != null )  {
      gsap.timeline()
      // 
      // ページ記事本体表示
      .to( '#detailInfo2', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      }, "<2" )
    }

  } else if (window.matchMedia('(min-width:768px)').matches) {
    //PC処理    
    // console.log( "\n\n >>>>>【subPageGSAPDspCtr.js】PC Device Size 認識！\n\n" );

    if ( document.getElementById('pageCthImage') != null )  {

      gsap.timeline()
      
      // 
      // キャッチコピー表示
      .to( '#pageTitle', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      } )
      // 
      // ページ記事本体表示
      .to( '#detailInfo', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      }, "<2" )    
      // 
      // 理念・イメージ画像表示
      .to( '#pageCthImage', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 2.5,  // 1.8 (like2.5)
      }, '<0' )

    // 
    // 会社案内ページは「#pageCthImage」が無い！
    } else  {

      gsap.timeline()
      
      // 
      // キャッチコピー表示
      .to( '#pageTitle', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      } )
      // 
      // ページ記事本体表示
      .to( '#detailInfo', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      }, "<2" )    

    }

    if ( document.getElementById('detailInfo2') != null )  {
      gsap.timeline()
      // 
      // ページ記事本体表示
      .to( '#detailInfo2', {
        x: 0,
        y: 0,
        opacity: 1,
        duration: 3.0,  // 1.8 (like2.5)
      }, "<2" )
    }

  }

  // console.log( " <<<<< Exit-【subPageGSAPDspCtr.js】<<<<< \n\n" );

});
