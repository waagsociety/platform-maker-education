<?php snippet('header') ?>

  <main class="main">
    <!-- section blocks to "main menu" to pages -->
    <?php foreach($page->children()->visible() as $section): ?>
      <?php snippet('section', array('section' => $section)) ?>
    <?php endforeach ?>
    <?php snippet('projects') ?>

    <?php snippet('chimp') ?>

    <!-- embed juicer -->
    <!-- <section class="two-col left" style="background:#a1a;height:100%;">
      <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
      <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
      <ul class="juicer-feed" data-feed-id="watmaakjij" data-pages="1"></ul>
    </section> -->
  </main>
  
<?php snippet('footer') ?>
