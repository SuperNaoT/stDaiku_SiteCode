
    <section id="section-2">
      <div class="container">

        <div class="pageTitle" id="pageTitle-2">
          <div class="hrzLine"></div>
          <h1>送信が完了しました。</h1>
        </div>
    
        <!-- 仕切り線表示 -->
        <div class="uline"></div>

        <!-- ********************************************************* -->
        <!-- ********************************************************* -->
        <!-- ■ 送信内容、表示処理 -->
        <!-- ********************************************************* -->
        <!-- ********************************************************* -->
        <div class="detailInfo" id="detailInfo-2">
          <h2>　■ お問い合わせ内容　</h2>

          <!-- <form action="./index.php" style="margin-top: 20px;"> -->
          <!-- <form action="<?php // echo esc_url( home_url( '/index.php' ) )?>" style="margin-top: 20px;"> -->
          <form action="<?php echo esc_url( home_url( '/' ) )?>" style="margin-top: 20px;">
            <div class='dspPC'>
              <div class='item'>
                <label class='confLabel' for='name'>お名前　　　　　：</label>
                <span class='inStrPC'><?php echo $lName ?></span>　
                <span class='inStrPC'><?php echo $fName ?></span>　　様
              </div>  
              <div class='item'>
                <label class='confLabelNoLBdr' for='name'>フリガナ　　　　：</label>
                <span class='inStrPC'><?php echo $klName ?></span>　
                <span class='inStrPC'><?php echo $kfName ?></span>　　様
              </div>  
            </div>
            <div class='dspMB'>
              <div class='item'>
                <label class='confLabel' for='name'>お名前　：<br>　</label>
                <span class='inStrMB'><?php echo $lName ?></span>
              </div>  
              <div class='item'>
                <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                <span class='inStrMB'><?php echo $fName ?></span>　様
              </div>  
              <div class='item'>
                <label class='confLabel' for='name'>フリガナ：<br>　</label>
                <span class='inStrMB'><?php echo $klName ?></span>
              </div>  
              <div class='item'>
                <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                <span class='inStrMB'><?php echo $kfName ?></span>　様
              </div>  
            </div>
            <div class='noMgnULine'></div>
              
            <div class="dline"></div>
            
            <div class='dspPC'>
              <div class='item'>
                <label class='confLabel' for='email'>メールアドレス　：</label>
                <span class='inStrPC'><?php echo $mail ?></span>　
              </div>  
            </div>
            <div class='dspMB'>
              <div class='item'>
                <label class='confLabel' for='email'>メール<br>アドレス：<br>　</label>
                <span class='inStrMB'><?php echo $mail ?></span>　
              </div>  
            </div>
            <div class='noMgnULine'></div>

            <div class="dline"></div>

            <div class='dspPC'>
              <div class='item'>
                <label class='confLabel'>お問い合わせ種別：</label>
                <span class='inStrPC'>

                  <?php
                    switch ($option) {
                      case 'noSelect':
                        echo '★ 問合せ種別未選択';
                        break;
                      case 'homeNewBuild':
                        echo '》住宅・新築/設計';
                        break;
                      case 'reformConsul':
                        echo '》住宅リフォームのご相談';
                        break;
                      case 'homeInspect':
                        echo '》住宅診断・ホームインスペクション';
                        break;
                      case 'earthQChk':
                        echo '》住宅耐震診断';
                        break;
                      case 'other':
                        echo '》その他';
                        break;
                      default:
                        echo '★ 問合せ種別選択エラー';
                      };
                  ?>
                </span>
              </div>
            </div>
            <div class='dspMB'>
              <div class='item'>
                <label class='confLabel'>お問い合わせ<br>　　　　種別：<br></label>
                <span class='inStrMB' style="font-size: 11px;">
                  <?php
                    switch ($option) {
                      case 'noSelect':
                        echo '★ 問合せ種別未選択';
                        break;
                      case 'homeNewBuild':
                        echo '》住宅・新築/設計';
                        break;
                      case 'reformConsul':
                        echo '》住宅リフォームのご相談';
                        break;
                      case 'homeInspect':
                        echo '》住宅診断';
                        break;
                      case 'earthQChk':
                        echo '》住宅耐震診断';
                        break;
                      case 'other':
                        echo '》その他';
                        break;
                      default:
                        echo '★ 問合せ種別選択エラー';
                      };
                  ?>
                </span>
              </div>
            </div>
            
            <div class='dspPC'>
              <div class='item'>
                <label class='confLabel' for='textarea-item'>お問い合わせ内容：</label>
                <div class='inTxtPC'><span><?php echo $askText ?></span></div>
              </div>
            </div>
            <div class='dspMB'>
              <div class='item'>
                <label class='confLabel' for='textarea-item'>お問い合わせ<br>　　　　内容：<br>　</label>
                <div class='inTxtMB'><span><?php echo $askText ?></span></div>
              </div>
            </div>

            <!-- <div class="dline" style="margin-bottom: 30px;"></div> -->

            <div class="sendBtn">       <!-- NTAD 20220618 -->
              <button type="submit" name="btn_confirm" class="confBtn sdw-btn" value="ホームへ戻る">ホームへ戻る</button>
            </div>
          </form>

        </div>    <!-- detailInfo -->

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage-2"></div> 
        </div>

      </div>
    </section>
