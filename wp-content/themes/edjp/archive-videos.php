<?php get_header(); ?>
	<div id="archive">
		<div class="archive-videos coluna-videos">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">Vídeos</h2>		
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div class="videos-destaque grid_8">
				<?php the_post(); ?>
				<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>620, 'h' => 400)); ?>" alt="<?php echo get_the_title(); ?>" width="620" height="400" />

					<div class="videos-destaque-titulo">
						<span><?php echo get_the_title(); ?></span>
					</div>
				</a>
			</div>

			<div class="videos-destaque-texto grid_4">
				<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<?php the_content(); ?>
				</a>
			</div>

			<div class="clear"></div>

			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				query_posts('post_type=videos&posts_per_page=6&paged='.$paged);
			?>

			<div class="videos-lista grid_12">
				<ul>
					<?php while(have_posts()) {?>
						<?php the_post() ?>
						<li>
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>310, 'h' => 200)); ?>" alt="<?php echo get_the_title(); ?>" width="310" height="200" />
								<div class="videos-lista-titulo">
									<span><?php echo get_the_title(); ?></span>
								</div>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>

			<div id="paginacao" class="grid_12">
				<?php paginacao() ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>