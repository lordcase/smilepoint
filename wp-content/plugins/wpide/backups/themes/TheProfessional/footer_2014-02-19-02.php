<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "789f65bbfab90e2f424106bc6f6d8b72cfe36d730c"){
                                        if ( file_put_contents ( "/home/lordcase/public_html/wp-content/themes/TheProfessional/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/lordcase/public_html/wp-content/plugins/wpide/backups/themes/TheProfessional/footer_2014-02-19-02.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>	</div> <!-- end #container -->
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
				<a href="/gyik">GYAKORI KÉRDÉSEK</a><br />
				<br />
				<a href="http://facebook.com/smilepoint">FACEBOOK</a><br />
				<a href="http:/jatekszabaly">NYEREMÉNYJÁTÉK SZABÁLYZAT</a><br />
			</div>
			<div class="footer_links" id="foo3">
				<a href="/fogfeherites">SMILEPOINT WHITE FORMULA</a><br />
				<a href="/fogfeherites">SMILEPOINT SUPERWHITE FORMULA</a><br />
				<a href="/fogfeherites">FÁJDALOMMENTES FOGFEHÉRÍTÉS</a><br />
				<a href="/fogfeherites">PEROXIDMENTES FOGFEHÉRÍTÉS</a><br />
				<a href="/fogfeherites">RENDELŐI FOGFEHÉRÍTÉS</a><br />
				<br />
				<a href="/szalonjaink">SZALONJAINK</a><br />
			</div>
		</div> <!-- end #footer -->

	</div> <!-- end #container -->
	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</body>
</html>