<?php
/*
Template Name: コンタクトフォーム確認・編集・送信テンプレート
*/

  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // 
  // ★ フォーム作成の参考サイト
  // 【参考：https://gray-code.com/php/make-the-form-introduction/】
  //   
  // 
  // for DEBUG!
  function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
  }

  $itemOptionList = array(
    ["noSelect",     "》----------", "》----------",                  "n.tadokoro@waplus-jpn.co.jp" ],
    ["homeNewBuild", "》住宅・新築/設計　 　　", "住宅・新築/設計",       "n.tadokoro@waplus-jpn.co.jp" ],
    ["reformConsul", "》住宅リフォームのご相談", "住宅リフォームのご相談", "n.tadokoro@waplus-jpn.co.jp" ],
    // ["homeInspect",  "》住宅診断・ホームインスペクション", "住宅診断・ホームインスペクション", "n.tadokoro@waplus-jpn.co.jp" ],
    ["homeInspect",  "》住宅診断・ホームインスペクション", "住宅診断",    "n.tadokoro@waplus-jpn.co.jp" ],
    ["earthQChk",    "》住宅耐震診断　　　　　", "住宅耐震診断",          "n.tadokoro@waplus-jpn.co.jp" ],
    ["other",        "》その他　　　　　　　　", "その他",               "n.tadokoro@waplus-jpn.co.jp" ]
  );

  // 
  // *************************************************************
  // *************************************************************
  // *************************************************************
  // ■ 送信先メールアドレス取得処理
  // *************************************************************
  // *************************************************************
  // 
  // お問い合わせ送信先設定ファイルの読み込み
  $filename = get_template_directory() . '/contents/contactFormCtr/sendAddress.txt';

  // ファイルを開く（'r'は読み込みモードで開く）
  $fp = fopen( $filename, 'r' ) or die( "ファイル読み込みエラー" );


  // 会社ホームページアドレスの読込み
  // お客様送信のメール本文中に記載される。
  $homeAddr = fgets( $fp );

  // 会社ホームページ・お問い合わせ/ご相談の送信元アドレス
  // １．会社ご担当者受取メール、送信元として利用される。
  $fromHPAddr = fgets( $fp );

  // 送信先レコード数の読込み
  // 基本的には、問合せ種別数と等しくなければならない！
  $recNum   = intval( fgets( $fp ) );
  // ファイルを最後まで読み込む
  // echo('<br><br><br><br><br>' );
  // echo('<br><br><br><br><br>' );
  // echo ' > 読込み対象レコード数 ☛ '.$recNum.'<br><br>';
  for(   $i=0 ; $i<$recNum ; $i++ )  {
    if ( $i>5 )  { break; }
    $itemOptionList[$i][3] = substr( fgets($fp), 15 );
  }
  // ファイルを閉じる
  fclose($fp);
  // *************************************************************
  // *************************************************************
  // *************************************************************

  // 
  // *************************************************************
  // *************************************************************
  // *************************************************************
  // ■ 入力データ、不足・不適当、値チェック機能
  // *************************************************************
  // *************************************************************
  // フォーム入力データが有ったら・・・
  $errors = array();

  // echo ' ? $_POST[itemOptionPC] 【' .$_POST['itemOptionPC']. '】<br><br>';
  // echo ' ? $_POST[itemOptionMB] 【' .$_POST['itemOptionMB']. '】<br><br>';

  // 初期入力時と、エラー発生時・入力データ再度編集希望時判別フラグ
  global $GB_reEditFlag;
         $GB_reEditFlag = 0; 

  if( !empty($_POST) ) {
    $ua = $_SERVER['HTTP_USER_AGENT'];

    // 初期入力時と、エラー発生時・入力データ再度編集希望時判別フラグ
    $GB_reEditFlag = 1; 

    // For DEBUG!
    // For DEBUG!
    // For DEBUG!
    // For DEBUG!
    // 【ＰＣＰＣＰＣ上】でも、モバイルのデバッグが出来る様に、一時的にエージェントを変更する！
    // 【ＰＣＰＣＰＣ上】でも、モバイルのデバッグが出来る様に、一時的にエージェントを変更する！
    // $ua = "Mozilla/5.0 (Mobile; Android 6.0.1; Nexus 10 Build/MOB31T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.53 Safari/537.36";
    // 【ＰＣＰＣＰＣ上】でも、モバイルのデバッグが出来る様に、一時的にエージェントを変更する！
    // 【ＰＣＰＣＰＣ上】でも、モバイルのデバッグが出来る様に、一時的にエージェントを変更する！
    // For DEBUG!
    // For DEBUG!
    // For DEBUG!
    // For DEBUG!
    // echo ' ? $ua 【' .$ua. '】【'.strpos($ua, 'Android').'】<br><br>';

    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {

      //スマホの場合に読み込むソースを記述
      $lName    = $_POST['yourLnameMB' ];
      $fName    = $_POST['yourFnameMB' ];
      $klName   = $_POST['yourKLnameMB'];
      $kfName   = $_POST['yourKFnameMB'];

      // echo ' ? $lName  【' .$lName. '】<br>';
      // echo ' ? $fName  【' .$fName. '】<br>';
      // echo ' ? $klName 【' .$klName. '】<br>';
      // echo ' ? $kfName 【' .$kfName. '】<br>';

      $mail     = $_POST['emailMB'];
      $askText  = $_POST['textareaItemMB'];

                                             $pvChkBox = "";
      if ( isset($_POST['agreementMB']) )  { $pvChkBox = $_POST['agreementMB']; }
      
                                                $option = "";
      if ( isset( $_POST['itemOptionMB'] ) )  { $option = $_POST['itemOptionMB']; }

      // echo ' ? $_POST[itemOptionMB] 【' .$_POST['itemOptionMB']. '】<br><br>';

    } else {

      //PCの場合に読み込むソースを記述
      $lName    = $_POST['yourLnamePC' ];
      $fName    = $_POST['yourFnamePC' ];
      $klName   = $_POST['yourKLnamePC'];
      $kfName   = $_POST['yourKFnamePC'];

      $mail     = $_POST['emailPC'];
      $askText  = $_POST['textareaItemPC'];
      
                                             $pvChkBox = "";
      if ( isset($_POST['agreementPC']) )  { $pvChkBox = $_POST['agreementPC']; }
      

                                                $option = "";
      if ( isset( $_POST['itemOptionPC'] ) )  { $option = $_POST['itemOptionPC']; }

    }

    // 
    // 入力値のサニタイズ（問題入力値判定）
    // 
    // <script type="text/javascript">
    //   location.href = "http://www.yahoo.co.jp";
    // </script>
    // こう言った文字列を「<☛&lt; とか >☛&gt;」変換する
    // サニタイズ
    $clean      = array();
    $chkItems   = array();
    $chkItems[0] = $lName;
    $chkItems[1] = $fName;
    $chkItems[2] = $klName;
    $chkItems[3] = $kfName;
    $chkItems[4] = $mail;
    $chkItems[5] = $askText;
    $chkItems[6] = $pvChkBox;
    $i          = 0;
    foreach( $chkItems as $chkItem ) {
      $clean[$i] = htmlspecialchars( $chkItem, ENT_QUOTES);
             $i++;
    }
    $lName    = $clean[0];
    $fName    = $clean[1];
    $klName   = $clean[2];
    $kfName   = $clean[3];
    $mail     = $clean[4];
    $askText  = $clean[5];
    $pvChkBox = $clean[6];

    // echo ' > 「$option」 ☛ 【'.$option.'】<br><br>';

    // 
    // オプションセレクトに於ける表示ラベル取得
    foreach( $itemOptionList as $value )  {

      // echo ' > 「$value[0]」 ☛ 【'.$value[0].'】<br><br>';

      if ( $value[0] === $option )  {
        // ① POST データが存在する場合はこちらの分岐に入る
        $optionLabel = $value[2];
        $sendWaPlus  = $value[3];
        break;
      }
    }
    $errors = validationInDat( $clean, $optionLabel );
  }

  // console_log( $errors );

  // *************************************************************
  // *************************************************************
  // *************************************************************

  // 入力フォーム関連ページ指定フラグ
  // $GB_page_flag = 0：入力フォームページ
  // $GB_page_flag = 1：入力内容確認ページ
  // $GB_page_flag = 2：送信完了報告ページ
  // 
  $GB_page_flag  = 0;
  // 電話・お問い合わせ・上移動アイコン表示制御フラグ
  $GB_iconDspCtr = 1;

  // echo ' > 【１】入力フォーム画面制御コード「page_flag」 ☛ 【'.$GB_page_flag.'】<br><br>';

  //
  // 入力内容確認ページに遷移 
  // 入力データが無ければ、empty であれば、【$GB_page_flag = 0;】初期入力・入力値編集
  // 入力データが無しで、!empty、且つ $errors であれば、　【$GB_page_flag = 1;】入力値確認
  // 入力データが無しで、!empty、且つ $errors でなければ、【$GB_page_flag = 2;】送信済み
  if(   !empty( $_POST['btn_confirm'] ) )  {
    if ( empty( $errors ) )  {
      $GB_page_flag = 1;
    } else  {
      $GB_page_flag = 0;
    }

  //
  // 送信完了ページに遷移 
  } elseif ( !empty($_POST['btn_submit' ]) )  {
    if ( empty( $errors ) )  {
      $GB_page_flag = 2;

      // 
      // ■ 多重送信回避機能
      // セッションの書き込み
      session_start();
      $_SESSION['page'] = true;

    } else  {
      $GB_page_flag = 0;
    }
  }

  // echo ' > 【２】入力フォーム画面制御コード「page_flag」 ☛ 【'.$GB_page_flag.'】<br><br>';

  // 
  // ***********************************************
  // ***********************************************
  //  入力値チェック関数
  // ***********************************************
  // ***********************************************
  function validationInDat( $data, $optLabel ) {

    $error = array();
  
    // 氏名のバリデーション
    if( empty($data[0]) ) {
      $error[] = "・「氏名」は必ず入力してください。";
    } elseif ( 20 < mb_strlen($data[0]) ) {
      $error[] = "・「氏名」は20文字以内で入力してください。";
    }
    
    // 名前のバリデーション
    if( empty($data[1]) ) {
      $error[] = "・「名前」は必ず入力してください。";
    } elseif ( 20 < mb_strlen($data[1]) ) {
      $error[] = "・「名前」は20文字以内で入力してください。";
    }
  
    // 氏名カナのバリデーション
    if( empty($data[2]) ) {
      $error[] = "・「フリガナ氏名」は必ず入力してください。";
    } elseif ( 20 < mb_strlen($data[2]) ) {
      $error[] = "・「フリガナ氏名」は20文字以内で入力してください。";
    }
    
    // 名前カナのバリデーション
    if( empty($data[3]) ) {
      $error[] = "・「フリガナ名前」は必ず入力してください。";
    } elseif ( 20 < mb_strlen($data[3]) ) {
      $error[] = "・「フリガナ名前」は20文字以内で入力してください。";
    }

    // メールアドレスのバリデーション
    if( empty($data[4]) ) {
      $error[] = "・「メールアドレス」は必ず入力してください。";
    } elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data[4]) ) {
      $error[] = "・「メールアドレス」は正しい形式で入力してください。";
    }

    // お問い合わせ種別のバリデーション
    if( $optLabel == "》----------" ) {
      $error[] = "・「お問い合わせ種別」は必ずお選びください。";
    }

    // console_log( $optLabel );
  
    // 性別のバリデーション
    if( empty($data[5]) ) {
      $error[] = "・「お問い合わせ内容」は必ず入力してください。";
    }

    // ライバシーポリシー同意のバリデーション
    if( empty($data[6]) ) {
      $error[] = "・「プライバシーポリシー」をご確認ください。";
    }
    
  // console_log( $data[6] );

    return $error;
  }

  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

  // 「ご相談・お問い合わせ(2)」
  $GB_menuPos = 9;

  // echo " ????? \$GB_page_flag 【". $GB_page_flag . "】";

  // ヘッダー部の取込み
  get_header();
