<?php
/*
Template Name: 住宅・新築/設計
*/

  $GB_menuPos    = 3;
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
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageHomeNewBuild_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>住宅・新築/設計</h1>
        </div>

        <div class="ttlExpPC dspPC">
          <p>
          　私共【<span><u>齋藤建築</u></span>】では、<br>
          「<span class="spBlue">地元密着</span>」を行動理念として事業活動をおこなって居ります。<br><br>
          　私共は、<br>
          </p>
          <ul>
            <li>１．<span>その土地の気候風土に合った素材の選定</span></li>
            <li>２．<span>その土地の気候に適応した生活が送れる機能・デザインが大切</span></li>
          </ul>
          <p>
          　と、考えるからです。<br><br><br>
          　私共【<span><u>齋藤建築</u></span>】では、<br>
          　特に新潟県下越地方に於ける気候、<br>
          </p>
          <ul>
            <li>(1) <span class="spBlue">降雪</span>であったり、</li>
            <li>(2) <span class="spBlue">海に近い値域に於ける浜風</span>など、</li>
          </ul>
          <p>
          　よく理解をし、<br>
          　ご希望とされる建屋の構造・向き等から、<br>
          　快適な生活をお送り頂く為の機能・デザインをご提案申し上げます。<br>
          </p>

          <div class="dline"></div>

          <p>
          　また当該地方に於ける寒さ、<br>
          　東日本大震災以降多くなった地震、<br>
          　これらに対する備えも考慮した住宅である事が、求められております。
          </p>
          <ul>
            <li>１．ご満足頂ける「<span>省エネ性能</span>」</li>
            <li>２．<span>耐震等級３</span>（<span class="spBlue">学校・病院と同等レベル</span>）</li>
          </ul>
          <p>
          「<span>長期優良住宅</span>」、<br>
          「<span class="spBlue">認定低炭素住宅</span>」等々<br>
          　ご満足頂けるお家のご提案から、設計施工をさせて頂きます。<br>
          </p>
        </div>
        <div class="ttlExpMB dspMB">
          <p>
            　私共【<span><u>齋藤建築</u></span>】では、<br>
            「<span class="spBlue">地元密着</span>」を行動理念として<br>
            　事業活動をおこなって居ります。<br><br>
            　私共は、<br>
          </p>
          <ul>
            <li>１．<span>その土地の気候風土に<br>
            　　　合った素材の選定</span></li>
            <li>２．<span>その土地の気候に適応した<br>
            　　　生活が送れる機能・<br>
            　　　デザインが大切</span></li>
          </ul>
          <p>
            　と、考えるからです。<br><br>
            　私共【<span><u>齋藤建築</u></span>】では、<br>
            　特に新潟県下越地方に於ける気候、<br>
          </p>
          <ul>
            <li>(1) <span class="spBlue">降雪</span>であったり、</li>
            <li>(2) <span class="spBlue">海に近い地域での浜風</span>など、</li>
          </ul>
          <p>
            　よく理解をし、<br>
            　ご希望とされる建屋の構造・向き等から、<br>
            　快適な生活をお送り頂く為の機能・<br>
            　デザインをご提案申し上げます。<br>
          </p>

          <div class="dline"></div>

          <p>
            　また当該地方に於ける寒さ、<br>
            　東日本大震災以降多くなった地震、<br>
            　これらに対する備えも考慮した住宅<br>
            　であることが、求められております。
          </p>
          <ul>
            <li>１．ご満足頂ける「<span>省エネ性能</span>」</li>
            <li>２．<span>耐震等級３</span><br>
            　（<span class="spBlue">学校・病院と同等レベル</span>）</li>
          </ul>
          <p>
            「<span>長期優良住宅</span>」、<br>
            「<span class="spBlue">認定低炭素住宅</span>」等々<br>
            　ご満足頂けるお家のご提案から、<br>
            　設計施工をさせて頂きます。<br>
          </p>
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo rlxBGBaseArea" id="detailInfo">

          <div class="infoArea">
            <p class="infoTitle">　<u>■【<span>新潟いい家の会</span>】</u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4>【<span>新潟いい家の会</span>】所属・工務店</h4>
                <br>
                <p>
                  「<span>新潟いい家の会</span>」では、<br>
                  　新潟県産の木材を活用するために、<br>
                </p>
                <ul>
                  <li>１．<span>木材が含む水分量を管理</span></li>
                  <li>２．<span>木材の強度を測定し管理</span></li>
                  <li>３．<span>木材の特性を理解した上で、<br>
                  　　材料として綺麗に仕上げる</span></li>
                </ul>
                <p>
                  　これら多々弛まぬ努力を継続し、<br>
                  　<span class="spBlue">信頼性の高い地域材を生産して活用する、<br>
                  　価値観を共有する会社のグループ</span>です。
                </p>
              </div>

              <div class="blkInfo">
                <h4 class="dspPC">土地の気候風土に合った素材とは？</h4>
                <h4 class="dspMB">土地の気候風土に<br>　　合った素材とは？</h4>
                <p class="dspPC">
                  <br>
                  　住宅を建てるその土地で育った木材は、<br>
                  　加工され住宅の屋台骨と成ったその後も、<br>
                  　育った環境と変化の少ない中で、<br>
                  　長きに渡り活躍して行く事が出来ます。<br><br>
                  　想像してみて下さい。<br>
                  　南国・沖縄県で育った材木を用いて、<br>
                  　北国・北海道にて住宅を建てるとします・・・<br><br>
                  　自分が仮に木材に成るとすると、<br>
                  　暖かい地方に育ち、<br>
                  　気温の変化は少なく幸せに暮らしていたのに、<br><br>
                  　嫁いだ先の気候は寒く、<br>
                  　気温への耐性を求められる事になるなんて・・・
                </p>
                <p class="dspMB">
                  <br>
                  　住宅を建てるその土地で育った木材は、<br>
                  　加工され住宅の屋台骨と成ったその後も、<br>
                  　育った環境と変化の少ない中で、<br>
                  　長きに渡り活躍して行く事が出来ます。<br><br>
                  　想像してみて下さい。<br>
                  　南国・沖縄県で育った材木を用いて、<br>
                  　北国・北海道にて住宅を<br>
                  　　　　建てるとします・・・<br><br>
                  　自分が仮に木材に成るとすると、<br>
                  　暖かい地方に育ち、<br>
                  　気温の変化は少なく<br>
                  　　　　幸せに暮らしていたのに・・・<br><br>
                  　嫁いだ先の気候は寒く、<br>
                  　気温への耐性を<br>
                  　求められる事になるなんて・・・
                </p>
              </div>
            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="extLink linkDec">
              <a href="//chiiki-grn.kennetserve.jp/group/detail/929" target="_blank" rel="noopener noreferrer">「新潟いい家の会」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
          </div>

          <!-- <div class="dline"></div> -->
          <!-- <div class="backgroundRlxArea"> -->
            <div class="rlxParentElmBG">
              <div class="rlxImgFrameH js-backgroundRlxImg" data-rellax-speed="-6" data-rellax-zindex="-2">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/treesAndSun_1080-1080.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の画像" class="rlxImgCfgH dspPC">
                <img src="<?php echo esc_url( get_template_directory_uri(). '/Images/ChkNewBuild/treesAndSun_763-1080.jpg' ) ?>" alt="新築設計のイメージと重なる爽やかな森の中に差し込む日差の縦型画像" class="rlxImgCfgH dspMB">
              </div>
            </div>
          <!-- </div> -->
        </div>

        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <div class="detailInfo rlxBGBaseArea" id="detailInfo2">

          <div class="infoArea">
            <p class="infoTitle dspPC">　<u>■ 【<span>齋藤建築</span>】の「<span class="spBlue">住宅・新築/設計</span>」とは？</u></p>
            <p class="infoTitle dspMB">　<u>■  【<span>齋藤建築</span>】の</u>　　　　　　<br>　　　<u>「<span class="spBlue">住宅・新築/設計</span>」とは？</u></p>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4><span>美しく性能のいい家</span></h4>
                <br>
                <p>
                  とは、
                </p>
                <ul>
                  <li>１．「<span>長期優良住宅</span>」である事</li>
                  <li>２．「<span>高度省エネ型</span>」である事</li>
                </ul>
                <p>
                  　これらを網羅する住宅が、<br>
                  「<span>美しく性能のいい家</span>」であると考えます。<br><br>
                  ■「<span>長期優良住宅</span>」であると言うのは、<br>
                </p>
                <ul id="listParentElm">
                  <li>(1) <span class="spBlue targetLi"><u>居住環境</u>　　　　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(2) <span class="spBlue targetLi"><u>維持保全計画</u>　　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(3) <span class="spBlue targetLi"><u>劣化対策</u>　　　　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(4) <span class="spBlue targetLi"><u>耐震性考慮</u>　　　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(5) <span class="spBlue targetLi"><u>維持管理・更新の容易</u>　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(6) <span class="spBlue targetLi"><u>住戸面積</u>　　　　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(7) <span class="spBlue targetLi"><u>省エネルギー性</u>　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                </ul>
                <div class="detailExplained">
                  <p class="eachDExp">良好な環境の形成：その他の地域の居住環境に配慮された住宅となります。</p>
                  <p class="eachDExp">長く快適にお住み頂く為に：傷みの少ない素材で計画的なメンテナンスを行い、長持ちする住宅をご提供する為の基準となります。</p>
                  <p class="eachDExp">将来に渡り：不具合が発生する事なく、構造躯体が問題無く使用できる住宅となります。</p>
                  <p class="eachDExp">地震に強く：揺れによる倒壊がし難く、安心して住める住宅となります。</p>
                  <p class="eachDExp">耐用年数：耐用年数の短い内装・設備の、メンテナンスが容易に実施できる住宅となります。</p>
                  <p class="eachDExp">良好な居住水準：良好な居住水準を確保する為に必要な規模を有する住宅となります。</p>
                  <p class="eachDExp">季節の環境変化に対応：冬暖かかく夏涼しい、快適な空間が体験できる住宅となります。</p>
                </div>
                <p class="dspPC">
                  　これらの要件を<br>
                  「<span class="spBlue">高度なレベルで満足しうる機能</span>」<br>
                  　を有する住宅を言います。<br><br>
                  ■「<span>高度省エネ型</span>」であると言うのは、<br>
                </p>
                <p class="dspMB">
                  　これらの要件を<br>
                  「<span class="spBlue">高度なレベルで<br>　満足しうる機能を有する住宅</span>」<br>
                  　を有する住宅を言います。<br><br>
                  ■「<span>高度省エネ型</span>」であると言うのは、<br>
                </p>
                <ul id="listParentElm2">
                  <li>(1)  <span class="spBlue targetLi"><u>認定低炭素住宅</u>　　　　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(2)  <span class="spBlue targetLi"><u>性能向上計画認定住宅</u>　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                  <li>(3)  <span class="spBlue targetLi"><u>ゼロ・エネルギー住宅</u>　</span> <i class="spBlue fas fa-hand-point-left fa-sm"></i></li>
                </ul>
                <div class="detailExplained">
                    <p class="eachDExp">高度省エネ型（認定低炭素住宅）において対象となる木造住宅については、都市の低炭素化の促進に関する法律（平成２４年９月５日法律第８４号）に基づき、所管行政庁による認定を受けた住宅となります。</p>
                    <p class="eachDExp">高度省エネ型（性能向上計画認定住宅）において対象となる木造住宅については、建築物のエネルギー消費性能の向上に関する法律（平成27年7月8日法律第53号）に基づき、所管行政庁による性能向上計画の認定を受けた住宅となります。</p>
                    <p class="eachDExp">住宅の躯体・設備の省エネ性能の向上、再生可能エネルギーの活用等によって、年間での一次エネルギー消費量が正味（ネット）で概ねゼロとなる住宅となります。</p>
                </div>
                <p>
                  　上記規格をクリアできる住宅を言います。
                </p>
              </div>

              <!--  -->
              <!-- 単一プリミティブ記事 -->
              <div class="blkInfo">
                <h4>住宅を建てる</h4>
                <br>
                <p class="dspPC">
                  「<span>美しく性能のいい家</span>」を建てる事をモットーとし、<br>
                  　私共にて建築する住宅は、<br>
                </p>
                <p class="dspMB">
                  「<span>美しく性能のいい家</span>」を建てる<br>
                  　ことをモットーとし、<br>
                  　私共にて建築する住宅は、<br>
                </p>
                <ul class="dspPC">
                  <li>１．<span>耐震等級２</span>（<span class="spBlue">学校・病院と同等レベル</span>）、</li>
                  <li>２．<span>優れた省エネ性能</span>を実装、</li>
                </ul>
                <ul class="dspMB">
                  <li>１．<span>耐震等級２</span><br>
                  　　（<span class="spBlue">学校・病院と同等レベル</span>）</li>
                  <li>２．<span>優れた省エネ性能</span>を実装</li>
                </ul>
                <p class="dspPC">
                  　としています。<br><br>
                  ■【<span>耐震等級２</span>】については、<br><br>
                  　日本各地で発生している地震に応じて、<br>
                  　耐震基準が改正され厳しく成ってきています。<br><br>
                  　従前、木造建築については、<br>
                  「<span class="spBlue">設計者のスキルや良心</span>」に委ねられていました。<br><br>
                  　しかしながら、<br>
                  　現在の建築基準法では木造住宅についても、<br><br>
                  「<span>震度６～７の揺れに対して倒壊・崩壊<br>
                  　　　　　　　　　の恐れのない建造物</span>」<br><br>
                  　とすることが定められています。<br><br>
                  「<span>当たり前のことを当たり前に構造計算</span>」し、<br>
                  「<span>しっかりとした耐震性を確保</span>」、<br><br>
                  　永く愛される木造住宅を建築して参ります。<br><br>
                  ■【<span>優れた省エネ性能</span>】については、<br><br>
                  　国の基準だけでなく、<br>
                  　実際に住む人の暮らしやすさを追求し、<br>
                  　適切な断熱材を使用することで、<br><br>
                  「<span>季節や昼夜の温度差が少なく、<br>
                  　身体に負担のかからない家を作る</span>」<br><br>
                  　こととしております。<br><br>
                  「<span class="spBlue">雪国新潟</span>」、<br>
                  　特に海辺の浜風の強い地域では、<br>
                </p>
                <p class="dspMB">
                  　としています。<br><br>
                  ■【<span>耐震等級２</span>】については、<br><br>
                  　日本各地で発生している地震に応じて、<br>
                  　耐震基準が改正され厳格化されています。<br><br>
                  　従前、木造建築については、<br>
                  「<span class="spBlue">設計者のスキルや良心</span>」に<br>
                  　委ねられていました。<br><br>
                  　しかしながら、<br>
                  　現在の建築基準法では木造住宅についても、<br><br>
                  「<span>震度６～７の揺れに対して倒壊・崩壊<br>
                  　　　　　　　　　の恐れのない建造物</span>」<br><br>
                  　とすることが定められています。<br><br>
                  「<span>当たり前のことを当たり前に構造計算</span>」、<br>
                  「<span>しっかりとした耐震性を確保</span>」し、<br><br>
                  　永く愛される木造住宅を建築して参ります。<br><br>
                  ■【<span>優れた省エネ性能</span>】については、<br><br>
                  　国の基準だけでなく、<br>
                  　実際に住む人の暮らしやすさを追求し、<br>
                  　適切な断熱材を使用することで、<br><br>
                  「<span>季節や昼夜の温度差が少なく、<br>
                  　身体に負担のかからない家を作る</span>」<br><br>
                  　こととしております。<br><br>
                  「<span class="spBlue">雪国新潟</span>」、<br>
                  　特に海辺の浜風の強い地域では、<br>
                </p>
                <ul class="dspPC">
                  <li>(1) <span>光熱費を抑える事ができる</span></li>
                  <li>(2) <span>籠るケースが多くとも、健康的に暮らせる</span></li>
                  <li>(3) <span>気密性能・防音性能を高め、<br>
                  　　　　　　 心安らかに暮らせる</span></li>
                </ul>
                <ul class="dspMB">
                  <li>(1) <span>光熱費を抑える事ができる</span></li>
                  <li>(2) <span>籠るケースが多くとも、<br>
                  　　　　　　 健康的に暮らせる</span></li>
                  <li>(3) <span>気密性能・防音性能を高め、<br>
                  　　　　　　 心安らかに暮らせる</span></li>
                </ul>
                <p>
                  　を重視しております。
                </p>
              </div>

            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="sBysBlk">

              <div class="blkInfo">
                <h4>夢を叶えるハードルを低く・・・</h4>
                <br>
                <p>
                  　　<span>正しい知識</span>と<span>新しい技術</span>をもって、
                </p>
                <ul>
                  <li>１．<span>長期優良住宅</span></li>
                  <li>２．<span>認定低炭素住宅</span></li>
                </ul>
                <p class="dspPC">
                  　と言った質の高い、<br>
                  「<span>美しく性能のいい家</span>」を建てることにより、<br>
                  　国や地方自治体からの、<br>
                  　様々な優遇措置を受ける事が出来ます。<br><br>
                  　そのために私共は、<br>
                  　様々なお打合せに於いて一切手を抜きません。<br><br>
                  　施主様とご相談を密にさせて頂き、<br>
                  　素晴らしいものをご提案させて頂きながら、<br><br>
                  「<span>ご希望にそう、夢が叶う、永く愛して頂ける家</span>」<br>
                  　を造り上げて参ります。
                </p>
                <p class="dspMB">
                  　と言った質の高い、<br>
                  「<span>美しく性能のいい家</span>」<br>
                  　を建てることにより、<br>
                  　国や地方自治体からの、<br>
                  　様々な優遇措置を受ける事が出来ます。<br><br>
                  　そのために私共は、<br>
                  　様々なお打合せに於いて<br>
                  　一切手を抜きません。<br><br>
                  　施主様とご相談を密にさせて頂き、<br>
                  　素晴らしいものをご提案させて頂きながら、<br><br>
                  「<span>ご希望にそう、夢が叶う、<br>
                  　　　永く愛して頂ける家</span>」<br><br>
                  　を造り上げて参ります。
                </p>
              </div>

              <div class="blkInfo">
                <h4>地域型住宅グリーン化　　<br>
                    　　　事業採択グループ</h4>
                <br>
                <p class="dspPC">
                  【<span>齋藤建築</span>】は、<br>
                  　正しい知識と新しい技術を研鑽するためにも、<br><br>
                  「<span>一般社団法人 木を活かす建築推進協議会内<br>
                  　　　 地域型住宅グリーン化事業評価事務局</span>」推進の<br><br>
                  「<span>地域型住宅グリーン化事業採択グループ</span><br>
                  　　　　　　　　　　　　 ・<span>新潟いい家の会</span>」に所属<br>
                  　しております。<br><br>
                  　地域における<br>
                  　木造住宅の関連事業者が「グループ」をつくり、<br><br>
                  　<span class="spBlue">省エネルギー性能や耐久性等に優れた<br>
                  　木造住宅・木造建築物の整備及び<br>
                  　木造住宅の省エネ改修を促進する</span><br><br>
                  　ためのグループです。
                </p>
                <p class="dspMB">
                  【<span>齋藤建築</span>】は、<br>
                  　正しい知識と<br>
                  　新しい技術を研鑽するためにも、<br><br>
                  「<span>一般社団法人<br>
                  　木を活かす建築推進協議会内<br>
                  　地域型住宅グリーン化事業評価事務局</span>」<br>
                  　推進の、<br><br>
                  「<span>地域型住宅グリーン化事業採択グループ</span><br>
                  　・<span>新潟いい家の会</span>」に<br>
                  　所属しております。<br><br>
                  　地域における木造住宅の<br>
                  　関連事業者が「グループ」をつくり、<br><br>
                  　<span class="spBlue">省エネルギー性能や耐久性等に優れた<br>
                  　木造住宅・木造建築物の整備及び<br>
                  　木造住宅の省エネ改修を促進する</span><br><br>
                  　ためのグループです。
                </p>
              </div>
            </div>
          </div>

          <div class="dline"></div>

          <div class="infoArea">
            <div class="extLink linkDec marginT70">
              <a class="dspPC" href="//chiiki-grn.kennetserve.jp/subsidy/" target="_blank" rel="noopener noreferrer">「補助対象住宅について」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//chiiki-grn.kennetserve.jp/subsidy/" target="_blank" rel="noopener noreferrer">「補助対象住宅について」<br>　　　　　　　　　　はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
            </div>
            <div class="extLink linkDec">
              <a class="dspPC" href="//chiiki-grn.kennetserve.jp/" target="_blank" rel="noopener noreferrer">「地域型住宅グリーン化事業採択グループ」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
              <a class="dspMB" href="//chiiki-grn.kennetserve.jp/" target="_blank" rel="noopener noreferrer">「地域型住宅グリーン化事業<br>　　　採択グループ」はこちら <i class="fas fa-external-link-alt extLnkIcon"></i></a>
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
