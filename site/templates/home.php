<?php snippet('header') ?>

  <main class="main" role="main">
  	<?php foreach($pages->visible() as $section): ?>
    <section class="<?php echo html($section->layout()) ?> <?php echo html($section->elementheight()) ?> left">
      <a href="<?php echo $section->url() ?>">
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
      </a>
      <a href="<?php echo $section->url() ?>">
        <p><?php echo html($section->intro()) ?></p>
      </a>
    </section>
   <?php endforeach ?>
  </main>

<?php snippet('footer') ?>