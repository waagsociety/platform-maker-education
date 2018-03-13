<!-- header is half width on home page, other pages full -->
<section class="">
  <?php if(!$page->heroimage()->empty()): ?>
  <div class="hero <?php echo ($fit == 1 ? "fit" : "cover")?>" style="background-image:url(<?php echo $page->heroimage()->fullURL(); ?>);">
  </div>
  <?php endif ?>
</section>
