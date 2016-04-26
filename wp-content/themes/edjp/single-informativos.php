<?php get_header(); the_post(); ?>
	<div id="pagina">
		<div class="pagina-informativos coluna-informativos">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna"><?php echo get_the_title(); ?></h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="pagina-content" class="coluna-informativos">
				<div class="grid_12">
					<span class="post-data"><?php echo get_the_date() ?></span>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>