<?php snippet('homepage_menu') ?>
<nav class="slide-menu closed">
  <ul>
    <?php foreach($pages->visible() as $p): ?>
      <?php if($p->menu()->int() == 1): ?>
        <li>
          <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
