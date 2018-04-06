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

(link: http://www.fabklas.nl text: Fabklas)
(link: http://www.frysklab.nl text: Frysklab)
(link: http://www.han.nl text: Hogeschool Arnhem Nijmegen)
(link: http://www.han.nl text: Hogeschool Arnhem Nijmegen)
(link: http://www.hetlabrotterdam.nl text: Het Lab Rotterdam)
(link: http://www.Lekkersamenklooien.nl text: Lekkersamenklooien.nl)
(link: http://www.makerfestivaltwente.nl text: Maker Festival Twente)
(link: http://www.amsterdammakerfestival.nl text: Maker Festival Amsterdam )
(link: http://www.eindhovenmakerfaire.nl text: Maker Faire Eindhoven)
(link: https://www.nemosciencemuseum.nl text: NEMO Science Museum)
(link: https://www.fablab.nl text: Stichting Fablab Benelux)
(link: https://www.ultimaker.com text: Ultimaker)
(link: http://www.waag.org text: Waag)

  );*/

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
