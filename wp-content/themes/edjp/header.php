<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/960_12_col.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/fullcalendar.min.css" />

		<?php wp_head(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/moment.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/fullcalendar.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lang-all.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

		<script>
			var jsonUrl = "<?php echo site_url(); ?>/json.php";
		</script>
	</head>

	<body <?php body_class(); ?>>

		<div id="topo">
			<div id="logo-menu">
				<div class="container_12 topo-relativo">
					<div id="logo-sombra">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sombra.png" alt="">
					</div>
					<div id="logo">
						<a href="<?php echo site_url(); ?>" title="<?php echo bloginfo('name'); ?> ">
							<h1>
								<?php echo bloginfo('name') ?> | <?php echo bloginfo('description') ?>
							</h1>
						</a>
					</div>

					<div id="menu-container">
						<?php wp_nav_menu( array( 'id' => 'Menu Principal' ) ); ?>
					</div>

					<div id="social">
						<a href="https://www.facebook.com/jean.piaget.1428" target="_blank" title="Facebook" class="facebook-link">
							<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icone.png" alt="Facebook" />
						</a>

						<a href="http://instagram.com/edjeanpiaget" target="_blank" title="Instagram" class="instagram-link">
							<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icone.png" alt="Instagram" />
						</a>
					</div>
				</div>
			</div>

			<div class="container_12">
				<div id="banners">
					<div id="banners-content">
						<?php query_posts('post_type=any&cat=2&posts_per_page=5') ?>
						<?php if (have_posts()) { ?>
							<?php while (have_posts()) { the_post() ?>
							<div class="baner-cycle">
									<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
										<img src="<?php echo thumb(array('id' => get_the_ID(),'w'=>960, 'h' => 355)); ?>" alt="<?php echo get_the_title(); ?>" width="960" height="355"/>
									</a>

									<div class="banner-descricao">
										<div class="banner-padding">
											<div class="banner-post-categoria">
												<?php echo get_field('banner_subtitulo') ?>
											</div>
											<div class="banner-post-titulo">
												<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
													<h1><?php echo get_the_title(); ?></h1>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php wp_reset_query(); ?>
					</div>
					
					<div class="setas esquerda"></div>
					<div class="setas direita"></div>
					<div id="banners-paginate"></div>
				</div>
			</div>
		</div>

		<!-- CONTEUDO -->
		<div id="conteudo" class="container_12">