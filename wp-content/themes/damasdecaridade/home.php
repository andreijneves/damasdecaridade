<?php get_header(); ?>
<section>
<div class="blog-conteiner">
<?php query_posts($query_string.'&cat=-4'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<div style="cursor:pointer; background-image: url(<?php the_post_thumbnail_url() ?>);" onclick="location.href='<?php the_permalink() ?>';">
		<div class="blog-label">
			<span class="blog-tit"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
</section>
<?php get_footer(); ?>

	