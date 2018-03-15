<section class="news-item one-col">
  <a href="<?php echo $section->url() ?>" target="_self" style="color:black;">
    <div class="box" style="display:flex;width:100%;">
      <div class="short-info" style="">
        <h3><?php echo $section->title() ?></h3>
        <p>
          <?php echo $section->intro() ?>
          <br><br>
          <span style="white-space:no-wrap;display:inline-block;color:#f6a500;font-weight:500;">(Lees verder...)</span>
        </p>
      </div>
      <div class="image <?php echo ($section->imagefit()->int() == 1 ? "fit" : "cover")?>" style="background-image:url(<?php echo $section->heroimage()->thumbURL(); ?>);">
      </div>
    </div>
  </a>
</section>
