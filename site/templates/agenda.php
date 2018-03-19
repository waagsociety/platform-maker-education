<?php
  $items = $pages->find('agenda')->children()->visible()->sortBy('date', 'desc');;
?>

<?php snippet('header') ?>

  <main class="main agenda">
    <!-- form errors -->
    <?php snippet('formerrors') ?>

    <!-- intro -->
    <section class="left one-col">
      <div class="" style="padding:20px 20px;">
        <div style="display:flex;">
          <div class="" style="align-items:center;width:20%;min-width:20%;">
            <img class="" src="<?php echo url("assets/images/calendar.svg"); ?>" style="width:100%" />
          </div>
          <div class="" style="flex-grow:1;width:100%;display:flex;flex-direction:column;margin-left:15px;padding:15px;">
            <h1 style="font-weight:700;"><?php echo $page->title(); ?></h1>
          </div>
        </div>
        <p style="font-weight:500;color:#f8a531;font-size:1.25em;margin-top:20px;"><?php echo $page->intro(); ?></p>
      <div>
    </section>

    <!--- news items -->
    <?php foreach($items as $section): ?>
      <?php snippet('agenda-item', array('section' => $section)) ?>
    <?php endforeach ?>

    <!-- form -->
    <?php //snippet('agendaform') ?>
  </main>

<?php snippet('footer') ?>
