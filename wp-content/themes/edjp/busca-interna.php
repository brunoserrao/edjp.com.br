<?php if (!is_single() and !is_page()) { ?>
	<div id="buscar-interna">
		<form id="searchform" class="searchform" action="<?php echo  esc_url( home_url( '/' ) )?>">
			<input type="search" name="s" placeholder="Pesquisar" id="pesquisar">
		</form>
	</div>
<?php } ?>