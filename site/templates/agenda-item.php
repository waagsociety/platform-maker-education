<?php
  $date_string = $page->date('d-m-Y');
  if(!$page->customdate()->empty()) {
    $date_string = $page->customdate()->html();
  }
?>

<?php snippet('header') ?>
  <main class="main agenda-item">
    <?php snippet('hero', array("fit" => $page->imagefit()->int())) ?>
    <section class="content" style="">
      <h1 style="font-weight:500;"><?php echo $page->title()->html() ?></h1>
      <div class="info" style="display:flex;flex-direction:column;margin-bottom:1.5em;">
        <div class="location" style="display:table;"><?php echo $page->location() ?></div>
        <div class="date" style="display:table;margin-top:1.5em;border:5px transparent;font-weight:700;"><?php echo $date_string ?></div>
      </div>
      <?php echo $page->intro()->kirbytext() ?>
      <?php echo $page->text()->kirbytext() ?>
    </section>
  </main>
<?php snippet('footer') ?>
