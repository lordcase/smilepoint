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
		<? while (have_posts()) : the_post(); ?>
	<div class="bgmp-entry">
		<h3 class="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-placemark-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="<?php esc_attr_e(BasicGoogleMapsPlacemarks::PREFIX); ?>list-description">
			<?php the_content(); ?>
		</div>
<?php $attachments = new Attachments('sp_attachments'); ?>
<?php if( $attachments->exist() ) : ?>
  <h3>Képek</h3>
  <ul class="clearfix">
    <?php while($attachment = $attachments->get()) : ?>
      <li style="width: 33%; float: left;">
		<?php echo wp_get_attachment_image($attachment->id, 'medium'); ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
	</div>
		<?php endwhile; ?>
		<?php endif; ?>
<br/>
<? echo do_shortcode('[bgmp-map height="400" placemark="'.get_the_ID().'"]'); ?>

		</div> <!-- end #content-area -->

	</div> <!-- end #content -->
	<div id="content-bottom"></div>

<?php get_footer(); ?>