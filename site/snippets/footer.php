  <?php

$items = $pages->visible();
$last  = $items->last();

?>
  <!-- <section class="sitemap cf left" role="contentinfo">
  	<ul class="four-col left">
  		<li><h2>Links</h2></li>
  		<li>About</li>
  		<li>About</li>
  		<li>Document</li>
  		<li>FAQ</li>
  		<li>Learning</li>
  		<li>Contact</li>
  	</ul>
  	<ul class="four-col left">
  		<li><h2>Links</h2></li>
  		<li>About</li>
  		<li>About</li>
  		<li>Document</li>
  		<li>FAQ</li>
  		<li>Learning</li>
  		<li>Contact</li>
  	</ul>
  </section> -->
	<footer>
    <p class="left">Contact e-mail: contact@makereducation.nl</p>
    <p class="right">
      Made with &hearts; by <a href="http://www.waag.org">Waag Society</a> - Check out the code on <a href="https://github.com/waagsociety/platform-maker-education">github</a>
    </p>
	</footer>
</div>
<?php echo js('assets/js/output.min.js') ?>
<!-- Piwik -->
<script type="text/javascript">
 var _paq = _paq || [];
 _paq.push(['trackPageView']);
 _paq.push(['enableLinkTracking']);
 (function() {
   var u="//stats.waag.org/";
   _paq.push(['setTrackerUrl', u+'piwik.php']);
   _paq.push(['setSiteId', 7]);
   var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
   g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
 })();
</script>
<noscript><p><img src="//stats.waag.org/piwik.php?idsite=7" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
