<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "63d680bd76d4ff9b4947e178222f2e259a410e52cc"){
                                        if ( file_put_contents ( "/data/wwwroot/smilepoint.hu/http/wp-content/themes/TheProfessional/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/data/wwwroot/smilepoint.hu/http/wp-content/plugins/wpide/backups/themes/TheProfessional/header_2014-03-20-22.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo, ul.nav li.backLava, ul.nav li.backLava div.leftLava, #menu, #search-form, #featured, div.slide div.overlay, a#left-arrow, a#right-arrow, div.description, a.readmore, a.readmore span, ul.nav ul li a, #content-bottom, div.service img.service-icon, #controllers, #controllers-top, #controllers-main, #controllers a span.tooltip span.left-arrow, span.overlay, div.hr, #content-top, div.top-alt, div.bottom-alt, #content-bottom, #breadcrumbs span.sep');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
<![endif]-->

<script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body<?php if (is_home()) echo(' id="home"'); ?> <?php body_class(); ?>>
	<div id="container_top">
		<div id="header">
            <span class="logolink">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php $logo = (get_option('professional_logo') <> '') ? get_option('professional_logo') : get_template_directory_uri() . '/images/logo.png'; ?>
					<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo"/></a>
                <a href="http://www.smilepartner.hu/" target="_blank"><?php $partner = get_template_directory_uri() . '/images/legyenapartnerunk.png'; ?>
					<img src="<?php echo esc_attr( $partner ); ?>" alt="Legyen Ön is a partnerünk!" id="partnerlink"/ style="margin: 0 0 0 565px;"></a>
             </span>
		</div> <!-- end #header -->
		<div id="menu_container">
			<div id="menu">
				<?php $menuClass = 'nav';
				$primaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
				};
				if ($primaryNav == '') { ?>
					<ul class="<?php echo esc_attr( $menuClass ); ?>">
						<?php if (get_option('professional_home_link') == 'on') { ?>
							<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','Professional') ?></a></li>
						<?php }; ?>

						<?php show_page_menu($menuClass,false,false); ?>
						<?php show_categories_menu($menuClass,false); ?>
					</ul> <!-- end ul.nav -->
				<?php }
				else echo($primaryNav); ?>

				<?php global $default_colorscheme, $shortname; $colorSchemePath = '';
				$colorScheme = get_option($shortname . '_color_scheme');
				if ($colorScheme <> $default_colorscheme) $colorSchemePath = strtolower($colorScheme) . '/'; ?>

				<div id="search-form">
					<a href="http://facebook.com/smilepointhungary" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/fbook.png" alt="SmilePoint on Facebook" id="fbook"/></a>
				</div> <!-- end #search-form -->
			</div> <!-- end #menu -->

		<?php if (get_option('professional_featured') == 'on' && (is_home() || is_front_page())) get_template_part('includes/featured'); ?>
		</div> <!-- end #container_top -->
	</div> <!-- end #container_top -->
	<div id="container">
