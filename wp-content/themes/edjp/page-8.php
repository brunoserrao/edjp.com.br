<?php get_header(); the_post(); ?>
	<div id="pagina">
		<div class="pagina-matricula coluna-matricula">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna"><?php echo get_the_title(); ?></h2>		
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="pagina-content" class="coluna-matricula pagina-contato">
				<div class="grid_6 form-contato">
					<?php echo do_shortcode('[bws_contact_form]'); ?>
				</div>

				<div class="grid_6 localizacao">
					<?php $localizacao = get_page(14); ?>
					<address>
						<?php echo nl2br($localizacao->post_content) ?>
					</address>

					<div class="mapa">
						<a href="https://maps.google.com/?q=-9.634007,-35.701623&amp;ll=-9.634007,-35.701623&amp;z=17&amp;t=m&amp;output=embed" title="Av. Comendador Gustavo Paiva, 195" title="Mapa" class="colorbox">
							<img src="<?php echo thumb(array('id' => $localizacao->ID,'w'=>460, 'h' => 415)); ?>" alt="<?php echo get_the_title(); ?>" width="460" height="416" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>