<?php
  $items = $pages->find('inspiratie')->children();
  $first = $items->first();
?>

<section class="inspiration_slider half-width left">
  <?php foreach($items as $section):?>
      <li <?php if($section == $first) echo ' class="active"' ?> style="background-image: url(<?php echo url(); ?>/content/<?php echo $section->diruri() ?>/<?php echo html($section->heroimage()) ?>);">
        <div class="slider_caption">
          <h1 class="beta"><?php echo html($section->title()) ?></h1>
          <p><?php echo html($section->intro()) ?></p>
          <a href="<?php echo $section->url() ?>" class="btn btn-3">Inspireer jezelf</a>
        </div>
      </li>
  <?php endforeach ?>
</section>
