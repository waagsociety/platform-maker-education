

<?php snippet('header') ?>

  <main class="main home">

    <!-- section blocks to "main menu" to pages -->
    <?php foreach($page->children()->visible() as $section): ?>
      <?php snippet('section', array('section' => $section)) ?>
    <?php endforeach ?>

    <!-- blogs and mailchimp -->
    <div class="middle-bar left one-col" style="">
      <?php snippet('blogs') ?>
      <?php snippet('chimp') ?>
    </div>

    <!-- map -->
    <?php snippet('sjaak') ?>
    <?php snippet('map') ?>

    <!-- juicer -->
    <div style="width:100%;padding:0px 20px;margin-top:20px;">
      <span class="tab" style="background:#f8a531;color:white;font-size:1em;;line-height:1.25em;padding:.25em;">Social media</span>
    </div>
    <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
    <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed" style="width:100%;" data-feed-id="watmaakjij" data-pages="1" data-per="5" data-columns="5"></ul>

  </main>

<?php snippet('logobar') ?>
<?php snippet('footer') ?>
