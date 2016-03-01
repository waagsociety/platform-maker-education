<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="apple-mobile-web-app-title" content="pme">
  <meta name="application-name" content="pme">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/main.min.js') ?>

</head>
<body class="m-scene">
  <div id="main">
  <?php snippet('menu') ?>
  <?php if($page->heroimage()->isNotEmpty()): ?>

  <header id="projectHeader" class="header cf <?php if($page->isHomePage()): ?>half-width left scene_element scene_element--fadein<?php else: ?> scene_element scene_element--fadein scene_element--shrink <?php endif ?>" style="background-image: url(<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>);">
    <section class="headerSign">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo $page->subtitle()->html() ?></h2>
    </section>

    <?php if($page->videolink()->isNotEmpty()): ?>
      <div class="covervid-wrapper">
        <video class="covervid-video" poster="<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>"  autoplay loop muted preload>
            <source src="<?php echo $page->videolink()->text() ?>">
        </video>
      </div>
    <?php endif ?>

    <div id="plane"></div>
    <div id="bristelbot" class="scene_element scene_element--fadein">
      <svg x="0px" y="0px" viewBox="0 0 346 252" style="enable-background:new 0 0 346 252;">
        <g id="brushes">
          <line class="st0" x1="84.5" y1="164.7" x2="69.4" y2="250"/>
          <line class="st0" x1="98.9" y1="164.7" x2="83.8" y2="250"/>
          <line class="st0" x1="113.3" y1="164.7" x2="98.2" y2="250"/>
          <line class="st0" x1="127.7" y1="164.7" x2="112.6" y2="250"/>
          <line class="st0" x1="142.1" y1="164.7" x2="127" y2="250"/>
          <line class="st0" x1="156.5" y1="164.7" x2="141.4" y2="250"/>
          <line class="st0" x1="170.9" y1="164.7" x2="155.8" y2="250"/>
          <line class="st0" x1="185.3" y1="164.7" x2="170.2" y2="250"/>
          <line class="st0" x1="199.7" y1="164.7" x2="184.6" y2="250"/>
          <line class="st0" x1="214" y1="164.7" x2="199" y2="250"/>
          <line class="st0" x1="228.4" y1="164.7" x2="213.3" y2="250"/>
          <line class="st0" x1="242.8" y1="164.7" x2="227.7" y2="250"/>
          <line class="st0" x1="257.2" y1="164.7" x2="242.1" y2="250"/>
          <line class="st0" x1="271.6" y1="164.7" x2="256.5" y2="250"/>
        </g>
        <g id="body">
          <g>
            <path class="st0" d="M159.8,130.9H93.4c-1.1,0-2-0.9-2-2V98.8c0-1.1,0.9-2,2-2h66.4c1.1,0,2,0.9,2,2v30.2
              C161.8,130,160.9,130.9,159.8,130.9z"/>
            <path class="st0" d="M308.7,130.9H172.7c-1.1,0-2-0.9-2-2v-19.2c0-1.1,0.9-2,2-2h136.1c1.1,0,2,0.9,2,2v19.2
              C310.7,130,309.8,130.9,308.7,130.9z"/>
            <path class="st0" d="M272.3,165.1H70.4c-2.2,0-4-1.8-4-4v-26.2c0-2.2,1.8-4,4-4h201.9c2.2,0,4,1.8,4,4v26.2
              C276.3,163.3,274.5,165.1,272.3,165.1z"/>
            <path class="st0" d="M270.9,130.9H340c2.2,0,4,1.8,4,4v39.7l-73.1-9.6"/>
            <line class="st0" x1="82.5" y1="130.5" x2="38.2" y2="48.5"/>
            <ellipse class="st0" cx="26.5" cy="26.6" rx="24.5" ry="24.6"/>
            <ellipse class="st0" cx="26.5" cy="26.6" rx="10.6" ry="10.6"/>
          </g>
        </g>
      </svg>
    </div>
  </header>


<?php endif ?>
