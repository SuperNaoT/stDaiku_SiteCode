//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  // 
  //  クライアント画面サイズ認識：レスポンシヴ対応用
  if (window.matchMedia('(max-width: 799px)').matches) {
    // Mobile処理    
        
    const tgtUL = document.getElementById ( "chgLabel" ) ;
    const tgtLI = tgtUL.children [ 1 ] ;
    tgtLI.textContent = "・住宅診断";

  } else if (window.matchMedia('(min-width:768px)').matches) {
    // PC処理    

  }

});