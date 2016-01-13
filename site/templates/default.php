<?php snippet('header') ?>

  <main class="main defaultPage" role="main">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>
<?php if($page->voucherform() == '1'): ?>
	<?php snippet('voucher') ?>
<?php endif ?>
<?php snippet('footer') ?>