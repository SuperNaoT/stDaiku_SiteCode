
    <section id="section-1">

      <!--  -->
      <!-- サイト訪問者への、挨拶バナー -->
      <!-- <?php //get_template_part( "/func/greetingMessage", null, array('greetingMessage'=>$DEF_pageContactForm_msg) ); ?> -->

      <div class="container">

        <?php
          global $GB_reEditFlag;
          if   ( $GB_reEditFlag != 0 )  { $h1Title = "入力フォーム：記入内容の編集"; }
          else                          { $h1Title = "入力フォーム"; }
        ?>
        <div class="pageTitle" id="pageTitle">
          <div class="hrzLine"></div>
          <!-- <h1>　■ 入力フォーム：記入内容の編集</h1> -->
          <h1><?php echo $h1Title; ?></h1>
        </div>
    
        <!-- 仕切り線表示 -->
        <div class="uline"></div>
  
        <div class="detailInfo" id="detailInfo">

          <h2>　■ 入力フォーム　</h2>

          <form action="" method="post" name="contactForm1">
            <!--  -->
            <!-- 入力値にエラーが有った！ -->
            <!-- エラーメッセージを表示。 -->
            <?php if( !empty($errors) ): ?>
              <?php // console_log( $errors );?>
              <ul class="error_list">
                <?php foreach( $errors as $value ): ?>
                  <li><?php echo $value; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <div class="dspPC">
              <div class="item">
                <label class="label">お名前　　　　　<span class="label-required">（必須）</span>：</label>
                <label>（氏）</label>
                <input  id="nameLPC" type="text" name="yourLnamePC" placeholder="齋藤" class="inElmPC" value="<?php if( !empty($_POST['yourLnamePC']) ){ echo $_POST['yourLnamePC']; } ?>">
                <label>　（名）</label>
                <input  id="nameFPC" type="text" name="yourFnamePC" placeholder="太郎" class="inElmPC" value="<?php if( !empty($_POST['yourFnamePC']) ){ echo $_POST['yourFnamePC']; } ?>">
              </div>  
              <div class="item">
                <label class="labelNoLBdr">フリガナ　　　　<span class="label-required">（必須）</span>：</label>
                <label>（氏）</label>
                <input  id="nameKLPC" type="text" name="yourKLnamePC" placeholder="サイトウ" pattern="[\u30A1-\u30F6]*" class="inElmPC" value="<?php if( !empty($_POST['yourKLnamePC']) ){ echo $_POST['yourKLnamePC']; } ?>">
                <label>　（名）</label>
                <input  id="nameKFPC" type="text" name="yourKFnamePC" placeholder="タロウ" pattern="[\u30A1-\u30F6]*" class="inElmPC" value="<?php if( !empty($_POST['yourKFnamePC']) ){ echo $_POST['yourKFnamePC']; } ?>">
              </div>  
            </div>
            <div class="dspMB">
              <div class="item">
                <label class="label">お名前　：（氏）<br>　<span class="label-required">（必須）</span></label>
                <input id="nameLMB" type="text" name="yourLnameMB" placeholder="齊藤" class="inElmMB" value="<?php if( !empty($_POST['yourLnameMB']) ){ echo $_POST['yourLnameMB']; } ?>">
              </div>  
              <div class="item">
                <label class="labelNoLBdr">　　　　　（名）<br>　　　　　</label>
                <input id="nameFMB" type="text" name="yourFnameMB" placeholder="太郎" class="inElmMB" value="<?php if( !empty($_POST['yourFnameMB']) ){ echo $_POST['yourFnameMB']; } ?>">
              </div>  
              <div class="item">
                <label class="label">フリガナ：（氏）<br>　<span class="label-required">（必須）</span></label>
                <input id="nameKLMB" type="text" name="yourKLnameMB" placeholder="サイトウ" pattern="[\u30A1-\u30F6]*" class="inElmMB" value="<?php if( !empty($_POST['yourKLnameMB']) ){ echo $_POST['yourKLnameMB']; } ?>">
              </div>  
              <div class="item">
                <label class="labelNoLBdr">　　　　　（名）<br>　　　　　</label>
                <input id="nameKFMB" type="text" name="yourKFnameMB" placeholder="タロウ" pattern="[\u30A1-\u30F6]*" class="inElmMB" value="<?php if( !empty($_POST['yourKFnameMB']) ){ echo $_POST['yourKFnameMB']; } ?>">
              </div>  
            </div>
            <div class="noMgnULine"></div>
            
            <div class="dline"></div>

            <div class="dspPC">
              <div class="item">
                <label class="label emLabel">メールアドレス　<span class="label-required">（必須）</span>：</label>
                <input id="emailPC" type="email" name="emailPC" placeholder="example@gmail.com" class="inElmPC" value="<?php if( !empty($_POST['emailPC']) ){ echo $_POST['emailPC']; } ?>">
              </div>  
            </div>
            <div class="dspMB">
              <div class="item">
                <label class="label">メール<br>アドレス：<br>　<span class="label-required">（必須）</span></label>
                <input id="emailMB" type="email" name="emailMB" placeholder="example@gmail.com" class="inElmMB" value="<?php if( !empty($_POST['emailMB']) ){ echo $_POST['emailMB']; } ?>">
              </div>  
            </div>
            <div class="noMgnULine"></div>

            <div class="dline"></div>

            <div class="dspPC">
              <div class="item m-form-select">
                <label class="label">お問い合わせ種別<span class="label-required">（必須）</span>：</label>
                <select name="itemOptionPC" class="inElmPC">
                  <?php
                    foreach( $itemOptionList as $value )  {
                      if ( $value[0] === $option )  {
                        // ① POST データが存在する場合はこちらの分岐に入る
                        echo "<option value='$value[0]' selected>".$value[1]."</option>";
                      }else{
                        // ② POST データが存在しない場合はこちらの分岐に入る
                        echo "<option value='$value[0]'>".$value[1]."</option>";
                      }
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="dspMB">
              <div class="item m-form-select">
                <label class="label">お問い合わせ<br>　　　　種別：<br>　<span class="label-required">（必須）</span></label>
                <select name="itemOptionMB" class="inElmMB">

                  <?php
                    foreach( $itemOptionList as $value )  {
                      if ( $value[0] === $option )  {
                        // ① POST データが存在する場合はこちらの分岐に入る
                        echo "<option value='$value[0]' selected>".$value[2]."</option>";
                      }else{
                        // ② POST データが存在しない場合はこちらの分岐に入る
                        echo "<option value='$value[0]'>".$value[2]."</option>";
                      }
                    }
                  ?>
                </select>
              </div>
            </div>
            
            <div class="dspPC">
              <div class="item">
                <label class="label">お問い合わせ内容<span class="label-required">（必須）</span>：</label>
                <textarea id="textarea-itemPC" name="textareaItemPC" class="inElmPC"><?php if( !empty($_POST['textareaItemPC']) ){ echo $_POST['textareaItemPC']; } ?></textarea>
              </div>
            </div>
            <div class="dspMB">
              <div class="item">
                <label class="label">お問い合わせ<br>　　　　内容：<br>　<span class="label-required">（必須）</span></label>
                <textarea id="textarea-itemMB" name="textareaItemMB" class="inElmMB"><?php if( !empty($_POST['textareaItemMB']) ){ echo $_POST['textareaItemMB']; } ?></textarea>
              </div>
            </div>

            <div class="dline" style="margin-bottom: 30px;"></div>

            <div class="dspPC">
              <div class="item pvChkBox">
                <label for="pvChkBoxPC">　<input id="pvChkBoxPC" type="checkbox" name="agreementPC" value="1">
                                        　プライバシーポリシーに同意します。
                </label>
              </div>
            </div>
            <div class="dspMB">
              <div class="item pvChkBox">
                <label for="pvChkBoxMB">　<input id="pvChkBoxMB" type="checkbox" name="agreementMB" value="1">
                                        　プライバシーポリシーに同意します。
                </label>
              </div>
            </div>

            <!--  -->
            <!-- 入力値にエラーが有った！ -->
            <!-- エラーメッセージを表示。 -->
            <?php if( !empty($errors) ): ?>
              <?php // console_log( $errors );?>
              <br>
              <ul class="error_list">
                <?php foreach( $errors as $value ): ?>
                  <li><?php echo $value; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <div class="sendBtn">
              <button type="submit" name="btn_confirm" class="confBtn sdw-btn" id="submitBtn" value="入力内容を確認する">入力内容を確認する</button>
            </div>
          </form>
        </div>

        <!-- イメージ画像表示 -->
        <div class="imgFrame">
          <div class="pageCthImage" id="pageCthImage"></div> 
        </div>
      </div>
    </section>
