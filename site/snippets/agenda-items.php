<?php
  $items = $pages->find('agenda')->children()->visible()->paginate(100);
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


<?php foreach($items as $section): ?>
  <section class="nieuws-item left stamp-item">
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
