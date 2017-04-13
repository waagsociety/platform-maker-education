<?php snippet('header') ?>

  <main class="main">
  	<?php foreach($pages->visible() as $section): ?>
    <a href="<?php echo $section->url() ?>" class="scene_element scene_element--fadein item  <?php echo html($section->layout()) ?>  <?php foreach($section->border()->split() as $b): ?><?php echo html($b) ?> <?php endforeach ?> <?php echo html($section->elementheight()) ?> left">
      <section>
        <div class="icon" style="background-image: url(<?php echo url(); ?>/content/<?php echo $section->diruri() ?>/<?php echo html($section->icon()) ?>);"></div>
        <div class="thumb_description">
          <h1 class="beta"><?php echo html($section->title()) ?></h1>
          <p><?php echo html($section->intro()) ?></p>
        </div>
      </section>
    </a>
   <?php endforeach ?>
   <?php snippet('kaart') ?>

   <?php snippet('projects') ?>
  </main>
<?php snippet('footer') ?>
