jQuery( "document" ).ready(
	function () {
		let logo_uploader;
		let logo_elements = [
			{
				element: '#header_logo_button',
				input: '#header_logo',
		},
			{
				element: '#footer_logo_button',
				input: '#footer_logo',
		},
		];
		logo_elements.forEach(
			( uploader ) => {
            jQuery( uploader.element ).on(
					'click',
					function (e) {
						e.preventDefault();
						//If the uploader object has already been created, reopen the dialog
						if (logo_uploader) {
							logo_uploader.open();
							return;
						}
						//Extend the wp.media object
						logo_uploader = wp.media.file_frame = wp.media(
							{
								title: 'Choose Site Logo',
								button: {
									text: 'Choose Site Logo',
								},
								multiple: false,
							}
						);
						//When a file is selected, grab the URL and set it as the text field's value
						logo_uploader.on(
							'select',
							function () {
								let attachment = logo_uploader.state().get( 'selection' ).first().toJSON();
								jQuery( uploader.input ).val( attachment.url );
							}
						);
						//Open the uploader dialog
						logo_uploader.open();
					}
				)
			}
		)
	}
)
