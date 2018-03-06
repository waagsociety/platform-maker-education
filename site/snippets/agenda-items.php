<?php
  $items = $pages->find('agenda')->children()->visible();
  if(!function_exists("split_title")) {
    function split_title($t) {
      $result = ["",""];
      $parts  = explode("~",$t);
      if(isset($parts[0])) {
        $result[0] = $parts[0];
      }
      if(isset($parts[1])) {
        $result[1] = $parts[1];
      }
      return $result;
    }
  }
?>



  <section class="nieuws-item left one-col">
	<span class="border" style="display:block;background:#eee;">
	<?php if($section->maakweekstamp() == "1"): ?>
	<h2 class="maakweek-stamp">ABC-MAAKWEEK</h2>
	<?php endif ?>
    <h1 class="beta">
      <?php echo html(split_title($section->title())[0]) ?>
    </h1>
    <p style="font-weight:bold;font-style:italic">
      <?php echo html(split_title($section->title())[1]) ?>
    </p>
    <p class=""><?php echo html($section->intro()) ?></p>
    <a href="<?php echo $section->url() ?>" class="btn btn-3">Meer informatie</a>
	</span>
  </section>
