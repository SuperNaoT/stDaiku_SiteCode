<?php
/*
Template Name: お約束できる技術力
*/

  $GB_menuPos    = 2;
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
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageOurSkills_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>お約束できる技術力</h1>
          <!-- <h1>「住宅耐震診断士・住宅診断士」</h1> -->
        </div>

        <div class="ttlExpPC dspPC">
          <p>
            　私共【<span><u>齋藤建築</u></span>】では、<br>
          </p>
          <ul>
            <li>１．<span class="spBlue">お家の健康診断</span>や、</li>
            <li>２．<span class="spBlue">木造住宅に於ける地震に対する強度検査（耐震検査）</span>において、</li>
          </ul>
          <p>
            「我流」 の技術に頼った、検査ごとにバラツキの有る知識と技術に基く診断ではなく、<br>
          </p>
          <ul>
            <li>１．【<span>JSHI：日本ホームインスペクターズ協会</span>】</li>
            <li>２．【<span>胎内市・新発田市：木造住宅耐震診断士登録制度</span>】</li>
          </ul>
          <p>
            　にて認定される資格を保有し「<span class="spBlue">住宅診断のプロ</span>」として、<br><br>
            【<span>住宅診断方法などにおける一定以上の知識</span>】と、<br>
            【<span>高い倫理観</span>】をもって、<br><br>
            　各種の検査をご希望とされる皆様の、ご要望にお応えして参ります。<br>
          </p>
        </div>
        <div class="ttlExpMB dspMB">
          <p>
            　私共【<span><u>齋藤建築</u></span>】では、<br>
          </p>
          <ul>
            <li>１．<span class="spBlue">お家の健康診断</span>や、</li>
            <li>２．<span class="spBlue">木造住宅に於ける地震に対する</li>
          </ul>
          <p>
            　強度検査（耐震検査）</span>において、<br><br>
            「我流」 の技術に頼った、<br>
            　検査ごとにバラツキの有る<br>
            　知識と技術に基く診断ではなく、<br>
          </p>
          <ul>
            <li>１．【<span>JSHI：<br>
                　　　　日本ホームインスペクターズ協会</span>】</li>
            <li>２．【<span>胎内市・新発田市：<br>
                　　　　　　木造住宅耐震診断士登録制度</span>】</li>
          </ul>
          <p>
            　にて認定される資格を保有し、<br>
            「<span class="spBlue">住宅診断のプロ</span>」として、<br>
          </p>
          <ul>
            <li>【<span>住宅診断方法等での一定以上の知識</span>】と、</li>
            <li>【<span>高い倫理観</span>】をもって、</li>
          </ul>
          <p>
            　各種の検査をご希望とされる皆様の、<br>
            　ご要望にお応えして参ります。<br>
          </p>
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo" id="detailInfo">
          <div class="infoArea">
            <!-- <p class="infoTitle"><u>　■ お家の健康診断　</u></p> -->
            <p class="infoTitle dspPC"><u>　■ <span class="spBlue">保有資格 -Ⅰ</span>：<span>ホームインスペクター</span>（<span>住宅診断士</span>）とは？　</u></p>
            <p class="infoTitle dspMB"><u>　■ <span class="spBlue">保有資格 -Ⅰ</span></u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <!-- <p class="infoTitle"><u>　■ お家の健康診断　</u></p> -->
            <!-- <p class="infoTitle dspPC"><u>　■ ホームインスペクター（住宅診断士）とは？　</u></p> -->
            <!-- <p class="infoTitle dspMB"><u>　■ ホームインスペクター　</u><br><u>　（住宅診断士）とは？　</u></p> -->
            <div class="sBysBlk">

              <div class="blkInfo">
                <!-- <h4 class="dspPC">ホームインスペクター（住宅診断士）とは？</h4> -->
                <h4 class="dspMB">【ホームインスペクター<br>　　　　（住宅診断士）】とは？</h4>
                <h4 class="dspPC">【<span>JSHI公認ホームインスペクター</span>（<span>住宅診断士</span>）】</h4>
                <p class="dspPC">
                  <br>
                  　とは、住宅診断のプロとして、<br><br>
                  　建築・不動産取引にて、<br>
                </p>
                <ul class="dspPC">
                  <li>１．<span class="spBlue">住宅診断方法などにおける一定以上の知識</span>と、</li>
                  <li>２．<span class="spBlue">高い倫理観を有する</span>ことを消費者に明示するために、</li>
                </ul>
                <p class="dspPC">
                  【<span>JSHI：日本ホームインスペクターズ協会</span>】実施<br>
                  「<span class="spBlue">公認ホームインスペクター</span>（<span class="spBlue">住宅診断士</span>）<span class="spBlue">資格試験</span>」に合格し、<br><br>
                  　認定会員として登録している個人に対して付与される民間資格です。<br>
                  （※国家資格ではありません）<br><br>
                  【<span>JSHI公認ホームインスペクター</span>（<span>住宅診断士</span>）】とは、<br>
                  　住宅全体の劣化状況や不具合事象の有無を目視でチェックし、<br>
                </p>
                <ul class="dspPC">
                  <li>１．メンテナンスすべき箇所やその時期、</li>
                  <li>２．おおよその費用などを、</li>
                </ul>
                <p class="dspPC">
                  「<span class="spBlue">中立な立場</span>」でアドバイスする専門家です。<br><br>
                  【<span>JSHI公認ホームインスペクター</span>】は、<br>
                  　JSHIが推奨する「<span>住宅のお医者さん</span>」として、全国で活躍しています。
                </p>
                <p class="dspMB">
                  <br>
                  【<span>JSHI公認ホームインスペクター</span><br>
                  　　　　　　　　　（<span>住宅診断士</span>）】<br><br>
                  　とは、住宅診断のプロとして、<br>
                  　建築・不動産取引にて、<br>
                </p>
                <ul class="dspMB">
                  <li>１．<span class="spBlue">住宅診断方法等での<br>　　一定以上の知識</span>と、</li>
                  <li>２．<span class="spBlue">高い倫理観を有する</span>こと</li>
                </ul>
                <p class="dspMB">
                  　を消費者に明示するために、<br><br>
                  【<span>JSHI：日本ホーム<br>
                  　　　　インスペクターズ協会</span>】実施の、<br><br>
                  「<span class="spBlue">公認ホームインスペクター</span><br>
                  　　　（<span class="spBlue">住宅診断士</span>）<span class="spBlue">資格試験</span>」に合格し、<br><br>
                  　認定会員として登録している<br>
                  　個人に対して付与される民間資格です。<br>
                  （※国家資格ではありません）<br><br>
                  【<span>JSHI公認ホームインスペクター</span><br>
                  　　　　　　　　　（<span>住宅診断士</span>）】とは、<br><br>
                  　住宅全体の劣化状況や不具合事象の有無を<br>
                  　目視でチェックし、<br><br>
                  　メンテナンスすべき箇所やその時期、<br>
                  　おおよその費用などを「<span class="spBlue">中立な立場</span>」<br>
                  　でアドバイスする専門家です。<br><br>
                  【<span>JSHI公認ホームインスペクター</span>】は、<br>
                  　JSHIが推奨する「<span>住宅のお医者さん</span>」<br>
                  　として、全国で活躍しています。
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

          <!-- <div class="dline"></div> -->
        </div>




        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo" id="detailInfo2">
          <div class="infoArea">
            <!-- <p class="infoTitle"><u>　■ お家の健康診断　</u></p> -->
            <p class="infoTitle dspPC"><u>　■ <span class="spBlue">保有資格 -Ⅱ</span>：<span>木造住宅耐震診断士</span>とは？　</u></p>
            <p class="infoTitle dspMB"><u>　■ <span class="spBlue">保有資格 -Ⅱ</span></u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">
              <div class="blkInfo">
                <h4 class="dspMB">【<span>木造住宅耐震診断士</span>】とは？<br></h4>
                <h4 class="dspPC">【<span>木造住宅耐震診断士</span>】<br></h4>
                <p class="dspPC">
                  <br>
                  　とは、<br><br>
                  　<span class="spBlue">胎内市</span>「<span>木造住宅耐震診断士登録制度要綱</span>」に基き、<br>
                </p>
                <ul class="dspPC">
                  <li>１．建築士法第２３条第１項の規定による登録を行っている<span class="spBlue">建築士事務所に所属する建築士</span></li>
                  <li>２．胎内市市長により認められた「<span class="spBlue">木造住宅耐震診断士養成講習会</span>」を終了している者</li>
                </ul>
                <p class="dspPC">
                  　とされて居り、<span>胎内市市長により審査・登録</span>を決定され、<br>
                  「<span class="spBlue">木造住宅耐震診断士登録証</span>」の交付を得た建築士が取得できる資格と成ります。<br><br><br>
                  【<span>木造住宅耐震診断士</span>】は、<br>
                </p>
                <ul class="dspPC">
                  <li>１．耐震診断にて知り得た情報を、他に漏らしては成らず、</li>
                  <li>２．耐震診断士であることを自覚し、謙虚に誠意を持って対応し、業務を履行する</li>
                </ul>
                <p class="dspPC">
                  　等々、<br>
                  「<span class="spBlue">木造住宅の耐震診断と補強方法</span>」と言った技術的な知識のみならず、<br>
                  「<span class="spBlue">人としての資質</span>」も、求められる資格と成ります。
                </p>

                <p class="dspMB">
                  <br>
                  　とは、<br><br>
                  　<span class="spBlue">胎内市</span><br>
                  「<span>木造住宅耐震診断士登録制度要綱</span>」<br>
                  　に基き、<br>
                </p>
                <ul class="dspMB">
                  <li>１．建築士法第２３条第１項の<br>
                  　　規定による登録を行っている<br>
                  　　<span class="spBlue">建築士事務所に所属する建築士</span></li>
                  <li>２．胎内市市長により認められた<br>
                  　「<span class="spBlue">木造住宅耐震診断士養成講習会</span>」<br>
                  　　を終了している者</li>
                </ul>
                <p class="dspMB">
                  　とされて居り、<br>
                  　<span>胎内市市長により審査・登録</span>を決定され、<br>
                  「<span class="spBlue">木造住宅耐震診断士登録証</span>」の交付を得た<br>
                  　建築士が取得できる資格と成ります。<br><br><br>
                  【<span>木造住宅耐震診断士</span>】は、<br>
                </p>
                <ul class="dspMB">
                  <li>１．耐震診断にて知り得た情報を、<br>
                  　　　他に漏らしては成らず、</li>
                  <li>２．耐震診断士であることを自覚し、<br>
                  　　　謙虚に誠意を持って対応し、<br>
                  　　　業務を履行する</li>
                </ul>
                <p class="dspMB">
                  　等々、<br>
                  「<span class="spBlue">木造住宅の耐震診断と補強方法</span>」と言った<br>
                  　技術的な知識のみならず、<br>
                  「<span class="spBlue">人としての資質</span>」も、<br>
                  　求められる資格と成ります。
                </p>
              </div>
            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="rlxParentElmW">
              <div class="rlxImgFrameW js-rlxImg">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/TAKUMI/a-book_1920.jpg' ) ?>" alt="住宅診断士・インスペクター資格を取得する為に勉強したイメージを思い起こす本と眼鏡の画像" class="rlxImgCfgW">
              </div>
            </div>
            <div class="extLink linkDec marginT70">
              <a class="dspPC" href="//www.city.tainai.niigata.jp/kurashi/sekatsu/toshikekaku/kentiku/taishinshindan.html" target="_blank" rel="noopener noreferrer">胎内市「木造住宅耐震診断助成事業」はこちら<i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www.city.tainai.niigata.jp/kurashi/sekatsu/toshikekaku/kentiku/taishinshindan.html" target="_blank" rel="noopener noreferrer">胎内市「木造住宅<br>　　　　耐震診断助成事業」<br>　　　　　　　　　　はこちら<i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
            <div class="extLink linkDec">
              <a class="dspPC" href="//www1.g-reiki.net/tainai/reiki_honbun/r192RG00000934.html#e000000015" target="_blank" rel="noopener noreferrer">胎内市「木造住宅耐震診断士登録制度要綱」はこちら<i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//www1.g-reiki.net/tainai/reiki_honbun/r192RG00000934.html#e000000015" target="_blank" rel="noopener noreferrer">胎内市「木造住宅<br>　　　　耐震診断士登録制度要綱」<br>　　　　　　　　　　　はこちら<i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
          </div>

          <!-- <div class="dline"></div> -->
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
