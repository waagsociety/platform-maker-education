<section class="nieuws-item left one-col">
  <div class="box" style="display:flex;padding:15px;">
    <div class="info-left" style="">
      <div style="border:5px solid red;white-space: nowrap;padding:15px;">
        <?php echo $section->date('d-m-Y') ?>
      </div>
      <div style="background:blue;border:5px solid blue;margin-top:15px;color:white;text-align:center;white-space: nowrap;">
        Eindhoven de Gekste
      </div>
    </div>
    <div class="info-right" style="flex-grow:1;display:flex;border:5px solid red;">
      <div style="flex-grow:1;">
        <h2><?php echo $section->title() ?></h2>
        bdasl dabda ladslbadslbdsa adslbadsbladslb<br><br>nbla
        <br><br>nbla
      </div>
      <div class="image" style="background-position:center;background-repeat:no-repeat;background-size:contain;background-image:url(<?php echo $section->heroimage()->blaa(); ?>);">
      </div>
    </div>
  </div>

  <!--
  <span class="border" style="display:block;background:#eee;">
    <h1 class="beta">
      <?php echo $section->title() ?>
    </h1>
    <p style="font-weight:bold;font-style:italic">
      <?php echo $section->title()  ?>
    </p>
    <p class=""><?php echo html($section->intro()) ?></p>
    <a href="<?php echo $section->url() ?>" class="btn btn-3">Meer informatie</a>
  </span>
  -->
</section>
