<?php snippet('header') ?>

  <main class="main home">
    <!-- section blocks to "main menu" to pages -->
    <?php foreach($page->children()->visible() as $section): ?>
      <?php snippet('section', array('section' => $section)) ?>
    <?php endforeach ?>
    <?php snippet('projects') ?>

    <div class="one-col middle-bar" style="">
    <?php snippet('blogs') ?>
    <?php snippet('chimp') ?>
    </div>

    <?php snippet('agenda-map') ?>

    <div style="width:100%;padding:0px 20px;">
      <span class="tab" style="background:#f8a531;height:20px;color:white;">Social media</span>
    </div>
    <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
    <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed" style="width:100%;" data-feed-id="watmaakjij" data-pages="1" data-per="5" data-columns="5"></ul>
  </main>

<?php snippet('footer') ?>
