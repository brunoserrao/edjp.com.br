<?php get_header(); ?>
	<div id="archive">
		<div class="archive-videos coluna-videos">
			<div class="grid_8">
				<h2 class="titulo-area titulo-interna">
					<a href="<?php echo get_post_type_archive_link('videos'); ?>" title="<?php echo get_the_title(); ?>"><span>Vídeos</span></a> > <?php echo get_the_title(); ?>
				</h2>
			</div>

			<div class="grid_4">
				<?php get_template_part('busca-interna'); ?>
			</div>

			<div class="clear"></div>

			<div class="videos-destaque grid_8">
				<?php 
					the_post();
					$video_url = get_post_meta($post->ID, 'url_do_youtube', true);
					$embed_code = wp_oembed_get( $video_url,  array('width' => 620) );
					echo $embed_code;
				?> 
			</div>

			<div class="videos-destaque-texto grid_4">
				<span class="post-data"><?php echo get_the_date() ?></span>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
