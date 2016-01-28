<?php
  $items = $pages->find('inspiratie')->children();
  $first = $items->first();
?>

<section class="sectionHeader">
  <header>
    <h1>Inspiratie</h1>
    <p>Wat inspireert ons?</p>
  </header>
</section>
<section class="inspiration_slider full-width left">
  <?php foreach($items as $section):?>
      <li <?php if($section == $first) echo ' class="active"' ?> style="background-image: url(/content/<?php echo $section->diruri() ?>/<?php echo html($section->heroimage()) ?>);">
        <div class="slider_caption">
          <h1 class="beta"><?php echo html($section->title()) ?></h1>
          <p><?php echo html($section->intro()) ?></p>
          <a href="<?php echo $section->url() ?>" class="btn btn-2">Inspireer jezelf</a>
        </div>
      </li>
  <?php endforeach ?>
</section>
