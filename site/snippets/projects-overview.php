<?php

$items = $pages->find('projects')->children();

?>

<?php foreach($items as $section): ?>
<a href="<?php echo $section->url() ?>" class="item <?php echo html($section->layout()) ?> <?php foreach($section->border()->split() as $b): ?><?php echo html($b) ?> <?php endforeach ?> <?php echo html($section->elementheight()) ?> left" style="background-image: url(/content/<?php echo $section->diruri() ?>/<?php echo html($section->icon()) ?>);">
  <section>
    <h1 class="beta"><?php echo html($section->title()) ?></h1>
    <p><?php echo html($section->intro()) ?></p>
  </section>
</a>
<?php endforeach ?>