<?php get_header(); ?>
	<?php if (get_option('professional_integration_single_top') <> '' && get_option('professional_integrate_singletop_enable') == 'on') echo(get_option('professional_integration_single_top')); ?>
<!--	<div id="content-top"></div>-->
		<div id="container_top_placeholder">
		</div>
	<div id="content" class="clearfix">
		<div id="content-area">
<?
//			$address = get_post_meta($p->ID, BasicGoogleMapsPlacemarks::PREFIX . 'address', true);
?>
		<?php if (have_posts()) : ?>
<ul id="<?=BasicGoogleMapsPlacemarks::PREFIX;?>list" class="<?=BasicGoogleMapsPlacemarks::PREFIX;?>list clearfix">
		<? while (have_posts()) : the_post(); ?>
	<li id="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-item-<?php esc_attr_e(get_the_ID()); ?>" class="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-item">
		<h3 class="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-placemark-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-description">
			<?php the_content(); ?>
		</div>
	</li>
		<?php endwhile; ?>
</ul>
		<?php endif; ?>

<? $term = $wp_query->queried_object; ?>
<? echo do_shortcode('[bgmp-map height="400" categories="'.$term->term_id.'"]'); ?>

		</div> <!-- end #content-area -->

	</div> <!-- end #content -->
	<div id="content-bottom"></div>

<?php get_footer(); ?>