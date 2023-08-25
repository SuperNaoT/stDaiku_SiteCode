<?php

  //
  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // 
  // ■ デバッグ用フラグ
  // 
  //  false：アニメーション動作有り
  //  true ：アニメーション動作無し
  // 
  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  global $GB_SASTOP_FLAG;
         $GB_SASTOP_FLAG = false; 
        //  $GB_SASTOP_FLAG = true; 

  // 
  // ヘッダー部・横並びメインメニュー表示位置「１～ 
  global $GB_menuPos;

  // echo "\n\n\n >>>>> globalVariablesDef.php [\$GB_menuPos] ☛【". $GB_menuPos . "】\n";

  //
  // ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定
  //  ★ スクロール時表示・非表示する【固定位置表示ナビゲーションメニュー】の制御関連
  //     1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　
  //     2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。
  // 
  // 入力フォーム関連ページ指定フラグ
  // $GB_page_flag = 0：入力フォームページ
  // $GB_page_flag = 1：入力内容確認ページ
  // $GB_page_flag = 2：送信完了報告ページ
  global $GB_page_flag;

  // 
  // 各画面右下：電話・お問い合わせ・上移動アイコン表示制御フラグ
  global $GB_iconDspCtr;

  // 
  // 「archive.php」投稿一覧表示画面にて表示する、
  // 「タイトル文字列」格納用変数
  global $GB_blogListTitle;

  // 
  // 「archive.php」投稿一覧表示画面にて表示対象となる、
  // 「カテゴリー名称」格納用変数
  global $GB_categoryType;
  // 「カテゴリーＩＤ」格納用変数
  global $GB_currentCatID;

  global $GB_currentPage;
  //
  // 投稿一覧表示に於ける、表示件数指定 
  // Wordpress に於ける表示数とは別に、強制的に指定変更する
  // ★ 現在、トップページに於ける「NEWS一覧」のみで使用
  global $GB_countOfPosts;

  // 
  // クライアントデバイス種別判定フラグ
  // 投稿一覧表示に於ける、ページネーション文字列表示制御に利用
  global $GB_MOBILE_FLAG;

  // 
  // 各ページ内挨拶アニメーションバナー文字列
  global $DEF_frontPage_msg;
  global $DEF_pageOurSkills_msg;
  global $DEF_pageHomeNewBuild_msg;
  global $DEF_pageHomeReform_msg;
  global $DEF_pageHomeInspect_msg;
  global $DEF_pageCompanyProfile_msg;
  global $DEF_pagePrivacyPolicy_msg;
  global $DEF_pageArcGallery_msg;
  global $DEF_pageNotFound404_msg;

  $DEF_frontPage_msg          = '★【<span>齋藤建築</span>】の「<span class="spBlue">ホームページ</span>」へようこそ！　<span class="spBlue">木造住宅・新築/設計</span>は勿論の事、<span class="spBlue">耐震診断</span>・<span class="spBlue">耐震工事</span>・<span class="spBlue">建物診断</span> ☛ からの<span class="spBlue">リフォーム</span>迄、何でもお任せ下さい！　補助金に付いてもご相談下さい。　「<span>お家に関する専門店</span>」です・・・（<span class="spBlue">建築会社</span>・<span class="spBlue">一級建築士設計事務所</span>）';
  $DEF_pageOurSkills_msg      = '★ 齋藤建築【<span>お約束できる技術力</span>】　<span class="spBlue">木造住宅耐震診断士</span>／<span class="spBlue">住宅診断士</span>（<span>ホームインスペクター</span>）としての確かな技術力に基き、お住まいに成る皆さまにお喜び頂けるご提案を申し上げます・・・';
  $DEF_pageHomeNewBuild_msg   = '★ 齋藤建築【<span>木造住宅・新築/設計</span>】　【長期優良住宅・高度省エネ型（認定低炭素住宅）】補助金対象住宅のご提案を申し上げます。　お住まいに成る皆さまの想いを形に、ご満足頂けるご提案を申し上げます。';
  $DEF_pageHomeReform_msg     = '★ 齋藤建築【<span>住宅リフォーム</span>】　<span class="spBlue">木造住宅耐震診断士</span>／<span class="spBlue">住宅診断士</span>（<span>ホームインスペクター</span>）としての確かな技術力に基き、お住まいに成る皆さまのご要望に副ったご提案を申し上げます・・・';
  $DEF_pageHomeInspect_msg    = '★ 齋藤建築【<span>お家の健康診断</span>】「<span class="spBlue">築４１年以上経過した木造住宅</span>」では、【<span>木造住宅耐震診断</span>】について「<span class="spBlue">市の支援</span>」各種補助金を受け負担を軽減できる可能性があります。　【<span>木造住宅耐震診断</span>】を「<span class="spBlue">お家の検診</span>」始めの一歩として受診してみませんか・・・';
  $DEF_pageStArcGallery_msg   = '★ 齋藤建築【<span>ギャラリー</span>】　お住まいに成る皆さまのご要望にお応えした実績を、画像にてご案内して居ります・・・';
  $DEF_pageCompanyProfile_msg = '★ 齋藤建築【<span>会社のご案内</span>】　耐震診断・耐震工事・建物診断 ☛ からのリフォーム等の事業内容始め、会社に関するご案内です・・・';
  $DEF_pagePrivacyPolicy_msg  = '★ 齋藤建築【<span>個人情報保護</span>】　社会的使命を十分に認識し、本人の権利の保護、個人情報に関する法規制等を遵守致します・・・';
  $DEF_pageContactForm_msg    = '★ 齋藤建築【<span>お問い合わせ</span>】　<span class="spBlue">木造住宅・新築/設計</span>は勿論の事、<span class="spBlue">耐震診断</span>・<span class="spBlue">耐震工事</span>・<span class="spBlue">建物診断</span> ☛ からの<span class="spBlue">リフォーム</span>迄、何でもお任せ下さい！　「<span>お家に関する専門店</span>」、お問い合わせお待ちして居ります・・・';
  $DEF_pageNotFound404_msg    = '★ 齋藤建築【<span>お詫び</span>】<span class="spBlue">お探しのページは見つかりませんでした</span>・・・';

  // 
  // 各種メニュー遷移先ページ「スラッグ：ＩＤ」
  global $GB_pID_ourSkills     ;
  global $GB_pID_homeNewBuild  ;
  global $GB_pID_homeReform    ;
  global $GB_pID_homeInspect   ;
  global $GB_pID_stConstGallery;
  global $GB_pID_companyProfile;
  global $GB_pID_privacyPolicy ;
  global $GB_pID_contactForm   ;

  $GB_pID_ourSkills      = 10;
  $GB_pID_homeNewBuild   = 18;
  $GB_pID_homeReform     = 20;
  $GB_pID_homeInspect    =  7;
  $GB_pID_stConstGallery = 12;
  $GB_pID_companyProfile = 16;
  $GB_pID_privacyPolicy  = 22;
  $GB_pID_contactForm    = 14;

  // 
  // 「カテゴリ：ＩＤ」
  global $GB_catID_news;
  global $GB_catID_newBuild;
  global $GB_catID_reform;
  global $GB_catID_houseIns;
  global $GB_catID_blog;
  global $GB_catID_howTo;

  $GB_catID_news     = 3;
  $GB_catID_newBuild = 8;
  $GB_catID_reform   = 9;
  $GB_catID_houseIns = 10;
  $GB_catID_blog     = 6;
  $GB_catID_howTo    = 5;

  $GB_catName_news     = "news";
  $GB_catName_newBuild = "newbuild";
  $GB_catName_reform   = "reform";
  $GB_catName_houseIns = "houseins";
  $GB_catName_blog     = "blog";
  $GB_catName_howTo    = "howto";

  // 
  // 表示中投稿年月
  global $GB_postYear;
  global $GB_postMonth;
  $GB_postYear  = -99;
  $GB_postMonth = -99;
  // $pageLink[ 9] = esc_url( get_category_link( 3 ) );   // news  カテゴリ
  // $pageLink[10] = esc_url( get_category_link( 6 ) );   // blog  カテゴリ
  // $pageLink[11] = esc_url( get_category_link( 5 ) );   // howto カテゴリ

?>