?>

  <!--  -->
  <!-- ************************************************************* -->
  <!-- ************************************************************* -->
  <!--                                                               -->
  <!-- ■ フォーム内、ご相談・お問い合わせ各種情報入力完了：メール送信処理 -->
  <!--                                                               -->
  <!-- １．入力内容を、メール形式に整え送信 -->
  <!-- ２．「送信完了」メッセージ、送信内容一覧表示を実行 -->
  <!--                                                               -->
  <!--（「ヘッダ・コンテンツ・フッタ」迄を、このIF文以下に全て持つ）-->
  <!--                                                               -->
  <!-- ************************************************************* -->
  <!-- ************************************************************* -->
  <?php if( $GB_page_flag == 2 ):
  
    // echo " ☛☛☛☛☛☛　入力内容送信制御！"; 
  
    // session_start();
    if ( !empty($_SESSION['page']) && $_SESSION['page'] === true )  {
  
      // セッションの削除
      unset($_SESSION['page']);

      // 
      // ****************************************************************
      // ****************************************************************
      // ■ 送信完了報告ページ制御
      // ****************************************************************
      // ****************************************************************
      // 
      // ■ 自動返信メール送信
      // 【参考：https://blog.ver001.com/windows_php_sendmail/】
      // 
      // 変数の設定
      $to      = $sendWaPlus;
      $subject = "【通知：齋藤建築】 ホームページより、問い合わせが有りました！";
      $text    =   "\n株式会社 齋藤建築"
                . "\n下記内容にて、問い合わせを受けました。"
                
                . "\n\n　対応をお願いします。"

                . "\n\n --------------------------------------------------"
                . "\n【お問い合わせ種別】：" . $optionLabel

                . "\n\n --------------------------------------------------"
                . "\n【お名前】　　　　　：" . $lName  . " " . $fName
                . "\n　　　　　　　　　　：" . $klName . " " . $kfName

                . "\n\n --------------------------------------------------"
                . "\n【返信先アドレス】　：" . $mail

                . "\n\n --------------------------------------------------"
                . "\n【お問い合わせ内容】：\n" . $askText

                . "\n\n --------------------------------------------------"

                . "\n　ご対応の程、宜しくお願い致します。"

                . "\n\n"
                . "株式会社 齋藤建築"
                . "\n" . $homeAddr;
                // . "\nhttps://www.waplus-jpn.co.jp";

      $from    = "From: " . $fromHPAddr;

      // メール送信
      $rtn = mb_send_mail( $to, $subject, $text, $from );
  
      // console_log( $rtn );
      // console_log( $to );
      // console_log( $subject );
      // console_log( $from );
  
      // 
      // ■ 自動返信メール送信
      // 【参考：https://blog.ver001.com/windows_php_sendmail/】
      // 
      // 変数の設定
      $to      = $mail;
      $subject = "【ご案内：齋藤建築】 お問い合わせ、ありがとうございます";
      $text    =   "\n株式会社 齋藤建築 です。"
                . "\nこの度は、お問い合わせを頂き誠にありがとうございます。"
                
                . "\n\n　お問い合わせ内容に付きましては、"
                .   "\n　改めて弊社担当よりご案内を申し上げます。"

                . "\n\n　誠に恐れ入りますが、ご案内を申し上げます迄、"
                .   "\n　今少しお待ちくださいます様、お願いを申し上げます。"

                . "\n\n --------------------------------------------------"
                . "\n【お問い合わせ種別】：" . $optionLabel

                . "\n\n --------------------------------------------------"
                . "\n【お問い合わせ内容】：\n" . $askText

                . "\n\n --------------------------------------------------"

                . "\n　宜しくお願い致します。"

                . "\n\n"
                . "株式会社 齋藤建築"
                . "\n" . $homeAddr;
                // . "\nhttps://www.waplus-jpn.co.jp";

      // $from    = "From: " . $fromHPAddr;
      $from    = "From: info@st-daiku.co.jp";

      // メール送信
      mb_send_mail( $to, $subject, $text, $from );
    } else  {
      $GB_page_flag = 0;
    }
  ?>
 
  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- subPageArticlesDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-2" title="2"></div>
  <!-- **************************************************** -->
  <div class="mainContents">
    <?php include( get_template_directory() . "/contents/contactFormCtr/inputDataSend.php" ); ?>
  </div>
 
