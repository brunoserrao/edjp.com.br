<?php get_header(); ?>
	<div id="archive">
		<div class="archive-videos coluna-fotos">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">
					<a href="<?php echo get_post_type_archive_link('fotos'); ?>" title="<?php echo get_the_title(); ?>"><span>Fotos</span></a> > <?php echo get_the_title(); ?>
				</h2>
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
				<span class="post-data"><?php echo get_the_date() ?></span>
				<?php
					$fotos_descricao = get_post_meta(get_the_ID(), 'fotos_descricao', true);
					echo $fotos_descricao;
				?>
			</div>

			<div class="clear"></div>

			<div id="fotos-galeria" class="grid_12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
