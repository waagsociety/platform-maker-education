<?php

  $classes = [
    "left",
    $section->layout(), // layout field specifying the width in cols
    $section->elementheight() // element height field either full or half height
  ];
  $section_classes = join($classes," ");
  $background_url = $section->bgimage()->fullURL();
  $logo_url = $section->logo()->fullURL();
?>


<a href="<?php echo $section->link() ?>">
  <section class="<?php echo $section_classes ?>">
    <!-- if there is no background use text as background -->
    <?php if($background_url != ""): ?>
      <div class="box">
        <!-- empty div with bgimage -->
        <div class="box-content <?php echo ($section->imagefit()->int() == 1 ? "fit" : "cover")?>" style="background-image: url(<?php echo $background_url ?>);">
        </div>
        <!-- show white text bar if text content and or logo content -->
        <div class="section-bar" style="width:100%;background:white;">
          <!-- logo and text -->
          <?php if(!$section->caption()->empty() && $logo_url != ""): ?>
          <div class="text-container">
            <?php echo html($section->caption()->kirbytext()) ?>
          </div>
          <div class="logo-container">
            <div class="<?php echo $section->logostyle() ?>" style="background-image: url(<?php echo $logo_url ?>);">
            </div>
          </div>
          <!-- only text -->
          <?php elseif(!$section->caption()->empty()): ?>
            <div class="text-container full-width">
              <?php echo html($section->caption()->kirbytext()) ?>
            </div>
          <!-- only logo, create dummy p to force bar height to be equal to text bar -->
          <?php elseif($logo_url != ""): ?>
            <div class="text-container empty">
              <p>&nbsp;</p>
            </div>
            <div class="logo-container full-width">
              <div class="<?php echo $section->logostyle() ?>" style="background-image: url(<?php echo $logo_url ?>);">
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
    <?php else: ?>
      <div class="tagline box">
        <?php echo html($section->caption()->kirbytext()) ?>
      </div>
    <?php endif ?>
  </section>
</a>
