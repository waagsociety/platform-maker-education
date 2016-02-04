<?php

$items = $pages->find('nieuws')->children()->visible()->flip()->paginate(3);

?>

<?php foreach($items as $section): ?>
  <section class="nieuws-item left">
    <h1 class="beta"><?php echo html($section->title()) ?></h1>
    <p><?php echo html($section->intro()) ?></p>
    <a href="<?php echo $section->url() ?>" class="btn btn-3">Lees artikel</a>
  </section>
<?php endforeach ?>

<?php if($items->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($items->pagination()->hasNextPage()): ?>
  <a class="btn btn-3 left" href="<?php echo $items->pagination()->nextPageURL() ?>">Oudere artikelen</a>
  <?php endif ?>

  <?php if($items->pagination()->hasPrevPage()): ?>
  <a class="btn btn-3 right" href="<?php echo $items->pagination()->prevPageURL() ?>">Nieuwere artikelen</a>
  <?php endif ?>

</nav>
<?php endif ?>
