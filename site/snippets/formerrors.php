<?php if(isset($alert) && $alert): ?>
  <section class="form-errors">
    <div class="alert">
      <h1>&#9888; Oeps</h1>
      <ul>
      <?php foreach($alert as $message): ?>
      <li><?php echo html($message) ?></li>
      <?php endforeach ?>
      </ul>
    </div>
  </section>
<?php endif ?>
