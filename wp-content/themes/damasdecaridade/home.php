<?php get_header(); ?>
<section>
	
<!-- O loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<div class="area-blog-titulo">
		<img src="<?php bloginfo('template_directory'); ?>/img/bullet-internas.png"\>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
				
		<a>
	</div>

	<div class="texto-internas">
		<?php the_content(); ?> 
	</div>

<?php endwhile; ?>
<?php endif; ?>

</section>
<?php get_footer(); ?>

	