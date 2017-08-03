
<?php 
get_header(); 
?>
<section>
		<div class="destaques">
		<?php
				global $post;
				$args = array('cat' => '3' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div style="background-image: url(<?php the_post_thumbnail_url() ?>">
					<div class="dtk-label">						
						<span class="dtk-tit"><?php the_title() ?></span>
						<?php the_excerpt() ?> 
					</div>
				</div>
				<?php endforeach; ?>

		</div>
		<div class="area-blog-titulo">
			<img src="<?php bloginfo('template_directory'); ?>/img/blog.png" \>De Olho no Blog - Sempre atentos as novidades...
		</div>

		<div class="area-news">
			<div class="news-container">
				<?php
				global $post;
				$args = array('cat' => '-4' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div class="item-news">
					<span class="tit">
						<img src="<?php bloginfo('template_directory'); ?>/img/snipet.png" \><a href="<?php the_permalink() ?>"><?php the_title() ?>
					</span>		<br \><br \>
					<?php strip_tags(the_excerpt()) ?>	</a>				
				</div>
				<?php endforeach; ?>

			</div>

				
				
						
		</div>
		<div class="doe-aqui">
				<img src="<?php bloginfo('template_directory'); ?>/img/bannerdoacoes.png" \>
		</div>
		<div class="area-galeria-titulo">
			<img src="<?php bloginfo('template_directory'); ?>/img/icon-foto.jpg"\>
			Conheça mais a Associação das Damas de Caridade de Florianópolis
		</div>

		<div class="area-gal">			
				<?php
				global $post;
				$args = array('posts_per_page' => 4, 'cat' => '4' );
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

	