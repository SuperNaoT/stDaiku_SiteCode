
    <section id="section-0">
      <div class="container">

        <div class="pageTitle" id="pageTitle-1">
          <div class="hrzLine"></div>
          <h1>記入内容のご確認</h1>
        </div>
    
        <!-- 仕切り線表示 -->
        <div class="uline"></div>
  
        <div class="detailInfo" id="detailInfo-1">

          <h2>　■ 記入内容　</h2>
          
          <form style="margin-top: 20px;">
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
                <label class='confLabel' for='name'>お名前　：<br></label>
                <span class='inStrMB'><?php echo $lName ?></span>
              </div>  
              <div class='item'>
                <label class='confLabelNoLBdr' for='name'>　　　　　<br>　　　　　</label>
                <span class='inStrMB'><?php echo $fName ?></span>　様
              </div>  
              <div class='item'>
                <label class='confLabel' for='name'>フリガナ：<br></label>
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
            <div class='noMgnULine'></div>

            <div class="dline" style="margin-bottom: 30px;"></div>

            <div class="dspPC">
              <div class="item">
                <label class='confLabel' style="width:26vw;">
                <!-- <p> -->
                  <?php if( $_POST['agreementPC'] === "1" ){ echo 'プライバシーポリシーに同意します'; }
                        else{ echo 'プライバシーポリシーに同意しません'; } ?>
                <!-- </p> -->
                </label>
              </div>
            </div>
            <div class="dspMB">
              <div class="item">
                <label class='confLabel' style="width:80vw;">
                <!-- <p> -->
                  <?php if( $_POST['agreementMB'] === "1" ){ echo 'プライバシーポリシーに同意します'; }
                        else{ echo 'プライバシーポリシーに同意しません'; } ?>
                <!-- </p> -->
                </label>
              </div>
            </div>
          </form>

          <div class='dspPC'>
            <form action='' method='post'>
              <input type='hidden' name='yourLnamePC'    value='<?php echo $_POST['yourLnamePC'    ]; ?>'>
              <input type='hidden' name='yourFnamePC'    value='<?php echo $_POST['yourFnamePC'    ]; ?>'>
              <input type='hidden' name='yourKLnamePC'   value='<?php echo $_POST['yourKLnamePC'   ]; ?>'>
              <input type='hidden' name='yourKFnamePC'   value='<?php echo $_POST['yourKFnamePC'   ]; ?>'>
              <input type='hidden' name='emailPC'        value='<?php echo $_POST['emailPC'        ]; ?>'>
              <input type='hidden' name='itemOptionPC'   value='<?php echo $_POST['itemOptionPC'   ]; ?>'>
              <input type='hidden' name='textareaItemPC' value='<?php echo $_POST['textareaItemPC' ]; ?>'>
              <input type='hidden' name='agreementPC'    value='<?php echo $_POST['agreementPC'    ]; ?>'>

              <div class="sendBtn">       <!-- NTAD 20220618 -->
                <input type='submit' class='confBtn sdw-btn' name='btn_back'   value='編集に戻る'>
                <input type='submit' class='confBtn sdw-btn' name='btn_submit' value='確定して送信'>
              </div>
            </form>
          </div>
          <div class='dspMB'>
            <form action='' method='post'>
              <input type='hidden' name='yourLnameMB'    value='<?php echo $_POST['yourLnameMB'    ]; ?>'>
              <input type='hidden' name='yourFnameMB'    value='<?php echo $_POST['yourFnameMB'    ]; ?>'>
              <input type='hidden' name='yourKLnameMB'   value='<?php echo $_POST['yourKLnameMB'   ]; ?>'>
              <input type='hidden' name='yourKFnameMB'   value='<?php echo $_POST['yourKFnameMB'   ]; ?>'>
              <input type='hidden' name='emailMB'        value='<?php echo $_POST['emailMB'        ]; ?>'>
              <input type='hidden' name='itemOptionMB'   value='<?php echo $_POST['itemOptionMB'   ]; ?>'>
              <input type='hidden' name='textareaItemMB' value='<?php echo $_POST['textareaItemMB' ]; ?>'>
              <input type='hidden' name='agreementMB'    value='<?php echo $_POST['agreementMB'    ]; ?>'>

              <br><br>
              <div class="sendBtn">       <!-- NTAD 20220618 -->
                <input type='submit' class='confBtn sdw-btn' name='btn_back'   value=' 編集に戻る '>
                <input type='submit' class='confBtn sdw-btn' name='btn_submit' value='確定して送信'>
              </div>
            </form>
          </div>
        </div>

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage-1"></div> 
        </div>
      </div>

    </section>
