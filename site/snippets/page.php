<?php snippet('hero', array("fit" => $page->imagefit()->int())) ?>
<section class="content" style="">
  <h1 style="font-weight:500;"><?php echo $page->title()->html() ?></h1>
  <div class="info" style="display:flex;margin-bottom:1.5em;">
    <?php if(!$page->author()->empty()): ?>
    <div class="author" style="display:table;opacity:0.6;">Door <?php echo $page->author()?></div>
    <?php endif ?>
    <?php if(!$page->created()->empty()): ?>
    <div class="date" style="display:table;border:none;opacity:0.6;"><?php echo $page->created('d-m-Y') ?></div>
    <?php endif ?>
  </div>
  <?php echo $page->intro()->kirbytext() ?>
  <?php echo $page->text()->kirbytext() ?>
</section>
