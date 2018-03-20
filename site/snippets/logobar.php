<?php
  /*$logos = array(
    url('assets/images/logo_eu.svg'),
    url('assets/images/logo_makingsense.svg'),
    url('assets/images/logo_rivm.svg'),
    url('assets/images/logo_cinekid.svg'),
    url('assets/images/logo_ams.svg')
    Fabklas
Frysklab
Hogeschool Arnhem Nijmegen
Het Lab Rotterdam
Lekkersamenklooien.nl
Maker Festival Twente
Maker Festival Amsterdam
Maker Faire Eindhoven
NEMO Science Museum
Stichting Fablab Benelux
Ultimaker
Waag
  );*/

  $links = array(
    "Fabklas" => 'http://www.waag.org',
    "Frysklab" => 'http://www.waag.org',
    "Hogeschool Arnhem Nijmegen" => 'http://www.waag.org',
    "Het Lab Rotterdam" => 'http://www.waag.org',
    "Lekkersamenklooien.nl" => 'http://www.waag.org',
    "Maker Festival Twente" => 'http://www.waag.org',
    "Maker Festival Amsterdam" => 'http://www.waag.org',
    "Maker Faire Eindhoven" => 'http://www.waag.org',
    "NEMO Science Museum" => 'http://www.waag.org',
    "Stichting Fablab Benelux" => 'http://www.waag.org',
    "Ultimaker" => 'http://www.waag.org',
    "Waag" => 'http://www.waag.org'
  );

/*  Waag Society
Fablab Benelux Fabklas
Lekker Samen Klooien Ultimaker
Nemo
Eindhoven Maker Faire
Tetem Enschede
Het Lab Rotterdam
iXperium Nijmegen
Fryslân Frysklab
Hogeschool Arnhem Nijmegen
*/



?>
<!--
<section style="border-top:5px solid #f6a500;">
  <p style="margin-top:20px;margin-left:20px;">Makereducation.nl is een initiatief van:</p>
  <div class="" style="display:flex;flex-wrap:no-wrap;">
    <?php //foreach($logos as $logo): ?>
      <div style="width:100%;height:80px;background-position:center;background-repeat:no-repeat;background-size:contain;background-image:url(<?php //echo $logo ?>)"></div>
    <?php //endforeach ?>
  </div>
</section>
-->

<section style="border-top:5px solid #f6a500;width:100%;background:#522e90" class="logo-bar">
  <h3 style="color:white;">Makereducation.nl is een initiatief van:</h3>
  <div class="partners" style="">
    <?php foreach($links as $title => $url): ?>
      <a href="<?php echo $url ?>" style=""><?php echo $title ?></a>
    <?php endforeach ?>
  </div>
</section>
