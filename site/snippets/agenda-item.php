<?php
  $link = $section->url();
  $target = "_self";
  if(!$section->link()->empty()) {
    $link = $section->link();
    $target = "_blank";
  }
  $date_string = $section->date('d-m-Y');
  if(!$section->customdate()->empty()) {
    $date_string = $section->customdate()->html();
  }
?>

<section class="agenda-item left one-col">
  <div class="box" style="display:flex;padding:15px;">
    <div class="info-left" style="align-items:center;">
      <div class="location" style="margin-top:5px;margin-bottom:10px;color:white;text-align:center;">
        <?php echo $section->location() ?>
      </div>
      <div class="date" style="padding:10px;margin-bottom:10px;">
        <?php echo $date_string; ?>
      </div>
    </div>
    <a href="<?php echo $link ?>" target="<?php echo $target ?>" style="color:black;">
      <div class="info-right" style="flex-grow:1;width:100%;display:flex;">
        <div class="short-info">
          <h3><?php echo $section->title() ?></h3>
          <p>
            <?php echo $section->intro() ?>
            <br><br>
            <span style="white-space:no-wrap;display:inline-block;color:#f6a500;;font-weight:500;">(Lees verder...)</span>
          </p>
        </div>
        <div class="image <?php echo ($section->imagefit()->int() == 1 ? "fit" : "cover")?>" style="background-image:url(<?php echo $section->heroimage()->thumbURL(); ?>);">
        </div>
      </div>
    </a>
  </div>
</section>
