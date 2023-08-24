//
//「documet/HTML全て読み込んだら実行される関数」として定義する。
//「必ず」記述する。
//
document.addEventListener( 'DOMContentLoaded', function() {

  // 
  //  クライアント画面サイズ認識：レスポンシヴ対応用
  if (window.matchMedia('(max-width: 799px)').matches) {
    
  } else if (window.matchMedia('(min-width:768px)').matches) {
    // PC処理    

  }

  // 
  // 詳細情報表示可能「<li></li>」、hoverイベント認識処理

  // ターゲット、説明文章初期化設定：非表示
  const expElms = document.getElementsByClassName( 'eachDExp' );

  // console.log( expElms.length );

  let                listItems = document.getElementById( "listParentElm"   ).children;
  for( let i=0 ; i < listItems.length ; i++ ) {
    listItems[i].addEventListener('mouseover', function() {
      listItems[i].style.color  = 'red';
      listItems[i].style.cursor = 'help';
      listItems[i].classList.add('active'  );
        // expElms[i].style.left   = mousePositionX;
        // expElms[i].style.top    = mousePositionY;
        // expElms[i].style.left   = "100px";
        // expElms[i].style.top    = "100px";
        expElms[i].classList.add('-visible');
      });
    listItems[i].addEventListener('mouseleave', function() {
      listItems[i].style.color = 'black';
      listItems[i].classList.remove('active'  );
        expElms[i].classList.remove('-visible');
      });
  }
  let                listItems2 = document.getElementById( "listParentElm2" ).children;
  for( let i=0 ; i < listItems2.length ; i++ ) {
    listItems2[i].addEventListener('mouseover', function() {
      listItems2[i].style.color  = 'red';
      listItems2[i].style.cursor = 'help';
      listItems2[i].classList.add('active'  );
      //  expElms[i].style.left   = mousePositionX;
      //  expElms[i].style.top    = mousePositionY;
       expElms[i+7].classList.add('-visible');
    });
    listItems2[i].addEventListener('mouseleave', function() {
      listItems2[i].style.color = 'black';
      listItems2[i].classList.remove('active' );
       expElms[i+7].classList.remove('-visible');
    });
  }
})