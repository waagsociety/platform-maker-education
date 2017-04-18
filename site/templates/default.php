<?php snippet('header') ?>

  <main class="main defaultPage change-color stamp-item">
    <div class="text">	  	
      <?php if($page->maakweekstamp() == "1" && $page->parent()->uid() == "agenda"): ?>
	  <h2 class="maakweek-stamp">ABC-MAAKWEEK</h2>
	  <?php endif ?>
	  <h1 class="">
		<?php echo $page->title()->html() ?>
	  </h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>
<?php snippet('footer') ?>
