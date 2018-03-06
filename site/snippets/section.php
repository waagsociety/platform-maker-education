<?php
  if(!function_exists("section_classes")) {
    function section_classes($s) {
      $names = [
        "left",
        $s->layout(), /* layout field specifying the width in cols */
        $s->elementheight() /* element height field either full or half height */
      ];
      return array_merge($s->border()->split(), $names); /* merge with borders specified in border field (top,left,bottom,right)*/
    }
  }
  if(!function_exists("background_url")) {
    function background_url($s) {
      if($s->bgimage() != null && !$s->bgimage()->empty()) {
        if($file = $s->file($s->bgimage()->value())) {
          return $file->url();
        }
      }
      return "";
    }
  }
  if(!function_exists("logo_url")) {
    function logo_url($s) {
      if($s->logo() != null && !$s->logo()->empty()) {
        if($file = $s->file($s->logo()->value())) {
          return $file->url();
        }
      }
      return "";
    }
  }
?>


<a href="<?php echo $section->link() ?>">
  <section class="<?php echo join(section_classes($section)," ") ?>">
    <div class="box">
      <!-- empty div with bgimage -->
      <div class="box-content <?php echo ($section->imagefit()->int() == 1 ? "fit" : "cover")?>" style="background-image: url(<?php echo background_url($section) ?>);">
      </div>
      <!-- show white text bar if text content and or logo content -->
      <div class="section-bar" style="width:100%;background:white;">
        <!-- logo and text -->
        <?php if(!$section->caption()->empty() && !empty(logo_url($section))): ?>
        <div class="text-container">
          <?php echo html($section->caption()->kirbytext()) ?>
        </div>
        <div class="logo-container">
          <div class="<?php echo $section->logostyle() ?>" style="background-image: url(<?php echo logo_url($section) ?>);">
          </div>
        </div>
        <!-- only text -->
        <?php elseif (!$section->caption()->empty()): ?>
          <div class="text-container full-width">
            <?php echo html($section->caption()->kirbytext()) ?>
          </div>
        <!-- only logo, create dummy p to force bar height to be equal to text bar -->
        <?php elseif (!empty(logo_url($section))): ?>
          <div class="text-container empty">
            <p>&nbsp;</p>
          </div>
          <div class="logo-container full-width">
            <div class="<?php echo $section->logostyle() ?>" style="background-image: url(<?php echo logo_url($section) ?>);">
            </div>
          </div>
        <?php endif ?>
      </div>
    </div>
  </section>
</a>
