<?php get_header(); ?>
	<!-- HOME --> 
	<div id="home">
		<!-- HOME PARTE 1 -->
		<div class="coluna-home coluna-home-parte-1" id="home-coluna-1">
			<div class="coluna-videos">
				<a href="<?php echo get_post_type_archive_link('videos'); ?>" title="Videos">
					<h2 class="titulo-area">Vídeos</h2>
				</a>
				
				<?php $video = query_posts('post_type=videos&posts_per_page=1'); the_post(); ?>
				<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>320, 'h' => 190)); ?>" alt="<?php echo get_the_title(); ?>" width="320" height="190" />
				</a>
			</div>

			<div class="coluna-fotos">
				<a href="<?php echo get_post_type_archive_link('fotos'); ?>" title="Fotos">
					<h2 class="titulo-area">Fotos</h2>
				</a>
				
				<?php $foto = query_posts('post_type=fotos&posts_per_page=1'); the_post(); ?>
				<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
					<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>320, 'h' => 190)); ?>" alt="<?php echo get_the_title(); ?>" width="320" height="190" />
				</a>
			</div>
		</div>

		<div class="coluna-home coluna-home-parte-1 coluna-informativos" id="home-coluna-2">

			<a href="<?php echo get_post_type_archive_link('informativos'); ?>" title="Informativos">
				<h2 class="titulo-area">Informativos</h2>
			</a>
			
			<ul class="informativos-posts">
				<?php $informativos = query_posts('post_type=informativos&posts_per_page=2'); ?>
				<?php while (have_posts()) { the_post(); ?>
					<li>
						<a href="<?php echo get_the_permalink() ?>" title="<?php echo get_the_title() ?>">
							<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>100, 'h' => 80)); ?>" alt="<?php echo get_the_title(); ?>" width="100" height="80"  class="home-informativo-imagem"/>
							<h3 class="home-informativo-titulo"><?php echo get_the_title() ?></h3>
						</a>
					</li>
				<?php } ?>
			</ul>

			<a href="<?php echo get_post_type_archive_link('textos_tos'); ?>" title="Textos SOE">
				<h2 class="titulo-area">Textos SOE</h2>
			</a>

			<ul class="informativos-posts">
				<?php $textos_tos = query_posts('post_type=textos_tos&posts_per_page=2'); ?>
				<?php while (have_posts()) { the_post(); ?>
					<li>
						<a href="<?php echo get_the_permalink() ?>" title="<?php echo get_the_title() ?>">
							<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>100, 'h' => 80)); ?>" alt="<?php echo get_the_title(); ?>" width="100" height="80"  class="home-informativo-imagem"/>
							<h3 class="home-informativo-titulo"><?php echo get_the_title() ?></h3>
						</a>
					</li>
				<?php } ?>
			</ul>

		</div>

		<div class="coluna-home coluna-home-parte-1" id="home-coluna-3">
			<div class="coluna-buscar coluna-buscar-home">
				<div class="titulo-buscar">
					<h2 class="titulo-area">Buscar</h2>
				</div>

				<form id="searchform" class="searchform" action="<?php echo  esc_url( home_url( '/' ) )?>">
					<input type="search" name="s" placeholder="Pesquisar" id="pesquisar">
				</form>
			</div>

			<div class="coluna-links">
				<div class="coluna-links-home coluna-matricula">
					<a href="<?php echo get_the_permalink(10) ?>" title="<?php echo get_the_title(10); ?>">
						<h2 class="titulo-area"><?php echo get_the_title(10);?></h2>
					</a>
				</div>

				<div class="coluna-links-home coluna-calendario">
					<a href="<?php echo get_the_permalink(12) ?>" title="<?php echo get_the_title(12); ?>">
						<h2 class="titulo-area"><?php echo get_the_title(12);?></h2>
					</a>
				</div>

				<div class="coluna-links-home coluna-boleto">
					<a href="http://www.w3soft.com.br/W3Escola/frm_login.aspx?codigoEmpresa=24" class="colorbox" title="Imprima seu boleto">
						<h2 class="titulo-area">Boleto</h2>
					</a>
				</div>

				<div class="coluna-links-home coluna-boletim">
					<a href="http://www.w3soft.com.br/W3Escola/frm_login.aspx?codigoEmpresa=24" class="colorbox" title="Boletim">
						<h2 class="titulo-area">Boletim</h2>
					</a>
				</div>
			</div>
		</div>
		<!-- #HOME PARTE 1 -->

		<div class="clear"></div>
		<div class="home-divisao"></div>
		<div class="clear"></div>

		<!-- HOME PARTE 2 -->

		<div class="coluna-home coluna-home-parte-2" id="home-coluna-4">
			<div class="coluna-downloads">
				<h2 class="titulo-area">Downloads</h2>

				<ul class="downloads-posts">
					<?php $downloads = query_posts('post_type=downloads&posts_per_page=5'); ?>
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

		<div class="coluna-home coluna-home-parte-2" id="home-coluna-5">
			<div class="coluna-area-do-aluno">
				<h2 class="titulo-area">Área do <br />Aluno</h2>

				<form name="form-login" method="post" action="http://www.w3soft.com.br/W3Escola/frm_login.aspx?codigoEmpresa=24" id="form-login" target="_blank">
					<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
					<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
					<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTQzMjg1MTUwMQ9kFgICAw9kFhICAQ8UKhJTeXN0ZW0uV2ViLlVJLlBhaXIBDwUJdnNNZW1iZXJzFCsAAQ8FEkN1c3RvbURpcmVjdEV2ZW50cw8CAhQrAAIUKwQBDwUEYmFzZRYCHgZUYXJnZXQFDWJ0bl9hcmVhQWx1bm8UKwQBDwUEYmFzZRYCHwAFFmJ0bl9hcmVhQWRtaW5pc3RyYXRpdm9kAgMPFCsEAQ8FBGJhc2UPFgIeBVZhbHVlBQIyNGQWAmYPFgIeBWNsYXNzBQh4LWhpZGRlbmQCBQ8PFgIeCEltYWdlVXJsBScuL2xvZ29tYXJjYXMvMjRnLmpwZz82MzU0NjkyNTk1NDQwODM3NTBkZAIHDw8WAh4NT25DbGllbnRDbGljawUNcmV0dXJuIGZhbHNlO2RkAgkPDxYCHwQFDXJldHVybiBmYWxzZTtkZAILD2QWAmYPFgIfAgUIeC1oaWRkZW4WCAIBD2QWAmYPFgIfAgUIeC1oaWRkZW5kAgMPZBYCZg8WAh8CBQh4LWhpZGRlbmQCBQ9kFgJmDxYCHwIFCHgtaGlkZGVuZAIHD2QWAmYPFgIfAgUIeC1oaWRkZW5kAg0PZBYCZg8WAh8CBQh4LWhpZGRlbhYMAgEPZBYCZg8WAh8CBQh4LWhpZGRlbmQCAw9kFgICAQ8WAh8CBQh4LWhpZGRlbmQCBQ9kFgJmDxYCHwIFCHgtaGlkZGVuZAIHD2QWAmYPFgIfAgUIeC1oaWRkZW5kAgkPZBYCZg8WAh8CBQh4LWhpZGRlbmQCCw9kFgJmDxYCHwIFCHgtaGlkZGVuZAIPD2QWAmYPFgIfAgUIeC1oaWRkZW4WBAIBD2QWAmYPFgIfAgUIeC1oaWRkZW5kAgMPZBYCZg8WAh8CBQh4LWhpZGRlbmQCEQ9kFgJmDxYCHwIFCHgtaGlkZGVuFgQCAQ9kFgJmDxYCHwIFCHgtaGlkZGVuZAIDD2QWAmYPFgIfAgUIeC1oaWRkZW5kGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYVBRBSZXNvdXJjZU1hbmFnZXIxBQtoZGRFc2NvbGFJRAUNYnRuX2FyZWFBbHVubwUWYnRuX2FyZWFBZG1pbmlzdHJhdGl2bwUSd2luX2FkbWluaXN0cmF0aXZvBQllZHRfbG9naW4FCWVkdF9zZW5oYQUQYnRuX2VmZXR1YXJMb2dpbgUQYnRuX2VzcXVlY2lTZW5oYQUJd2luX2FsdW5vBRJlZHRfYWx1bm9NYXRyaWN1bGEFF2VkdF9hbHVub0RhdGFOYXNjaW1lbnRvBRJlZHRfU2VuaGFBcmVhQWx1bm8FDmJ0bl9hbHVub0xvZ2luBRlidG5fZXNxdWVjaVNlbmhhQXJlYUFsdW5vBQ93aW5fZW52aWFyU2VuaGEFCWVkdF9lTWFpbAUPYnRuX2VudmlhclNlbmhhBRh3aW5fRW52aWFyU2VuaGFBcmVhQWx1bm8FF2VkdF9FbWFpbFJlc3BGaW5hbmNlaXJvBQdCdXR0b24xKA8U6BUOp9Jn/ZtOUJL02E38KtU=" />

					<input type="text" class="input-text" name="edt_alunoMatricula" id="edt_alunoMatricula" placeholder="Matrícula">
					<input type="text" class="input-text" name="edt_alunoDataNascimento" id="edt_alunoDataNascimento" placeholder="Nascimento">
					<button type="submit" class="submit">Entrar</button>
				</form>
			</div>
		</div>

		<div class="coluna-home coluna-home-parte-2" id="home-coluna-6">
			<div class="coluna-localizacao">
				<h2 class="titulo-area">Localização</h2>

				<div class="endereco">
					<?php $localizacao = get_page(14); ?>
					<address>
						<?php echo nl2br($localizacao->post_content) ?>
					</address>
				</div>

				<div class="clear"></div>

				<div class="mapa">
					<a href="https://maps.google.com/?q=-9.634007,-35.701623&amp;ll=-9.634007,-35.701623&amp;z=17&amp;t=m&amp;output=embed" title="Av. Comendador Gustavo Paiva, 195" title="Mapa" class="colorbox">
						<img src="<?php echo thumb(array('id' => $localizacao->ID,'w'=>320, 'h' => 180)); ?>" alt="<?php echo get_the_title(); ?>" width="320" height="180" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- HOME -->
<?php get_footer(); ?>