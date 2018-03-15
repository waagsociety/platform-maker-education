<?php
  $blogs = $pages->find('nieuws')->children()->visible()->sortBy('created', 'desc')->paginate(2);
?>

<section class="two-col" style="">
  <div class="box" style="padding:15px;">
    <h3>LEES <em>de laatste</em> blogs</h3>
    <ul>
      <?php foreach($blogs as $blog): ?>
      <li><a href=<?php echo url('nieuws') ?> style="color:black;font-size:1em;"><?php echo $blog->title()?></a></li>
      <?php endforeach ?>
      <li><a href=<?php echo url('nieuws') ?> style="font-weight:500;font-size:1em;">meer</a></li>
    </ul>
  </div>

</section>
