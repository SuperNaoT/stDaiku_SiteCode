<?php
/*
Template Name: 会社概要
*/

  $GB_menuPos    = 7;
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
      <?php get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageCompanyProfile_msg) ); ?>

      <div class="container">

        <!-- ******************************* -->
        <!-- ******************************* -->
        <!-- 以下内容を、ページ毎に実装する！   -->
        <!-- ******************************* -->
        <!-- ******************************* -->
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <h1>会社のご案内</h1>
        </div>
        <div class="uline"></div>

        <div class="detailInfo" id="detailInfo">
          <table>
            <tr>
              <td class="leftPad50">会社名 </td>
              <td>：　株式会社 斉藤建築</td>
            </tr>
            <tr>
              <td class="leftPad50">設計事務所　 </td>
              <td>：　齋藤工１級建築士事務所</td>
            </tr>
            <tr>
              <td class="leftPad50">代表者 </td>
              <td>：　代表取締役社長 齋藤 工</td>
            </tr>
            <tr>
              <td class="leftPad50">所在地 </td>
              <td>：　新潟県胎内市荒井浜７９</td>
            </tr>
            <tr>
              <td class="leftPad50">電話 </td>
              <td>：　0254-46-3055</td>
            </tr>
            <tr>
              <td class="leftPad50">創業 </td>
              <td>：　船大工の時代から・・・</td>
            </tr>
            <tr>
              <td class="leftPad50">資本金 </td>
              <td>：　5,000,000円</td>
            </tr>
            <tr>
              <td class="leftPad50">建設業許可 </td>
              <td>：　新潟県（般-26）44503</td>
            </tr>
            <tr>
              <td class="leftPad50">事業内容 </td>
              <td>：　住宅新築・改築・設備・一般
                <ul>
                  <li>》住宅設計</li>
                  <li>》住宅新築</li>
                  <li>》住宅リフォーム</li>
                  <li>
                    <ul>
                      <li>・断熱材更新</li>
                      <li>・外壁模様替え</li>
                      <li>・和室を洋室へ更新</li>
                      <li>・和式トイレを様式へ更新</li>
                      <li>・お風呂のユニットバス化</li>
                      <li>・対面キッチン化等、更新</li>
                      <li>・各種設備交換（自動水栓）</li>
                      <li>・バリアフリー対策</li>
                      <li>・他</li>
                    </ul>  
                  </li>
                  <li>》各種住宅診断</li>
                  <li>
                    <ul id="chgLabel">
                      <li>・木造住宅耐震診断</li>
                      <li class="dspPC">・住宅診断/ホームインスペクション</li>
                      <li class="dspMB">・ホームインスペクション</li>
                    </ul>  
                  </li>
                </ul>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>

  </div>    <!-- mainContents -->

<!-- フッター部の取込み -->
<?php get_footer(); ?>
