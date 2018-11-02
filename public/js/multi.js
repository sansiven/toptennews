		var arrLang = {
			'en' : {
				'about' : 'About Us',
                'advertisement' : 'For Advertisement',
                'contact' : 'Contact',
				'test' : 'This is test for pp.'
			},

			'np' : {
				'about' : 'हाम्रो बारे',
				'advertisement' : 'बिज्ञापनको लागि ',
				'contact' : 'सम्पर्क',
				'test' : 'यो PP को लागि परिक्ष्यन गरिएको हो । '
			}
		};

		$(function(){
			$('.translate').click(function(){
				var lang = $(this).attr('id');

				$('.lang').each(function(index, element){
					$(this).text(arrLang[lang][$(this).attr('key')]);
				});
			});
		});



