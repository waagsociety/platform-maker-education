<section class="news-item one-col">
  <div class="box" style="display:flex;width:100%;">
    <div class="short-info" style="width:66%;">
      <h3><?php echo $section->title() ?></h3>
      <p>
        <?php echo $section->intro() ?>
        <br><br>
        <a href="<?php echo $section->url() ?>" target="_self">
          <span style="white-space:no-wrap;display:inline-block;color:#f8a531;font-weight:500;">(Lees verder...)</span>
        </a>
      </p>
    </div>
    <div class="image cover" style="background-image:url(<?php echo $section->heroimage()->thumbURL(); ?>);">
    </div>
  </div>
</section>
