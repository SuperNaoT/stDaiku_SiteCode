//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  // 
  //  クライアント画面サイズ認識：レスポンシヴ対応用
  if (window.matchMedia('(max-width: 799px)').matches) {
    // Mobile処理    
    

  } else if (window.matchMedia('(min-width:768px)').matches) {
    // PC処理    

  }

  // 
  //  トップページ／サイドバー内カテゴリー種別選択ボタン、クリックイベント発生

  let jsMainPageCatBtns = document.getElementsByClassName( "js-catBtns" );

  // console.log( " >>>>> Category select button's count [ " + jsMainPageCatBtns.length + " ]\n" );

  for( let i=0 ; i<jsMainPageCatBtns.length; i++ )  {
    jsMainPageCatBtns[i].addEventListener( "click",
    ()=>{      
      // 
      // 時代リスト・スクロール位置クリア
      localStorage.clear();

      // console.log( " >>>>> ScrollTop 設定（MAIN） [ クリア！ ]\n" );

    }, false);
  }

});