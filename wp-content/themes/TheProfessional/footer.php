	</div> <!-- end #container -->
<div id="regform_dahero">
<? echo do_shortcode('[contact-form-7 id="85" title="Regisztráció"]'); ?>
</div>
	<div id="container_footer">
		<div id="footer" class="clearfix">
			<div id="footer_logo"><img src="<?php echo get_template_directory_uri();?>/images/logo_grey.png" alt="SmilePoint" /></div>
			<div class="footer_links" id="foo2">
				<a href="http://www.smilepartner.hu">SMILE PARTNER ZRT.</a><br />
				<a href="/legal">JOGI NYILATKOZAT</a><br />
				<a href="/kapcsolat">KAPCSOLAT</a><br />
				<a href="http://www.smilepartner.hu">FRANCHISE PARTNER PROGRAM</a><br />
				<a href="/fogfeherites#kerdvalasz">KÉRDÉSEK ÉS VÁLASZOK</a><br />
				<br />
				<a href="http://facebook.com/smilepointhungary">FACEBOOK</a><br />
				<a href="/jatekszabaly">NYEREMÉNYJÁTÉK SZABÁLYZAT</a><br />
			</div>
			<div class="footer_links" id="foo3">
				<a href="/fogfeherites/#csomagg1">SMILEPOINT WHITE FORMULA</a><br />
				<a href="/fogfeherites/#csomagg2">SMILEPOINT SUPERWHITE FORMULA</a><br />
				<a href="/fogfeherites/#fajdalommentes">FÁJDALOMMENTES FOGFEHÉRÍTÉS</a><br />
				<a href="/fogfeherites/#rendeloi">PEROXIDMENTES FOGFEHÉRÍTÉS</a><br />
				<a href="/fogfeherites/#rendeloi">RENDELŐI FOGFEHÉRÍTÉS</a><br />
				<br />
				<a href="/szalonjaink">SZALONJAINK</a><br />
			</div>
		</div> <!-- end #footer -->

	</div> <!-- end #container -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48685799-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</body>
</html>