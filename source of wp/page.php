<?php get_header();?>
	   <div class="maincontent">
		    <div class="left_content floatleft">
				<div class="page_content">
						<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						<?php endwhile; ?>

						<?php else : ?>
							<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
						<?php endif; ?>							
					</div>
				 </div>
		    <?php get_template_part('middle-content'); ?>
		    <?php get_sidebar(); ?>
		</div>
<?php get_footer();?>