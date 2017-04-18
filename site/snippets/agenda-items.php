<?php

$items = $pages->find('agenda')->children()->visible()->flip()->paginate(20);

?>

<?php foreach($items as $section): ?>
  <section class="nieuws-item left stamp-item">
	<?php if($section->maakweekstamp() == "1"): ?>
	<h2 class="maakweek-stamp">ABC-MAAKWEEK</h2>
	<?php endif ?> 
    <h1 class="beta"><?php echo html($section->title()) ?></h1>
    <p class=""><?php echo html($section->intro()) ?></p>
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
