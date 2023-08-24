
<!--  -->
<!-- セクション１に於ける、メインスライドショーのコード -->    
          <?php include ( get_template_directory() . '/contents/com/Slide-MAIN_StyleDef.php' ); ?>

          <div class="flexslider slideShow-Style">
            <ul class="slides">

              <?php
                for( $i=0 ; $i<$maimSsImageMaxCount ; $i++ ) {
              ?>
                <li>
                  <picture>
                    <source srcset="<?php echo $mainSsMBFName[$i] ?>" media="(max-width: 799px)" alt="トップページ内主要スライドショーの新築・リフォームに関するデモ画像です"/>
                    <source srcset="<?php echo $mainSsPCFName[$i] ?>" media="(min-width: 800px)" alt="トップページ内主要スライドショーの新築・リフォームに関するデモ画像です"/>
                    <img       src="<?php echo $mainSsPCFName[$i] ?>" alt="トップページ内主要スライドショーの新築・リフォームに関するデモ画像です"/>
                  <picture>
                </li>
              <?php } ?>
            </ul>

            <div class="mainLogoArea">
              <div class="backGndMask"></div>
              <div class="companyLogo"></div>
            </div>
          </div>
