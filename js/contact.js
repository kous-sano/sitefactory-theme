jQuery(function($){
	$('[name="postcode[data][0]"]').jpostal({

		postcode : [
			'[name="postcode[data][0]"]',
			'[name="postcode[data][1]"]' 
		],
		address : {
			'#pref'  : '%3',
			'#address01'  : '%4%5'
		}
	});
});

jQuery(function($){
	var errors = $('.text-danger').length;
	if(errors>0){
		var position = $('.text-danger').eq(0).parents('td').offset().top;
		$('body,html').stop().animate({ scrollTop: position }, 800, 'swing');
	}
});


jQuery(function($){
	$.fn.autoKana('#namae', '#kana', {
        katakana : true  //true：カタカナ、false：ひらがな（デフォルト）
    });
});
