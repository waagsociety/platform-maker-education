<?php
  if(!function_exists("section_classes")) {
    function section_classes($s) {
      $names = [
        "scene_element",
        "scene_element--fadein",
        "item",
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

<!--
background-image: url(http://127.0.0.1/default/content/1-home/1-agenda/planet-urf.svg);
position: absolute;
height: 150%;
bottom: 2%;
width: 100%;
backface-visibility: ;
background-size: contain;
background: repeat;
background-repeat: no-repeat;
background-position-x: left;*/ -->

<a href="<?php echo $section->link() ?>" class="<?php echo join(section_classes($section)," ") ?>">
  <section style="position:relative;padding:15px;">
    <div style="border:5px solid #F8A531;padding:0px;overflow:hidden;width:100%;height:100%;">
      <div class="box-content <?php echo ($section->imagefit()->int() == 1 ? "fit" : "cover")?>" style="background-image: url(<?php echo background_url($section) ?>);">
      </div>
      <!-- show white text bar if text content -->
      <?php if(!$section->caption()->empty()): ?>
      <div class="section-bar" style="width:100%;position:absolute;bottom:0px;background:white;">
        <?php echo html($section->caption()->kirbytext()) ?></h1>
        <div class="icon" style="background-image: url(<?php echo logo_url($section) ?>);"></div>
        <!--<img src="<?php echo logo_url($section) ?>" style="position:absolute;height:150%;bottom:2%;right:2%;"/>-->
      </div>
      <?php endif ?>
    </div>
  </section>
</a>
