<?php
  $items = $pages->find('challenge')->children()->visible();
?>

<?php snippet('header') ?>
  <?php snippet('hero', array("fit" => $page->imagefit()->int())) ?>
  <main class="main news">
    <!-- intro -->
    <section class="left one-col">
      <div class="" style="padding:20px 0px;">
        <h1 style="font-weight:700;"><?php echo $page->title(); ?></h1>
        <p style="font-weight:500;color:#f8a531;font-size:1.25em;margin-top:40px;"><?php echo $page->intro(); ?></p>
      </div>
      <!-- temp disabled till icon delivered
      <div class="" style="padding:10px 20px;">
        <div style="display:flex;">
          <div class="" style="align-items:center;width:20%;min-width:20%;">
            <img class="" src="<?php echo url("assets/images/question.svg"); ?>" style="width:100%" />
          </div>
          <div class="" style="flex-grow:1;width:100%;display:flex;flex-direction:column;margin-left:15px;padding:15px;">
            <h1 style="font-weight:700;"><?php echo $page->title(); ?></h1>
          </div>
        </div>
        <p style="font-weight:500;color:#f8a531;font-size:1.25em;margin-top:20px;"><?php echo $page->intro(); ?></p>
      <div>
      -->
    </section>
    <!--- news items -->
    <?php foreach($items as $section): ?>
      <?php snippet('news-item', array('section' => $section)) ?>
    <?php endforeach ?>
  </main>
<?php snippet('footer') ?>
