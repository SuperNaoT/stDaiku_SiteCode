//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  // 
  // スクロールアップに応じて、指定要素を「フワッと」表示
  // 
  // .sa–lr        : 左から右にフェードイン
  // .sa–rl        : 右から左にフェードイン
  // .sa–up        : 下から上にフェードイン
  // .sa–down      : 上から下にフェードイン
  // .sa–scaleUp   : 縮小した状態から拡大しながらフェードイン
  // .sa–scaleDown : 拡大した状態から縮小しながらフェードイン
  // .sa–rotateL   : 左に回転しながらフェードイン
  // .sa–rotateR   : 右に回転しながらフェードイン

  // 
  // 「フワッと」表示対象の全要素を取得
  let scrollAnimationElm = document.querySelectorAll('.sa');

  // 
  // 「フワッと」表示対象要素、出現・消失用クラスの制御
  let scrollAnimationFunc = function() {

    // console.log( "\n >>>>> Enter fuwariAppearElm >>>>> " );
    // console.log( " ? 現在ページ内位置　【" + window.innerHeight + "】" );

    // 要素数分配列制御
    for(let i = 0; i < scrollAnimationElm.length; i++) {

      // 
      // 「フワッと」表示要素の頭が、
      // 「表示位置からはみ出た高さ」、すなはち動いて見える距離の指定
      let triggerMargin = 125;

      // console.log( " ＞ 大きい？ ターゲット表示位置（" + i + "）【" + scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin + "】" );


      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('show');
      // 
      // 以下の”show”削除を活かすと、スクロールアップ時に「ターゲット要素が消える」状態に。
      // スクロールに応じて、何度も現れ・消えるを繰り返す様に成ります。
      } else  {
        // scrollAnimationElm[i].classList.remove('show');
      }
    }

    // console.log( " <<<<< Exit- fuwariAppearElm <<<<< \n" );

  }

  window.addEventListener('load',   scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);

});
