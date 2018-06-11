<?php
  $logos = array(
    url('assets/images/logo_ocw.png') =>  'https://www.conrad.nl',
    url('assets/images/logo_conrad.png') => 'https://www.rijksoverheid.nl/ministeries/ministerie-van-onderwijs-cultuur-en-wetenschap'
  );

  $links = array(
    "Fabklas" => 'http://www.fabklas.nl',
    "Frysklab" => 'http://www.frysklab.nl',
    "Hogeschool Arnhem Nijmegen" => 'http://www.han.nl',
    "Het Lab Rotterdam" => 'http://www.hetlabrotterdam.nl',
    "Lekkersamenklooien.nl" => 'http://www.lekkersamenklooien.nl',
    "Maker Festival Twente" => 'http://www.makerfestivaltwente.nl',
    "Maker Festival Amsterdam" => 'http://www.amsterdammakerfestival.nl',
    "Maker Faire Eindhoven" => 'http://www.eindhovenmakerfaire.nl',
    "NEMO Science Museum" => 'https://www.nemosciencemuseum.nl',
    "Stichting Fablab Benelux" => 'https://www.fablab.nl',
    "Ultimaker" => 'https://www.ultimaker.com',
    "Waag" => 'https://www.waag.org',
    "Hogeschool Rotterdam, Kenniscentrum Creating 010" => 'https://www.hr.nl/creating010 '
  );

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
  <h3 style="color:white;margin-top:10px;margin-bottom:30px;">Makereducation.nl is een initiatief van:</h3>
  <div class="partners" style="">
    <?php foreach($links as $title => $url): ?>
      <a href="<?php echo $url ?>" style=""><?php echo $title ?></a>
    <?php endforeach ?>
  </div>
</section>

<section style="border-top:5px solid #f6a500;width:100%;" class="logo-bar">
  <h3 style="color:black;margin-top:10px;margin-bottom:30px;">Makereducation.nl wordt mede mogelijk gemaakt door:</h3>
  <div class="" style="display:flex;flex-wrap:no-wrap;">
    <?php foreach($logos as $logo => $url): ?>
      <div style="width:100%;height:80px;background-position:center;background-repeat:no-repeat;background-size:contain;background-image:url(<?php echo $logo ?>)"></div>
    <?php endforeach ?>
  </div>
</section>