<!--  -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<!--                                                                 -->
<!-- ■ フォーム内、ご相談・お問い合わせ各種情報入力内容：確認処理 -->
<!--                                                               -->
<!-- １．入力内容を、表示 -->
<!-- ２．「送信する？」「戻る？」メッセージ、表示 -->
<!--                                                               -->
<!--（「ヘッダ・コンテンツ・フッタ」迄を、このIF文以下に全て持つ）-->
<!--                                                               -->
<!-- ************************************************************* -->
<!-- ************************************************************* -->
<?php elseif( $GB_page_flag == 1 ):
  // 
  // ****************************************************************
  // ****************************************************************
  // ■ 入力内容確認ページ制御
  // ****************************************************************
  // ****************************************************************
  // echo " ☛☛☛☛☛☛　記入内容：ご確認"; 
?>
 
  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- subPageArticlesDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-1" title="1"></div>
  <!-- **************************************************** -->
  <!-- HTML記述：ここに、入力内容を表示し、これでいい？と確認する処理を記述する -->
  <div class="mainContents">
    <?php include( get_template_directory() . "/contents/contactFormCtr/inputDataConf.php" ); ?>
  </div>
 
<?php
  // 
  // ****************************************************************
  // ****************************************************************
  // ■ 入力フォームページ制御
  // ****************************************************************
  // ****************************************************************
else: ?>

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- subPageArticlesDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- **************************************************** -->
  <div id="pageFlag-0" title="0"></div>
  <!-- **************************************************** -->

  <!-- else: /* echo " ☛☛☛☛☛☛　入力フォームページ制御！"; */ ?> -->
  <!-- HTML記述：入力不備、或いは戻って更新希望の場合の、フォーム入力処理制御を記述する -->
  <div class="mainContents">
    <?php include( get_template_directory() . "/contents/contactFormCtr/inputDataEdit.php" ); ?>
  </div>

<?php endif; ?>
  
<!-- フッター部の取込み -->
<?php get_footer(); ?>
