<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "789f65bbfab90e2f424106bc6f6d8b7259a60fedec"){
                                        if ( file_put_contents ( "/home/lordcase/public_html/wp-content/themes/TheProfessional/includes/scripts.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/lordcase/public_html/wp-content/plugins/wpide/backups/themes/TheProfessional/includes/scripts_2014-02-18-01.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php global $shortname; ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.lavalamp.1.3.3-min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		jQuery.noConflict();

		jQuery('ul.nav').superfish({
			delay:       300,                            // one second delay on mouseout
			animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
			speed:       'fast',                          // faster animation speed
			autoArrows:  true,                           // disable generation of arrow mark-up
			dropShadows: false                            // disable drop shadows
		});

		jQuery('ul.nav > li > a.sf-with-ul').parent('li').addClass('sf-ul');


		<!---- lavalamp ---->
		jQuery('ul.nav ul > li').addClass('noLava');

		var startLink = 0;

		jQuery('ul.nav > li.current-cat-parent, ul.nav > li.current-cat, ul.nav > li.current-page-ancestor, ul.nav > li.current_page_parent, ul.nav > li.current_page_item').each(function(){
			startLink = jQuery(this).prevAll().length;
		});

		jQuery('ul.nav').lavaLamp({ startItem: startLink });
		if ( startLink !=0 ) jQuery('ul.nav > li.backLava').animate({left:'+=2'},0);


		et_search_bar();

		jQuery(window).load(  et_cycle_integration );


		jQuery('#controllers-main a').hover(function(){
			jQuery(this).find('span.tooltip').animate({ opacity: 'show', left: '-222px' }, 300);
		},function(){
			jQuery(this).find('span.tooltip').animate({ opacity: 'hide', left: '-232px' }, 300);
		});


		function et_cycle_integration(){
			var $featured = jQuery('#featured'),
				$featured_content = jQuery('#slides'),
				$controller = jQuery('#controllers'),
				$slider_control_tab = $controller.find('a');

			if ($featured_content.length) {
				$controller.css({ opacity : 0, 'display' : 'block' }).find('a img').css("opacity","0.7").end().find('a.active img').css("opacity","1");

				$featured_content.css( 'backgroundImage', 'none' ).cycle({
					fx: '<?php echo esc_js(get_option($shortname.'_slider_effect')); ?>',
					timeout: 0,
					speed: 700,
					cleartypeNoBg: true
				});

				if ( $featured_content.find('.slide').length == 1 ){
					$featured_content.find('.slide').css({'position':'absolute','top':'3px','left':'11px'}).show();
					jQuery('#featured a#left-arrow, #featured a#right-arrow, #featured #controllers').hide();
				}

			};

			var pause_scroll = false;

			jQuery('#slides, #controllers').hover(function(){
				$controller.stop().animate({opacity: 1, top: "30px"},500);
				<?php if (get_option($shortname.'_pause_hover') == 'on') { ?>
					pause_scroll = true;
				<?php }; ?>
			}).mouseleave(function(){
				$controller.stop().animate({opacity: 0, top: "15px"},500);
				<?php if (get_option($shortname.'_pause_hover') == 'on') { ?>
					pause_scroll = false;
				<?php }; ?>
			});

			$slider_control_tab.hover(function(){
				jQuery(this).find('img').stop().animate({opacity: 1},300);
			}).mouseleave(function(){
				if (!jQuery(this).hasClass("active")) jQuery(this).find('img').stop().animate({opacity: 0.7},300);
			});


			var ordernum;

			function gonext(this_element){
				$controller.find("a.active img").stop().animate({opacity: 0.7},300).parent('a').removeClass('active');

				this_element.addClass('active').find('img').stop().animate({opacity: 1},300);

				ordernum = this_element.attr("rel");
				$featured_content.cycle(ordernum-1);

				if (typeof interval != 'undefined') {
					clearInterval(interval);
					auto_rotate();
				};
			}

			$slider_control_tab.click(function(){
				gonext(jQuery(this));
				return false;
			});


			var $nextArrow = jQuery('a#right-arrow'),
				$prevArrow = jQuery('a#left-arrow');

			$nextArrow.click(function(){
				var activeSlide = $controller.find('a.active').attr("rel"),
					$nextSlide = $controller.find('a:eq('+ activeSlide +')');

				if ($nextSlide.length) gonext($nextSlide)
				else gonext($controller.find('a:eq(0)'));

				return false;
			});

			$prevArrow.click(function(){
				var activeSlide = $controller.find('a.active').attr("rel")-2,
					$nextSlide = $controller.find('a:eq('+ activeSlide +')');

				if ($nextSlide.length && activeSlide != -1) { gonext($nextSlide); }
				else {
					var slidesNum = $slider_control_tab.length - 1;
					gonext($controller.find('a:eq('+ slidesNum +')'));
				};

				return false;
			});


			<?php if (get_option($shortname.'_slider_auto') == 'on') { ?>
				auto_rotate();
			<?php }; ?>

			function auto_rotate(){
				interval = setInterval(function() {
					if (!pause_scroll) $nextArrow.click();
				}, <?php echo esc_js(get_option($shortname.'_slider_autospeed')); ?>);
			};

		};


		<!---- Search Bar Improvements ---->
		function et_search_bar(){
			var $searchform = jQuery('#menu div#search-form'),
				$searchinput = $searchform.find("input#searchinput"),
				searchvalue = $searchinput.val();

			$searchinput.focus(function(){
				if (jQuery(this).val() === searchvalue) jQuery(this).val("");
			}).blur(function(){
				if (jQuery(this).val() === "") jQuery(this).val(searchvalue);
			});
		};

		<?php if (get_option($shortname.'_disable_toptier') == 'on') echo('jQuery("ul.nav > li > ul").prev("a").attr("href","#");'); ?>

	//]]>
	</script>