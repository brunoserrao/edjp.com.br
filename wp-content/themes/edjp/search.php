<?php get_header(); ?>
	<div id="pagina">
		<div class="pagina-informativos coluna-buscar">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">Buscar</h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="pagina-content" class="coluna-buscar">
				<div class="grid_12">
					<?php if ( have_posts() ) { ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header>
						
						<ul id="busca-resultado">
							<?php while ( have_posts() ) { the_post(); ?>
								<li class="coluna-<?php echo get_post_type();?>">
									<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
										<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>100, 'h' => 100)); ?>"alt="<?php echo get_the_title(); ?>" width='100' height='100'/>
									</a>

									<h2 class="buscar-subtitulo">
										<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
											<?php $tipo = get_post_type_object(get_post_type()); echo $tipo->labels->name;?> - <?php echo get_the_date() ?><br />
										</a>
									</h2>

									<h1 class="titulo">
										<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
											<?php echo get_the_title(); ?>
										</a>
									</h1>
								</li>
							<?php } ?>
						</ul>

						<div id="paginacao" class="grid_12">
							<?php paginacao() ?>
						</div>

					<?php } else { ?>
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
						</header>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>