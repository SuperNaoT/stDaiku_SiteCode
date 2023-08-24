// 
//【JavaScript】 
// ■ 各種イベント対応、コールバックノーティファイア登録
// ****************************************************************************
document.addEventListener( 'DOMContentLoaded', function() {

  // console.log( "\n >>>>> Enter setup RELLAX >>>>>" );

  //
  // ******************************************************************
  // ******************************************************************
  // 
  // 【Knowledge】＊＊＊＊＊
  // 【関数名】function(u)
  //  機能：ユーザーエージェントでスマホとタブレットを判定
  //  引数：ユーザーエージェント情報
  // ***************************************
  const _ua_iphone = (function(u){
    return {
      // Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1) 
      //   ||    u.indexOf("ipad") != -1
      //   ||   (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      //   ||   (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      //   ||    u.indexOf("kindle") != -1
      //   ||    u.indexOf("silk") != -1
      //   ||    u.indexOf("playbook") != -1,
      // Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      //   ||    u.indexOf("iphone") != -1
      //   ||    u.indexOf("ipod") != -1
      //   ||   (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      //   ||   (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      //   ||    u.indexOf("blackberry") != -1
      Mobile: u.indexOf("iphone") != -1
    }
  })(window.navigator.userAgent.toLowerCase());

  // 
  // *****************************************************
  // Pallax効果有効化
  // *****************************************************
  // 
  //スマホとタブレットではなかったら読み込む
  // if(!_ua.Mobile && !_ua.Tablet){
  //   let rlxImgM = new Rellax('.js-expMImage img', {center:true, breakpoints:[576,768,1201]} );
  // }
  // 
  let rlxImg   = new Rellax('.js-rlxImg',           {center:true} );
  // let bgRlxImg = new Rellax('.js-backgroundRlxImg', {center:true} );

  // console.log( " <<<<< Exit- setup RELLAX <<<<< \n" );

})