<?php get_header(); ?>
<section>
<!-- O loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<div class="area-blog-titulo">
		<img src="<?php bloginfo('template_directory'); ?>/img/bullet-internas.png"\>
		<a href="<?php the_permalink(); ?>">		
		<?php the_title(); ?>				
		<a>
		<div class="addthis_sharing_toolbox"></div>
	</div>

	<div class="texto-internas">
	
			<?php the_content(); ?>

	</div>
	<div class="sidebar-1">
			<?php 
			if ( is_active_sidebar('sidebar-1') ) {
			    dynamic_sidebar('sidebar-1');
			}
			?>
			</div>

<?php endwhile; ?>
<?php endif; ?>
<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5"></div>
</section>	
<?php get_footer(); ?>