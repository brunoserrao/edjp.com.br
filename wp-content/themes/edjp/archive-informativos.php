<?php get_header(); ?>
	<div id="archive">
		<div class="archive-informativos-tos coluna-informativos">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">Informativos</h2>		
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				query_posts('post_type=informativos&posts_per_page=6&paged='.$paged);
			?>

			<div class="informatvos-tos-lista grid_12">
				<ul>
					<?php while(have_posts()) {?>
						<?php the_post() ?>
						<li>
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>380, 'h' => 200)); ?>" alt="<?php echo get_the_title(); ?>" width="380" height="200" />
								<div class="informativos-lista-titulo">
									<h2><?php echo get_the_title(); ?></h2>
									<span class="post-resumo">
										<?php echo get_the_excerpt(); ?>
									</span class="post-resumo">
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