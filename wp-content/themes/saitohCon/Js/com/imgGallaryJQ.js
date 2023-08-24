
$(window).on('load',function(){ //画面遷移時にギャラリーの画像が被らないように、すべての読み込みが終わった後に実行する

  //＝＝＝並び替えボタン設定
  $('.sort-btn li').on('click',function(){      //並び替えボタンをクリックしたら
    $(".sort-btn .active").removeClass("active"); //並び替えボタンに付与されているactiveクラスを全て取り除き
    var className = $(this).attr("class");      //クラス名を取得
        className = className.split(' ');       //「sortXX active」のクラス名を分割して配列にする
    $("."+className[0]).addClass("active");     //並び替えボタンに付与されているクラス名とギャラリー内のリストのクラス名が同じボタンにactiveクラスを付与
    if(className[0] == "all"){           //クラス名が「all（全て）」のボタンの場合は、
      grid.show('');               //全ての要素を出す
    }else{                      //それ以外の場合は
      grid.filter("."+className[0]);        //フィルターを実行
    }
  });
    
});