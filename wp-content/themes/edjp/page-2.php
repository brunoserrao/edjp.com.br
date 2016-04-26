<?php get_header(); the_post(); ?>
	<div id="pagina">
		<div class="pagina-esporte coluna-matricula">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna"><?php echo get_the_title(); ?></h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="pagina-content" class="coluna-esporte">
				
				<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					query_posts('post_type=esportes&posts_per_page=1&paged='.$paged);
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

				<div class="esportes-campeonatos grid_8">
					<?php $campeonatos = get_page(175);?>
					<h2 class="titulo-area titulo-interna"><?php echo $campeonatos->post_title; ?></h2>

					<div class="esporte-campeonatos-lista">
						<div class="campeonatos-titulo">
							Campeonatos - Categoria
						</div>

						<?php echo $campeonatos->post_content; ?>
					</div>

					<div class="clear"></div>

					<div class="esportes-trofeus">
					
						<?php $trofeus = get_page(177);?>
						<h2 class="titulo-area titulo-interna"><?php echo $trofeus->post_title; ?></h2>

						<div class="esporte-tofeus-imagem">
							<img src="<?php echo thumb(array('id' => $trofeus->ID,'w'=>620, 'h' => 256)); ?>" alt="<?php echo $trofeus->post_title; ?>" width="620" height="256" />
						</div>
					</div>
				</div>

				<div class="esportes-destaque grid_4">
					<?php $destaque = get_page(180);?>
					<h2 class="titulo-area titulo-interna">Destaque</h2>

					<div class="esportes-destaque-conteudo">

						<div class="esporte-destaque-imagem">
							<img src="<?php echo thumb(array('id' => $destaque->ID,'w'=>300, 'h' => 300)); ?>" alt="<?php echo $destaque->post_title; ?>" width="300" height="300" />
						</div>

						<div class="esporte-destaque-card">
							<?php echo $destaque->post_content; ?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>