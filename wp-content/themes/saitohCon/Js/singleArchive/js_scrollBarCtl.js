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

  // 移動させたい、スクロールを持つ要素を取得
  let targetElm    = document.getElementById("js-eraList"        );
  let resetSetElm  = document.getElementById("js-catBtnList"     );
  // let resetSetElmM = document.getElementById("js-catBtnList-main");
  let tgtScrPos;

  // 
  //  ターゲット要素上、クリックイベント発生
  targetElm.onclick = function() {

    // 移動させたい、スクロールを持つ要素を取得
    // tgtScrPos = targetElm.scrollTop;
                                 tgtScrPos = targetElm.scrollTop;
    localStorage.setItem( 'key', tgtScrPos );

    // console.log( " >>>>> ScrollTop 確保（１） [ " + tgtScrPos + " ]\n" );

  };

  $( document ).ready( function() {
    let pos = localStorage.getItem('key');
    $(targetElm).animate({ scrollTop: pos }, 'slow');

    // console.log( " >>>>> ScrollTop 設定（２） [ " + pos + " ]\n" );

  });

  // 
  //  アーカイブ／個別投稿画面内カテゴリー種別選択ボタン、クリックイベント発生
  resetSetElm.onclick = function() {

    // 
    // 時代リスト・スクロール位置クリア
    localStorage.clear();

    // console.log( " >>>>> ScrollTop 設定（３） [ クリア！ ]\n" );
  };

});