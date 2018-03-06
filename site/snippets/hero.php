<!-- header is half width on home page, other pages full -->
<header id="projectHeader" class="header cf <?php if($page->isHomePage()): ?>half-width left scene_element scene_element--fadein<?php else: ?> scene_element scene_element--fadein scene_element--shrink <?php endif ?>" style="background-image: url(<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>);">
<section class="headerSign">
  <h1><?php echo $page->title()->html() ?></h1>
  <h2><?php echo $page->subtitle()->html() ?></h2>
</section>
</header>
