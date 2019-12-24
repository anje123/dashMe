	
	jQuery(document).ready(function($){
		$('.preset-list li a').on('click',function(event){
			event.preventDefault();
			var color = $(this).data('color'),
				url = 'css/presets/'+color+'.css';
				logoSrc = 'images/presets/'+color+'/logo.png';			
				logoSrc1 = 'images/presets/'+color+'/logo1.png';			
				logoSrc2 = 'images/presets/'+color+'/location.png';			
				logoSrc3 = 'images/presets/'+color+'/contact.png';			
				
			$('.tr-logo').attr('src', logoSrc);
			$('.tr-logo1').attr('src', logoSrc1);
			$('.contact-info li:nth-child(1) img').attr('src', logoSrc2);
			$('.contact-info li:nth-child(2) img').attr('src', logoSrc3);
			$('#preset').attr('href', url);			
		});

		$('.style-chooser .toggler').on('click', function(event){
			event.preventDefault();
			$(this).closest('.style-chooser').toggleClass('opened');
		});
	});