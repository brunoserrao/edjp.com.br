<?php get_header(); the_post(); ?>
	<div id="pagina">
		<div class="pagina-downloads coluna-downloads">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">
					<a href="<?php echo get_post_type_archive_link('downloads'); ?>" title="Video Home"><span>Downloads</span></a> > <?php echo get_the_title(); ?>
				</h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div id="pagina-content" class="coluna-downloads">
				<div class="grid_12">
					<span class="post-data"><?php echo get_the_date() ?></span>
					<?php the_content(); ?>
				</div>

				<div class="clear"></div>

				<div class=" download-link">

					<ul class="downloads-posts">
						<li>
							<a href="<?php echo get_field('arquivodownload'); ?>" title="<?php echo get_the_title(); ?>">
								<?php echo get_the_title() ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>