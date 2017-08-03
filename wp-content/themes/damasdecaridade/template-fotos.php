
<?php 
	/** 
	* Template Name: Fotos 
	**/ 
?>
<?php get_header(); ?>
<section>
<div class="area-blog-titulo">
		<img src="<?php bloginfo('template_directory'); ?>/img/bullet-internas.png"\>
		
		Fotos da Associação das Damas de Caridade de Florianópolis		
		
	</div>
<div class="area-gal">	
<?php
global $post;
$args = array( 'cat' => '4' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
		
	<div class="item-gal" style="background-image: url(<?php the_post_thumbnail_url() ?>); cursor:pointer;" onclick="location.href='<?php the_permalink() ?>';">
			<div class="gal-label">
				<span class="gal-tit"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
			</div>				
	</div>		
	
<?php endforeach; ?>
</div>
</section>	
<?php get_footer(); ?>
