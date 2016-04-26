<?php get_header(); the_post(); ?>
	<div id="pagina">
		<div class="pagina-downloads coluna-downloads">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">Downloads</h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<ul class="downloads-posts">
				<?php $downloads = query_posts('post_type=downloads&posts_per_page=4'); ?>
				<?php while (have_posts()) { the_post(); ?>
					<li>
						<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
							<?php echo get_the_title() ?>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
<?php get_footer(); ?>