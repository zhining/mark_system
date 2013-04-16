(function (window, document, $, undefined) {

$(function () {
	var page_class = $('body').attr('data-page-class');
	var $page_class = $(page_class);
	if ($page_class.length > 0) {
		$page_class.addClass('active');
	};


	var $sidebar_link = $('.nav-list li:not(".nav-header")').filter('.jidianqi_controll');
	$sidebar_link.click(function () {
		$sidebar_link.removeClass('active');
		$(this).addClass('active');
	});

	// sidebar height
	$('.sidebar-nav').css({
		'height'    : $(window).height() - 150 + 'px',
		'overflowY' : 'auto'
	});

	$(window).resize(function () {
		$('.sidebar-nav').css({
			'height'    : $(window).height() - 150 + 'px'
		});
	});


	// sidebar tab 
	$('.nav-header.tab1').tab({
        'button_class' : '.button_tab',
        'text_show' : 'Show',
        'text_hide' : 'Hide',
        'dest_class' : '.tabObject1',
        'duration' : 300,
        'start_status' : false	// 开始隐藏
    });
	$('.nav-header.tab2').tab({
		'button_class' : '.button_tab',
		'text_show' : 'Show',
		'text_hide' : 'Hide',
		'dest_class' : '.tabObject2',
		'duration' : 300,
		'start_status' : false	// 开始隐藏
	});
	$('.nav-header.tab3').tab({
		'button_class' : '.button_tab',
		'text_show' : 'Show',
		'text_hide' : 'Hide',
		'dest_class' : '.tabObject3',
		'duration' : 500,
		'start_status' : false	// 开始隐藏
	});
	$('.nav-header.tab4').tab({
		'button_class' : '.button_tab',
		'text_show' : 'Show',
		'text_hide' : 'Hide',
		'dest_class' : '.tabObject4',
		'duration' : 500,
		'start_status' : false	// 开始隐藏
	});



	// .carema_controll
	$('.carema_controll.tabObject1 a').click(function (e){
		// cancel the event
		e.preventDefault();
		e.returnValue = false;

		var $this = $(this);
		var url = $this.attr('href');
		var ctrl_num = $this.attr('data-ctrl-num') >> 0;

		if (ctrl_num == 4) {

			var $checkbox = $this.parent().find('input[type=checkbox]');
			$checkbox[0].checked = !$checkbox[0].checked;
			if ($checkbox[0].checked) {
				$checkbox.val('yes');
			} else {
				$checkbox.val('no');
			}
			
			$.get(url, {
				'ctrl_num' : ctrl_num,
				'isMove' : $checkbox.val()
			}, function (data) {
				
			});

		} else {
			$.get(url, {
				'ctrl_num' : ctrl_num
			}, function (data) {
				
			});
		}

	});

	var jidianqi_controll_status = {
		'open'  : $('.jidianqi_controll.tabObject4 a').first().attr('data-open'),
		'close' : $('.jidianqi_controll.tabObject4 a').first().attr('data-close')
	};

	$('.jidianqi_controll.tabObject4 a').click(function (e) {

		e.preventDefault();
		e.returnValue = false;

		var $this = $(this);
		var url = $this.attr('href');
		var ctrl_num = $this.attr('data-ctrl-num') >> 0;
		var $status = $this.find('.status');

		if ($status.text() == jidianqi_controll_status.open) {
			$status.text(jidianqi_controll_status.close);
			$this.parent('li').removeClass('active');
		} else {
			$status.text(jidianqi_controll_status.open);
			$this.parent('li').addClass('active');
		}

		$.get(url, {
			'ctrl_num' : ctrl_num
		}, function (data) {
			
		});
	});


	
});

})(window, document, jQuery);