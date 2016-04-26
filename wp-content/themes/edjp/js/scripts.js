jQuery(function(){

	// Calendario
	if (jQuery('#calendario').length > 0) {
		jQuery('#calendario').fullCalendar({
			 lang: 'pt-br',
			editable: false,
			events: jsonUrl
		});
	};

	// Colorbox
	jQuery('.colorbox').colorbox({
		iframe		: true,
		width		: '90%',
		height		: '90%'
	});

	// jQuery('#form-login').submit(function(e){
	// 	e.preventDefault();
	// 	form = jQuery(this);

	// 	jQuery.colorbox({
	// 		// iframe		: true,
	// 		open: true,
	// 		scrolling: false,
	// 		innerWidth:'100',
	// 		innerHeight:'100',
	// 		href: jQuery(form).attr('action'),
	// 		data:{edt_alunoMatricula:jQuery('#edt_alunoMatricula').val(),edt_alunoDataNascimento:jQuery('#edt_alunoMatricula').val()},
	// 		onClosed:function(){
				
	// 		}	
	// 	});
	// });

	// Cycle Banner
	jQuery('#banners-content').cycle({
		pager		: '#banners-paginate',
		prev		: '.esquerda',
		next		: '.direita'
	});
});