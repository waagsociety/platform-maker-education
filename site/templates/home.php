<?php snippet('header') ?>

  <main class="main" role="main">

    <?php snippet('kaart') ?>
  	<?php foreach($pages->visible() as $section): ?>
    <a href="<?php echo $section->url() ?>" class="item <?php echo html($section->layout()) ?>  <?php foreach($section->border()->split() as $b): ?><?php echo html($b) ?> <?php endforeach ?> <?php echo html($section->elementheight()) ?> left" style="background-image: url(<?php echo url(); ?>/content/<?php echo $section->diruri() ?>/<?php echo html($section->icon()) ?>);">
      <section>
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
        <p><?php echo html($section->intro()) ?></p>
      </section>
    </a>
   <?php endforeach ?>
   <section class="sectionHeader">
    <header>
      <h1>Lesmateriaal</h1>
      <p>Een selectie van het lesmateriaal van de afgelopen maand</p>
      </header>
    </section>
   <?php snippet('projects') ?>
  </main>

<?php snippet('footer') ?>
