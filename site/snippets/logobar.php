<?php
  $logos = array(
    url('assets/images/logo_eu.svg'),
    url('assets/images/logo_makingsense.svg'),
    url('assets/images/logo_rivm.svg'),
    url('assets/images/logo_cinekid.svg'),
    url('assets/images/logo_ams.svg')
  );
?>

<section style="border-top:5px solid #f6a500;">
  <p style="margin-top:20px;margin-left:20px;">Makereducation.nl is een initiatief van:</p>
  <div class="" style="display:flex;flex-wrap:no-wrap;">
    <?php foreach($logos as $logo): ?>
      <div style="width:100%;height:80px;background-position:center;background-repeat:no-repeat;background-size:contain;background-image:url(<?php echo $logo ?>)"></div>
    <?php endforeach ?>
  </div>
</section>

<!--
<section style="border-top:5px solid #f6a500;">
  <p style="margin-top:20px;margin-left:20px;">Makereducation.nl is een initiatief van:</p>
  <ul class="logo__party">
    <li class="item"><a href="https://ec.europa.eu/programmes/horizon2020/"><img src="<?php echo url('assets/images/logo_eu.svg') ?>" /></a></li>
    <li class="item"><a href="http://making-sense.eu/"><img src="<?php echo url('assets/images/logo_makingsense.svg') ?>" /></a></li>
    <li class="item"><a href="https://waag.org"><img src="<?php echo url('assets/images/logo_waag.svg') ?>" /></a></li>
    <li class="item"><a href="https://www.cinekid.nl/"><img src="<?php echo url('assets/images/logo_cinekid.svg') ?>" /></a></li>
    <li class="item"><a href="http://stichtingsec.nl/"><img src="<?php echo url('assets/images/logo_sec.svg') ?>" /></a></li>
    <li class="item"><a href="http://www.rivm.nl/"><img src="<?php echo url('assets/images/logo_rivm.svg') ?>" /></a></li>
    <li class="item"><a href="http://www.amsterdam.nl/"><img src="<?php echo url('assets/images/logo_ams.svg') ?>" /></a></li>
    <li class="item"><a href="http://www.thethingsnetwork.org/"><img src="<?php echo url('assets/images/logo_ttn.svg') ?>" /></a></li>
  </ul>
</section>
-->
