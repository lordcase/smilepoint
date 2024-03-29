<?php global $shortname; ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
<?php /* <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.lavalamp.1.3.3-min.js"></script> */ ?>
<script type="text/javascript">
//<![CDATA[
		jQuery.noConflict();

		var startLink = 0;

		et_search_bar();

        function compensateHeader() {
            if (jQuery('#container_top').css('position') == 'fixed') {
                window.scrollBy(0,-jQuery('#container_top').height());
            }
        }

        if (document.location.href.indexOf("#") != -1) {
            window.setTimeout(compensateHeader, 100);
        }

        jQuery(window).bind('hashchange', function () {
            window.setTimeout(compensateHeader, 100);
        });

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