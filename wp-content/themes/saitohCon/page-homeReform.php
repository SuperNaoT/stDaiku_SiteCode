<?php
/*
Template Name: 住宅リフォーム
*/

  $GB_menuPos    = 4;
  $GB_page_flag  = 0;
  $GB_iconDspCtr = 0;

  // ヘッダー部の取込み
  get_header();
?>

  <!--  -->
  <!-- **************************************************** -->
  <!-- **************************************************** -->
  <!-- ■ pageComElmDspCtr 表示ID切り替え用スイッチ設定 -->
  <!-- ★ スクロール時表示・非表示する、固定位置表示ナビゲーションメニューの制御関連 -->
  <!--    1．入力フォーム・データ確認画面ではこれを表示していない。　　　　　　　 -->
  <!--    2．Javascript/スクロールに応じた表示コントロールにてエラーが発生する。 -->
  <!-- **************************************************** -->
  <div id="pageFlag" title="0"></div>
  <!-- **************************************************** -->

  <!--  -->
  <!-- *********************************** -->
  <!-- *********************************** -->
  <!--                                     -->
  <!-- ■ 当該ページ内コンテンツ記述セクション -->
  <!--                                     -->
  <!-- *********************************** -->
  <!-- *********************************** -->
  <div class="mainContents">

  <section id="section-1">

      <!--  -->
      <!-- サイト訪問者への、挨拶バナー -->
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageHomeReform_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>住宅リフォーム</h1>
        </div>

        <div class="ttlExpPC dspPC">
          <p>
            　今あるお家を、<br>
            「<span>快適</span>」で「<span>住みやすい</span>」<span class="spBlue">空間</span>に変えてみるのは、如何でしょうか？<br><br>
            　例えば・・・<br>
          </p>
          <ul>
            <li>１．<span class="spBlue">古くなって来た家をリフォームしたい</span></li>
            <li>２．<span class="spBlue">古民家再生・良い物は残してリフォームしたい</span></li>
            <li>３．<span class="spBlue">今の生活に合った間取りに変えたい</span></li>
            <li>４．<span class="spBlue">二世帯住宅にしたい</span></li>
            <li>５．<span class="spBlue">バリアフリーにしたい</span></li>
            <li>６．<span class="spBlue">耐震性能をあげたい</span></li>
          </ul>
          <p>
            　家族を守り、愛着をもって住み続けてきた大切な家。<br>
            　今後も大切に守り、次の世代に引継いでいきたい！<br>
            　こんな熱い想いが有ると思います。<br><br>
            　一方で「雨・風・雪」に耐えて来た家は、<br>
            　時間の経過と共に、少しずつ傷んで参ります。<br><br>
            　気に成らない程の小さな傷みであっても、<br>
            　それをしばらく放置して於くと、<br>
            　取り返しのつかない事に成ってしまう可能性も有ります。<br><br>
            　更に、お住まいに成る方に取っては、<br>
            「<span>快適</span>」で「<span>住みやすい</span>」<span class="spBlue">空間</span>でなければなりません。<br><br>
            　施主様の様々な思いに一つ一つ丁寧に向き合い、<br>
            　最善のご提案を申し上げ、ご納得頂ける結果を創りだして参ります。<br><br>
            【<span>齋藤建築</span>】に、ご期待下さい。
          </p>

        </div>

        <div class="ttlExpMB dspMB">
          <p>
            　今あるお家を、<br>
            「<span>快適</span>」で「<span>住みやすい</span>」<span class="spBlue">空間</span>に<br>
            　変えてみるのは、如何でしょうか？<br><br>
            　例えば・・・<br>
          </p>
          <ul>
            <li>１．<span class="spBlue">古くなって来た家をリフォームしたい</span></li>
            <li>２．<span class="spBlue">古民家再生・<br>
                　　良い物は残してリフォームしたい</span></li>
            <li>３．<span class="spBlue">今の生活に合った間取りに変えたい</span></li>
            <li>４．<span class="spBlue">二世帯住宅にしたい</span></li>
            <li>５．<span class="spBlue">バリアフリーにしたい</span></li>
            <li>６．<span class="spBlue">耐震性能をあげたい</span></li>
          </ul>
          <p>
            　家族を守り、<br>
            　愛着をもって住み続けてきた大切な家。<br>
            　今後も大切に守り、<br>
            　次の世代に引継いでいきたい！<br>
            　こんな熱い想いが有ると思います。<br><br>
            　一方で「雨・風・雪」に耐えて来た家は、<br>
            　時間の経過と共に、少しずつ傷んで参ります。<br><br>
            　気に成らない程の小さな傷みであっても、<br>
            　それをしばらく放置して於くと、<br>
            　取り返しのつかない事に<br>
            　成ってしまう可能性も有ります。<br><br>
            　更に、お住まいに成る方に取っては、<br>
            「<span>快適</span>」で「<span>住みやすい</span>」<span class="spBlue">空間</span>で<br>
            　なければなりません。<br><br>
            　施主様の様々な思いに<br>
            　一つ一つ丁寧に向き合い、<br>
            　最善のご提案を申し上げ、<br>
            　ご納得頂ける結果を創りだして参ります。<br><br>
            【<span>齋藤建築</span>】に、ご期待下さい。
          </p>

        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo rlxBGBaseArea" id="detailInfo">

          <div class="infoArea">
            <!-- <p class="infoTitle dspPC">　<u>■ 大がかりなリフォームから、小さな作り付けまで・・・</u></p>
            <p class="infoTitle dspMB">　<u>■ 大がかりなリフォームから、</u><br><u>小さな作り付けまで・・・</u></p> -->
            <p class="infoTitle dspPC">　<u>■ お家の掛かり付け医・ホームドクターとして・・・</u></p>
            <p class="infoTitle dspMB">　<u>■ お家の掛かり付け医・</u>　　　<br><u>ホームドクターとして・・・</u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4 class="dspPC">手を加え、暮らしやすくする・・・</h4>
                <h4 class="dspMB">手を加え、　　　　　　　<br>暮らしやすくする・・・</h4>
                <br>
                <p class="dspPC">
                  　大がかりなフォームでなくとも、<br>
                  　お家のことならどんなことでもお請け致します。<br>
                  　例えば「バリアフリー」のご提案・・・
                </p>
                <p class="dspMB">
                  　大がかりなフォームでなくとも、<br>
                  　お家のことならどんなことでも<br>
                  　お請け致します。<br><br>
                  　例えば「バリアフリー」のご提案・・・
                </p>
                <ul class="dspPC">
                  <li>(1)「<span>手すり</span>」の取り付け</li>
                  <li>(2)「<span>自動水栓</span>」に変更</li>
                  <li>(3)「<span>和式トイレを様式トイレ</span>」に変更</li>
                  <li>(4)「<span>お風呂をユニットバス</span>」に変更</li>
                </ul>
                <ul class="dspMB">
                  <li>(1)「<span>手すり</span>」の取り付け</li>
                  <li>(2)「<span>自動水栓</span>」に変更</li>
                  <li>(3)「<span>トイレを和式から様式</span>」に変更</li>
                  <li>(4)「<span>お風呂をユニットバス</span>」に変更</li>
                </ul>
                <p>
                  　上記のリフォームでは、
                </p>
                <ul>
                  <li>》<span class="spBlue">歩行支援</span></li>
                  <li>》<span class="spBlue">止水忘れの防止</span></li>
                  <li>》<span class="spBlue">利用時の負担軽減</span></li>
                  <li>》<span class="spBlue">お風呂場の温度管理の容易化</span></li>
                </ul>
                <p class="dspPC">
                  　と言った、<br>
                  「<span class="spBlue">通常の生活を助けてくれる</span>」施策となります。
                </p>
                <p class="dspMB">
                  　と言った、<br>
                  「<span class="spBlue">通常の生活を助けてくれる</span>」<br>
                  　施策となります。
                </p>
                <div class="sdline"></div>
                <p class="dspPC">
                  　直接的な「バリアフリー」では有りませんが、<br>
                  　住みやすい快適な環境にする、或いは、<br>
                  　大切な資産であるお家の維持管理と言う意味では、
                </p>
                <p class="dspMB">
                  「バリアフリー」では有りませんが、<br>
                  　住みやすい快適な環境にする、或いは、<br>
                  　大切な資産であるお家の維持管理<br>
                  　と言う意味では、
                </p>
                <ul>
                  <li>(1) 「<span>断熱材</span>」の追加更新</li>
                  <li>(2) 「<span>外壁模様替え</span>」</li>
                </ul>
                <p>
                  　これらは、
                </p>
                <ul>
                  <li>》<span class="spBlue">季節に因る温度変化の影響を緩和</span></li>
                  <li>》<span class="spBlue">雨漏り等による建物劣化対策</span></li>
                </ul>
                <p>
                  　と言った良い点が有ります。<br><br>
                  「<span>外壁模様替え</span>」に付きましては、<br>
                  　既存のお家の雰囲気を活かし、<br>
                  「<span class="spBlue">木造の良さを活かしつつ見た目を新しく</span>」<br>
                  　と言ったご提案をさせて頂きます。
                </p>
              </div>

              <div class="blkInfo">
                <!-- <h4>施主様の思いにそったご提案</h4> -->
                <h4>ワンストップソリューション</h4>
                <br>
                <p class="dspPC">
                  　思い出いっぱいの空間は大切に。<br>
                  　他方で、<span class="spBlue">ゆとりとなった空間は有効活用</span>・・・
                </p>
                <p class="dspMB">
                  　思い出いっぱいの空間は大切に。<br><br>
                  　他方で、<br>
                  　<span class="spBlue">ゆとりとなった空間は有効活用</span>・・・
                </p>
                <ul class="dspPC">
                  <li>(1)「<span>趣味の部屋</span>」に作り替える</li>
                  <li>(2)「<span>溢れていた宝の山を収納出来る空間</span>」を作る</li>
                  <li>(3)「<span>生活に必要な空間</span>」に、更にゆとりを持たせる</li>
                </ul>
                <ul class="dspMB">
                  <li>(1)「<span>趣味の部屋</span>」に作り替える</li>
                  <li>(2)「<span>溢れていた宝の山を<br>
                      　 　 収納出来る空間</span>」を作る</li>
                  <li>(3)「<span>生活に必要な空間</span>」に、<br>
                      　 　 更にゆとりを持たせる</li>
                </ul>
                <p class="dspPC">
                  　この様な思い切った<span>大きな大工仕事のご要望から</span>、<br><br>
                  　<span class="spBlue">もう少し楽に移動したい</span>、<br>
                  　<span class="spBlue">緊急事態発生、先ずは状況を急ぎ改善したい</span>、<br>
                  　と言った<span>小さなご要望まで</span>、
                </p>
                <p class="dspMB">
                  　この様な思い切った<span>大きなご要望から</span>、<br><br>
                  　<span class="spBlue">もう少し楽に移動したい</span>、<br>
                  　<span class="spBlue">緊急事態発生！<br>
                  　先ずは状況を急ぎ改善したい</span>、<br>
                  　と言った<span>小さなご要望まで</span>、
                </p>
                <ul>
                  <li>(1) 「<span>手すり</span>」の設置</li>
                  <li>(2) 「<span>雨漏り</span>」の対応</li>
                  <li>(3) 「<span>水道回り</span>」の改良</li>
                </ul>
                <p class="dspPC">
                  【<span>齋藤建築</span>】では、<br>
                  　長年つちかってきた実績の元に、<br>
                  　<span class="spBlue">様々な技術を持つ信頼と実績ある職人さん</span>との<br>
                  　連携が有ります。<br><br>
                  　<span class="spBlue">大工仕事のみならず様々なご要望について、<br>
                  　あちらこちらに連絡をする事なく、<br>
                  　高い品質をもってお応え</span>致します。
                </p>
                <p class="dspMB">
                  【<span>齋藤建築</span>】では、<br>
                  　長年つちかってきた実績の元に、<br>
                  　<span class="spBlue">様々な技術を持つ信頼と実績ある<br>
                  　職人さん</span>との連携が有ります。<br><br>
                  　<span class="spBlue">大工仕事のみならず<br>
                  　様々なご要望について、<br>
                  　あちらこちらに連絡をする事なく、<br>
                  　高い品質をもってお応え</span>致します。
                </p>
              </div>
            </div>
          </div>

          <!-- <div class="dline"></div> -->
          <!-- <div class="backgroundRlxArea"> -->
            <div class="rlxParentElmBG">
              <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-1_1280-1280.jpg' ) ?>" alt="新たな気持ちでのリフォームをイメージする足場と青空による画像" class="rlxImgCfgH dspPC">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkReform/reformImg-1_333-1280.jpg' ) ?>" alt="新たな気持ちでのリフォームをイメージする足場と青空による縦型画像" class="rlxImgCfgH dspMB">
              </div>
            </div>
          <!-- </div> -->
        </div>

        <!-- 仕切り線表示 -->
        <!-- <div class="uline"></div> -->

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage"></div> 
        </div>

      </div>
    </section>

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
