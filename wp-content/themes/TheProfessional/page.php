<?php get_header(); ?>
	<?php if (get_option('professional_integration_single_top') <> '' && get_option('professional_integrate_singletop_enable') == 'on') echo(get_option('professional_integration_single_top')); ?>

<!--	<div id="content-top" class="top-alt"></div>-->
	<div id="content" class="clearfix content-alt">
		<div id="content-area">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('includes/breadcrumbs'); ?>

			<?php if (get_option('professional_integration_single_top') <> '' && get_option('professional_integrate_singletop_enable') == 'on') echo(get_option('professional_integration_single_top')); ?>

			<div class="entry clearfix post">

				<?php if (get_option('professional_page_thumbnails') == 'on') { ?>

					<?php $thumb = '';
					$width = 184;
					$height = 184;
					$classtext = '';
					$titletext = get_the_title();

					$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
					$thumb = $thumbnail["thumb"]; ?>

					<?php if($thumb <> '') { ?>
						<div class="thumb alignleft">
							<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
							<span class="overlay"></span>
						</div> <!-- end .thumb -->
					<?php }; ?>

				<?php }; ?>

				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','Professional').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php edit_post_link(esc_html__('Edit this page','Professional')); ?>

			</div> <!-- end .entry -->

            <?php if (get_option('professional_integration_single_bottom') <> '' && get_option('professional_integrate_singlebottom_enable') == 'on') echo(get_option('professional_integration_single_bottom')); ?>

			<?php if (get_option('professional_show_pagescomments') == 'on') comments_template('', true); ?>
		<?php endwhile; endif; ?>
		</div> <!-- end #content-area -->

		<?php get_sidebar(); ?>

	</div> <!-- end #content -->
	<div id="content-bottom" class="bottom-alt"></div>

<?php get_footer(); ?>