<?php snippet('header') ?>

  <main class="main defaultPage change-color">
    <section class="sectionHeader">
		<header>
			<h1><?php echo $page->title()->html() ?></h1>
			<p><?php echo $page->intro()->kirbytext() ?></p>
		</header>
	</section>

   <?php snippet('projects') ?>
  </main>
<?php snippet('footer') ?>
