

<?php snippet('header') ?>

  <main class="main home">

    <!-- home section blocks  -->
    <div style="" class="blocks-a">
      <?php foreach($page->children()->find("about-block", "fablearn-block", "makerfaire-block", "agenda-block")->visible() as $section): ?>
        <?php snippet('section', array('section' => $section, 'width' => 'two-col')) ?>
      <?php endforeach ?>
    </div>

    <!-- home section blocks -->
    <div style="" class="blocks-b">
      <?php foreach($page->children()->find("voucher-block", "challenge-block")->visible() as $section): ?>
        <?php snippet('section', array('section' => $section, 'width' => 'two-col')) ?>
      <?php endforeach ?>
      <?php snippet('chimp') ?>
    </div>

    <!-- blogs  -->
    <?php snippet('blogs') ?>

    <!-- question box -->
    <section class="two-col sjaak left" style="display:flex;flex-flow:row-reverse;">
      <div style="border:none;text-align:center;overflow:visible;">
        <div class="ask-sjaak" style="background:#f6a500;color:white;text-align:center;padding:40px;display:inline-block;">
          <h3>Vragen?</h3>
          <p style="padding:0;margin-bottom:2em;margin-top:1em;">Stel ze aan Sjaak<br> de Maakmakaak!</p>
          <a href="<?php echo url('contact') ?>" target="_top">
            <span style="border:5px solid white;padding:0.5em;line-height:1em;font-size:1em;color:white;margin:0px auto;">
              ik heb een vraag
            </span>
          </a>
        </div>
      </div>
    </section>

    <?php snippet('sjaak') ?>
    <?php snippet('map') ?>

    <!-- juicer -->
    <section>
    <div style="width:100%;padding:0px 0px;margin-top:20px;">
      <span class="tab" style="background:#f6a500;color:white;font-size:1em;padding:.75em;display:table;white-space: nowrap;">Social media</span>
    </div>
    <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
    <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed" style="width:100%;" data-feed-id="watmaakjij" data-pages="1" data-per="5" data-columns="5"></ul>
    </section>
</main>

<?php snippet('logobar') ?>
<?php snippet('footer') ?>
