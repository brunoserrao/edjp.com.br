<?php get_header(); ?>
	<div id="pagina">
		<div class="pagina-calendario coluna-calendario">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna"><?php echo get_the_title(); ?></h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="calendario" class="">
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>