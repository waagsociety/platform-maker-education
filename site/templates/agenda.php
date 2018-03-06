<?php
  $items = $pages->find('agenda')->children()->visible()->sortBy('date', 'asc');;
?>

<?php snippet('header') ?>

  <main class="main agenda">

    <!--- news items -->
    <?php foreach($items as $section): ?>
      <?php snippet('agenda-item', array('section' => $section)) ?>
    <?php endforeach ?>

    <!-- form -->
    <section class="contact black-content">
    	<div class="inner">
    	<h1>Meld jouw Maker Education activiteit aan voor de agenda</h1>
      	<form method="post">
      		<?php if($alert): ?>
      			<div class="alert">
      			<ul>
      			  <?php foreach($alert as $message): ?>
      			  <li><?php echo html($message) ?></li>
      			  <?php endforeach ?>
      			</ul>
      			</div>
      		<?php endif ?>

      		<div class="input_block left">
      			<input type="text" id="name" name="name" placeholder="Activiteit" required>
      		</div>
      		<div class="input_block left">
      			<input type="text" id="datum" name="datum" placeholder="Datum">
      		</div>
      		<div class="input_block left">
      			<input type="text" id="adres" name="adres" placeholder="Adres">
      		</div>
          <div class="input_block left">
            <input type="text" id="email" name="email" placeholder="E-mailadres">
          </div>
      		<div class="input_block left">
      			<input type="text" id="website" name="website" placeholder="Website">
      		</div>
      		<div class="input_block left">
      			<textarea type="text" id="bericht" name="bericht" rows="5" placeholder="Omschrijf jouw activiteit(en) maximaal 280 karakters"></textarea>
      		</div>

      		<button class="btn-2" type="submit" name="submit" value="Submit">Zet je activiteit in de agenda</button>
      	</form>
    	</div>
    </section>

  </main>

<?php snippet('footer') ?>
