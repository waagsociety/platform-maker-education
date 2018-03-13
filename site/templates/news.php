<?php
  $items = $pages->find('nieuws')->children()->visible()->sortBy('date', 'asc');;
?>

<?php snippet('header') ?>
  <main class="main news">
    <!--- news items -->
    <?php foreach($items as $section): ?>
      <?php snippet('news-item', array('section' => $section)) ?>
    <?php endforeach ?>
  </main>
<?php snippet('footer') ?>
