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
      if(!$s->icon()->empty()) {
        if($file = $s->file($s->icon()->value())) {
          return $file->url();
        }
      }
      return "";
    }
  }
  if(!function_exists("icon_class")) {
    function icon_class($s) {
      if(!$s->icon()->empty()) {
        if($file = $s->file($s->icon()->value())) {
          return $file->url();
        }
      }
      return "";
    }
  }
?>

<a href="<?php echo $section->link() ?>" class="<?php echo join(section_classes($section)," ") ?>">
  <section>
    <div style="background-image: url(<?php echo background_url($section) ?>);" class="<?php echo ($section->iconfit()->int() == 1 ? "fit" : "cover") ?>">
      <?php if(!$section->caption()->empty()): ?>
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
      <?php endif ?>
      <?php if(!$section->intro()->empty()): ?>
        <p><?php echo html($section->intro()) ?></p>
      <?php endif ?>
    </div>
  </section>
</a>
