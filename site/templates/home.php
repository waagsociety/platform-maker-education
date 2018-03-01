<?php snippet('header') ?>

  <main class="main">
    <!--
    <a href="#" class="four-col half-height left">
      <section style="background:#aaa;width:100%;height:100%;">
        doe iets van find page met index 1
      </section>
    </a>
    <a href="#" class="four-col half-height left">
      <section style="background:#bbb;width:100%;height:100%;">
        2
      </section>
    </a>
    <a href="#" class="four-col half-height left">
      <section style="background:#ccc;width:100%;height:100%;">
        plaatje van kaart
      </section>
    </a>
    <a href="#" class="four-col half-height left">
      <section style="background:#ddd;width:100%;height:100%;">
        4
      </section>
    </a>
    -->

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
