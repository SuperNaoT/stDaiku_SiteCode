<?php
/*
Template Name: お家の健康診断
*/

  $GB_menuPos    = 5;
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
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageHomeInspect_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>お家の健康診断</h1>
        </div>

        <div class="ttlExpPC dspPC">
          <p>
          　私共【<span><u>齋藤建築</u></span>】では、<br>
          「<span class="spBlue">お家の健康診断</span>」を実施しております。<br><br>
          「<span>お家</span>」は<span class="spBlue">皆様の生活の基本</span>であり、<br>
          　皆様の健康と安全そして繁栄を願う、重要な拠り所と成ります。<br><br>
          「<span>私共の思い</span>」は、<br>
          　<span class="spBlue">何か不具合が発生してからその対応処置完了</span>までの期間、<br>
          　<span>不便な日常を過ごすことが無い様に</span>・・・　との願いでもあります。<br><br>
          　先ずは、<br>
          「<span class="spBlue">国・地方公共団体からの助成</span>」を受けご負担の軽い（無い）、<br>
          「<span>木造住宅耐震診断</span>」を受診されてみては如何でしょうか？

          <div class="dline"></div>

          　私共【<span><u>齋藤建築</u></span>】では、<br>
          「<span>木造住宅耐震診断</span>」を実施するに辺り、目視に因る検診を行います。<br><br>
          　その際、耐震性能を評価する事は勿論ですが、<br>
          「<span class="spBlue">お家全体の健康状態</span>」も、可能な範囲で拝見する事に成ります。<br><br>
          　その結果から、<br>
          「<span class="spBlue">更なる<span>住宅診断</span>（<span>ホームインスペクション</span>）の必要性</span>」或いは、<br>
          「<span class="spBlue">お家そのものの改善ポイント</span>」のアドバイスもさせて頂ければ、<br>
          　と考えて居ります。<br><br><br>
          　皆様のお役に立ちたい！<br>
          　何卒、宜しくお願い申し上げます。
          </p>
        </div>
        <div class="ttlExpMB dspMB">
          <p>
          　私共【<span><u>齋藤建築</u></span>】では、<br>
          「<span class="spBlue">お家の健康診断</span>」を実施しております。<br><br>
          「<span>お家</span>」は<span class="spBlue">皆様の生活の基本</span>であり、<br>
          　皆様の健康と安全そして繁栄を願う、<br>
          　重要な拠り所と成ります。<br><br>
          「<span>私共の思い</span>」は、<br>
          　<span class="spBlue">何か不具合が発生してから<br>
          　その対応処置完了</span>までの期間、<br>
          　<span>不便な日常を過ごすことが無い様に</span>・・・<br>
          　との願いでもあります。<br><br>
          　先ずは、<br>
          「<span class="spBlue">国・地方公共団体からの助成</span>」を受け<br>
          　ご負担の軽い（無い）、<br>
          「<span>木造住宅耐震診断</span>」を受診されてみては<br>
          　如何でしょうか？<br><br><br>
          　私共【<span><u>齋藤建築</u></span>】では、<br>
          「<span>木造住宅耐震診断</span>」を実施するに辺り、<br>
          　目視に因る検診を行います。<br><br>
          　耐震性能を評価する事は勿論ですが、<br>
          「<span class="spBlue">お家全体の健康状態</span>」も、<br>
          　可能な範囲で拝見する事に成ります。<br><br>
          　その結果から、<br>
          「<span class="spBlue">更なる住宅診断の必要性</span>」或いは、<br>
          「<span class="spBlue">お家そのものの改善ポイント</span>」のアドバイス<br>
          　もさせて頂ければ、と考えて居ります。<br><br><br>
          　皆様のお役に立ちたい！<br>
          　何卒、宜しくお願い申し上げます。
          </p>
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo rlxBGBaseArea" id="detailInfo">

          <div class="infoArea">
            <p class="infoTitle"><u>　■ <span>木造住宅耐震診断</span>とは？　</u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4>木造住宅耐震診断とは</h4><br>
                <p class="dspPC">
                  「<span>大地震で倒壊しない耐震性（強さ）</span>」<br>
                  　があるか調査し、確認することです。<br><br>
                  　耐震診断の目的は、<br>
                  「<span class="spBlue">お住まいの弱点を認識し</span>、<br>
                  　<span class="spBlue">具体的な対策をたてる</span>」ことにあります。<br><br>
                  　耐震診断で明らかになった改善ポイントに基づいて、<br>
                  　耐震リフォームを検討してみては如何でしょうか？<br><br><br>
                  【<span>木造住宅耐震診断</span>】は、<br>
                  　下記条件に当てはまる場合に、<br>
                  　市の助成を受けることができます。

                </p>
                <p class="dspMB">「<span>大地震で倒壊しない耐震性（強さ）</span>」<br>
                  　があるか調査し、確認することです。<br><br>
                  　耐震診断の目的は、<br>
                  「<span class="spBlue">お住まいの弱点を認識し</span>、<br>
                  　<span class="spBlue">具体的な対策をたてる</span>」ことにあります。<br><br>
                  　耐震診断で明らかになった<br>
                  　改善ポイントに基づいて、<br>
                  　耐震リフォームを<br>
                  　検討してみては如何でしょうか？<br><br><br>
                  【<span>木造住宅耐震診断</span>】は、<br>
                  　下記条件に当てはまるお宅については、<br>
                  　市の助成を受けることができます。
                </p>

                <ul>
                  <li>(1) <span class="spBlue">昭和５６年５月３１日以前</span>に、</li>
                  <li>(2) <span class="spBlue">市内にて</span></li>
                  <li>(3) <span class="spBlue">建築或いは、工事に着工</span></li>
                  <li>(4) <span class="spBlue">延べ面積５００平方メートル以下</span></li>
                  <li>(5) <span class="spBlue">地階を有しない地上２階建以下</span></li>
                  <li>(6) <span class="spBlue">木造軸組工法による木造住宅</span></li>
                </ul>

                <p>
                  　人の健康診断で言う、<br>
                  「<span class="spBlue">人間ドック的</span>：<span>住宅診断</span><br>
                  　　<span>（ホームインスペクション）</span>」<br>
                  　　　を受診する前に、<br>
                  「<span class="spBlue">一般検診的</span>　：<br>
                  　　　<span>木造住宅耐震診断</span>」<br>
                  　　　を受診してみては如何でしょうか？
                </p>

              </div>

              <div class="blkInfo">
                <h4>耐震診断は必要？</h4><br>
                <p class="dspPC">
                  　毎日、日本全国どこかで地震は発生しています。<br><br>
                  　最近ニュースでもたびたび話題に上る、<br>
                  「首都直下地震」や<br>
                  「南海トラフ地震」など、<br>
                  　いつ・どこで巨大地震が発生するかはわかりません。<br><br>
                  　<span class="spBlue">たった一度でも大きな揺れ・地震がくれば一瞬</span>で、<br><br>
                  「<span>我が家</span>」<span class="spBlue">を失い</span><br>
                  「<span>あたり前に過ごしている暮らし</span>」<span class="spBlue">を失って</span><br>
                  　しまうかもしれないのです。<br><br>
                  　毎日、あたり前にそこに有って当然の「<span>我が家</span>」。<br><br>
                  　通勤・通学・そして楽しいレジャーも、<br>
                  【<span>帰って来られる安心の自宅</span>】が有ってこそ、<br>
                  　掛け替えのない人生の一時と成ると考えます。<br><br>
                  　巨大地震は、いつ来るか分かりません。<br><br>
                  　通勤・通学・そして楽しい外出中と、家族みんなが<br>
                  「<span>我が家</span>」にいる時に発生するとは限りません。<br><br>
                  　万が一に備えて、<br><br>
                  「<span>我が家</span>」を【<span>帰って来られる安心の自宅</span>】に<br>
                  　しておく必要がある、と思うのです。
                </p>
                <p class="dspMB">
                  　毎日、全国<br>
                  　どこかで地震は発生しています。<br><br>
                  　最近ニュースでもたびたび話題に上る、<br>
                  「首都直下地震」や<br>
                  「南海トラフ地震」など、いつ・どこで、<br>
                  　巨大地震が発生するか分かりません。<br><br>
                  　<span class="spBlue">たった一度でも<br>
                  　大きな揺れ・地震がくれば、<br><br>
                  　その一瞬</span>で、<br>
                  「<span>我が家</span>」<span class="spBlue">を失い</span><br>
                  「<span>あたり前に過ごしている暮らし</span>」<br>
                  　<span class="spBlue">を失ってしまう</span>かもしれないのです。<br><br>
                  　毎日、そこに有って当然の「<span>我が家</span>」。<br><br>
                  　通勤・通学・そして楽しいレジャーも、<br>
                  【<span>帰って来られる安心の自宅</span>】<br>
                  　が有ってこそ「素晴らしい人生の一時」<br>
                  　と成ると考えます。<br><br>
                  　巨大地震は、いつ来るか分かりません。<br><br>
                  　通勤・通学・そして楽しい外出中と、<br>
                  　家族みんなが「<span>我が家</span>」にいる時に<br>
                  　発生するとは限りません。<br><br>
                  　万が一に備えて、<br><br>
                  「<span>我が家</span>」を【<span>帰って来られる安心の自宅</span>】<br>
                  　しておく必要がある、と思うのです。
                </p>
              </div>
            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="rlxParentElmW">
              <div class="rlxImgFrameW js-rlxImg">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/love_1920.jpg' ) ?>" alt="新築住宅リフォームが呼び込む幸せをイメージさせる手ハートの画像" class="rlxImgCfgW">
              </div>
            </div>
            <div class="jyoseiTitle">
              <h3 class="dspPC"><u> ※ 胎内市・新発田市には、助成事業制度が有ります。</u></ｈ>
              <h3 class="dspMB"><u> ※ 胎内市・新発田市には、</u><br>　　　　　<u> 助成事業が有ります。</u></ｈ>
            </div>

            <div class="extLink linkDec">
              <a class="dspPC" href="//www.city.tainai.niigata.jp/kurashi/sekatsu/toshikekaku/kentiku/taishinshindan.html" target="_blank" rel="noopener noreferrer">胎内市「木造住宅耐震診断助成事業」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www.city.tainai.niigata.jp/kurashi/sekatsu/toshikekaku/kentiku/taishinshindan.html" target="_blank" rel="noopener noreferrer">胎内市　<br>「木造住宅耐震診断助成事業」<br>　　　　　　　　　　はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
            <div class="extLink linkDec">
              <a class="dspPC" href="//www.city.shibata.lg.jp/kurashi/sumai/josei/1015841.html" target="_blank" rel="noopener noreferrer">新発田市「木造住宅耐震診断・設計・改修事業制度」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www.city.shibata.lg.jp/kurashi/sumai/josei/1015841.html" target="_blank" rel="noopener noreferrer">新発田市<br>「木造住宅耐震診断・<br>　　　　設計・改修事業制度」<br>　　　　　　　　　　はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
          </div>

          <!-- <div class="dline"></div> -->

          <!-- <div class="backgroundRlxArea"> -->
            <div class="rlxParentElmBG">
              <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/earthquake-2_1920.jpg' ) ?>"   alt="住宅耐震診断をお勧めする為の怖い地割れの画像" class="rlxImgCfgH dspPC">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkHomeIns/earthquake-2_500-1920.jpg' ) ?>" alt="住宅耐震診断をお勧めする為の怖い地割れの縦型画像" class="rlxImgCfgH dspMB">
              </div>
            </div>
          <!-- </div> -->
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo rlxBGBaseArea" id="detailInfo2">

          <div class="infoArea">
            <p class="infoTitle dspPC">　<u>■ <span>住宅診断</span>（<span>ホームインスペクション</span>）とは？　</u></p>
            <p class="infoTitle dspMB">　<u>■ <span>住宅診断</span></u>　　　　　<br>（<u><span>ホームインスペクション</span></u>）とは？　</u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4>住宅診断とは？</h4><br>
                <p class="dspPC">
                  「<span class="spBlue">お家に不具合はないかな？</span>」<br>
                  「<span class="spBlue">修繕には、<br>
                  　いつごろ・どこに・幾ら位のお金がかかるのかな？</span>」<br>
                  「お家は、<span class="spBlue">あと何年くらい持つのかな？</span>」<br><br>
                  【<span>ホームインスペクション</span>（<span>住宅診断</span>）】とは、<br>
                  　住宅に精通した<br>
                  【<span>ホームインスペクター・住宅診断士</span>】が、<br>
                  　第三者的な立場から、また専門家の見地から、<br>
                </p>
                <ul class="dspPC">
                  <li>１．<span class="spBlue">住宅の劣化状況</span>、</li>
                  <li>２．<span class="spBlue">不具合事象の有無</span>、</li>
                  <li>３．<span class="spBlue">改修すべき箇所やその時期</span>、</li>
                  <li>４．<span class="spBlue">おおよその費用</span>などを見きわめ、</li>
                </ul>
                <p class="dspPC">
                  　アドバイスを行なう専門業務をいいます。<br><br>
                  　例えば、「<span class="spBlue">お家の購入前</span>」や、<br>
                  「<span class="spBlue">お家のリセール前</span>」に住宅診断を行なうことで、<br>
                  　建物のコンディションを把握し、<br>
                  　安心して取引を行うことが出来る様になります。<br><br>
                  　また、居住中のお家についても<br>
                  　調べることが可能です。<br><br>
                  　診断の方法は、<br>
                  　目視で、屋根、外壁、室内、小屋裏、床下などの<br>
                  　劣化状態を診断するのが基本です。<br>
                  　機材を使用する詳細診断もあります。<br><br>
                  【<span>ホームインスペクター・住宅診断士</span>】は、<br>
                  　住宅の「<span>かかりつけのお医者さん</span>」です。<br><br>
                  　何か不具合が発生してしまう前に、<br>
                  　一度「住宅診断」を受診してみては如何でしょうか？<br>
                </p>
                <p class="dspMB">
                  「<span class="spBlue">お家に不具合はないかな？</span>」<br>
                  「<span class="spBlue">修繕には、いつごろ、どこに、<br>
                  　幾ら位のお金がかかるのかな？</span>」<br>
                  「お家は、<span class="spBlue">あと何年くらい持つのかな？</span>」<br><br>
                  【<span>ホームインスペクション<br>
                  　　　　　　　　・住宅診断</span>】とは、<br>
                  【<span>ホームインスペクター<br>
                  　　　　　　　　・住宅診断士</span>】が、<br><br>
                  　第三者的な立場、専門家の見地から、<br>
                </p>
                <ul class="dspMB">
                  <li>１．<span class="spBlue">住宅の劣化状況</span>、</li>
                  <li>２．<span class="spBlue">不具合事象の有無</span>、</li>
                  <li>３．<span class="spBlue">改修すべき箇所やその時期</span>、</li>
                  <li>４．<span class="spBlue">おおよその費用などを見きわめ</span>、</li>
                </ul>
                <p class="dspMB">
                  　アドバイスを行なう専門業務<br>　をいいます。<br><br>
                  　例えば、<br>
                  「<span class="spBlue">お家の購入前</span>」や<br>
                  「<span class="spBlue">お家のリセール前</span>」に<br>
                  　住宅診断を行なう事で、<br>
                  　建物のコンディションを把握し、<br>
                  　安心して取引を行うことができます。<br><br>
                  　また「居住中のご自宅」についても、<br>
                  　調べる事が可能です。<br><br>
                  　診断の方法は、目視で、<br>
                  　屋根、外壁、室内、小屋裏、床下などの<br>
                  　劣化状態を診断するのが基本です。<br>
                  　機材を使用する詳細診断もあります。<br><br>
                  【<span>ホームインスペクター・住宅診断士</span>】<br>
                  　は、住宅の、<br>
                  「<span>かかりつけのお医者さん</span>」です。<br><br>
                  　何か不具合が発生してしまう前に一度、<br>
                  「住宅診断」を受診してみては<br>
                  　如何でしょうか？<br>
                </p>
              </div>

              <!--  -->
              <!-- 単一プリミティブ記事 -->
              <div class="blkInfo">
                <h4>ホームインスペクター<br>
                  　　（住宅診断士）とは？</h4><br>
                <p class="dspPC">
                  【<span>JSHI 公認ホームインスペクター</span>（<span>住宅診断士</span>）】<br>
                  　とは、住宅診断のプロとして、<br><br>
                  　建築・不動産取引にて、<br>
                </p>
                <ul class="dspPC">
                  <li>１．<span class="spBlue">住宅診断方法などにおける一定以上の知識</span>と、</li>
                  <li>２．<span class="spBlue">高い倫理観を有する</span>こと</li>
                </ul>
                <p class="dspPC">
                  　を消費者に明示するために、<br><br>
                  【<span>JSHI：日本ホームインスペクターズ協会</span>】実施<br>
                  「<span class="spBlue">公認ホームインスペクター</span><br>
                  　　　　　　（<span class="spBlue">住宅診断士</span>）<span class="spBlue">資格試験</span>」に合格の、<br><br>
                  　認定会員として登録している個人に対して<br>
                  　付与される民間資格です。<br>
                  （※国家資格ではありません）<br><br>
                  【<span>JSHI公認ホームインスペクター</span>（<span>住宅診断士</span>）】<br>
                  　とは、住宅全体の劣化状況や不具合事象の有無を<br>
                  　目視でチェックし、<br><br>
                  　メンテナンスすべき箇所やその時期、<br>
                  　おおよその費用などを「<span class="spBlue">中立な立場</span>」で<br>
                  　アドバイスする専門家です。<br><br>
                  【<span>JSHI公認ホームインスペクター</span>】は、<br>
                  　JSHIが推奨する「<span>住宅のお医者さん</span>」として、<br>
                  　全国で活躍しています。
                </p>

                <p class="dspMB">
                  【<span>JSHI 公認ホームインスペクター</span><br>
                  　　　　　　　　（<span>住宅診断士</span>）】とは、<br><br>
                  　住宅診断のプロとして、<br>
                  　建築・不動産取引にて、<br>
                </p>
                <ul class="dspMB">
                  <li>１．<span class="spBlue">住宅診断方法等一定以上の知識</span></li>
                  <li>２．<span class="spBlue">高い倫理観</span></li>
                </ul>
                <p class="dspMB">
                  　等を消費者に明示するために、<br><br>
                  【<span>JSHI：<br>
                  　日本ホームインスペクターズ協会</span>】<br>
                  　実施の、<br><br>
                  「<span class="spBlue">公認ホームインスペクター</span><br>
                  （<span class="spBlue">住宅診断士</span>）<span class="spBlue">資格試験</span>」<br><br>
                  　に合格の、認定会員として<br>
                  　登録している個人に対して付与される<br>
                  　民間資格です。<br>
                  （※国家資格ではありません）<br><br>
                  【<span>JSHI公認ホームインスペクター</span><br>
                  　　　　　　　　（<span>住宅診断士</span>）】とは、<br><br>
                  　住宅全体の劣化状況や不具合事象の有無<br>
                  　を目視でチェックし、<br><br>
                  　メンテナンスすべき箇所やその時期、<br>
                  　おおよその費用などを「<span class="spBlue">中立な立場</span>」<br>
                  　でアドバイスする専門家です。<br><br>
                  【<span>JSHI公認ホームインスペクター</span>】は、<br>
                  　JSHIが推奨する「<span>住宅のお医者さん</span>」<br>
                  　として、全国で活躍しています。<br>
                </p>
              </div>
            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="extLink linkDec marginT70">
              <a class="dspPC" href="//www.jshi.org/" target="_blank" rel="noopener noreferrer">JSHI：日本ホームインスペクターズ協会 <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www.jshi.org/" target="_blank" rel="noopener noreferrer">JSHI：日本ホーム<br>　　　インスペクターズ協会 <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
            <div class="extLink linkDec">
              <a class="dspPC" href="//www.jshi.org/search/detail.php?id=853" target="_blank" rel="noopener noreferrer">JSHI：日本ホームインスペクターズ協会・登録証 <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www.jshi.org/search/detail.php?id=853" target="_blank" rel="noopener noreferrer">JSHI：日本ホーム<br>　インスペクターズ協会・登録証 <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
          </div>
        </div>

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage"></div> 
        </div>

      </div>
    </section>

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
