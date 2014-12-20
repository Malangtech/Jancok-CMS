var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));

$.extend($.expr[":"],
	{
		"contains-ci": function(elem, i, match, array) {
			return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
		}
	});

$(function() {

	var monthNames = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" ],
		dayNames= ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];

	var newDate = new Date();

	newDate.setDate(newDate.getDate());

	$('.date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

	setInterval( function() {

		var currentTime = new Date (),
			currentHours = currentTime.getHours (),
			currentMinutes = currentTime.getMinutes (),
			currentSeconds = currentTime.getSeconds ( );

		currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
		currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

		currentHours = ( currentHours == 0 ) ? 12 : currentHours;

		var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

		$(".time").html(currentTimeString);
	},1000);

	$( '.mainmenu li, .mainmenu div.dropdown' ).click(function() {
		var dropDownWidth =  $(this).find('.dropdown-menu').parent().width();

		if ($(this).hasClass('dropdown')) {
			$(this).find('.dropdown-menu').css({minWidth: (dropDownWidth - 1) + 'px'})
		}
	});

	$('.collapseMenu').click(function() { 

		if ($(this).hasClass('uncollapsed')) {
			$('.mainmenu').animate({left: -120}, 200, function() {
				$('.collapseMenu').removeClass('uncollapsed').animate({left: 40}, 200);
				$('.deCollapse').css({display: 'inline-block'});
			});  
		} else {
			$('.collapseMenu').addClass('uncollapsed').animate({left: 0}, 200, function() {
				$('.mainmenu').animate({left: 0}, 200);
				$('.deCollapse').css({display: 'none'});
			}); 
		}  

	});

	$('ul.nav-tabs li a').click(function() {
		var href = $(this).attr('href'), $previous = $(this).closest('ul.nav-tabs').find('li.active');

		$(href).parent().children().hide();
		$(href).fadeIn();

		$previous.removeClass('active');
		$(this).parent().stop().addClass('active');

		return false;
	});

	var currentSection = 0;

	$('div .input-append a.sidebar').click(function() {

		var href = $(this).attr('href');
		var $previous = $('div .input-append a span.add-on.active');

		$previous.removeClass('active');
		$(this).find('span.add-on').addClass('active');
		$('.hiddenContent>div').hide();
		$(href).fadeIn();

		if(currentSection == 0) {
			$('.hiddenContent').stop().animate({right: 0}).css({display: 'block'});
			currentSection = href;
		} else if(currentSection == href) {
			$('.hiddenContent').stop().animate({right: -270});
			$previous.removeClass('active');

			currentSection = 0;
		} else {
			currentSection = href;
		}

		return false;
	});

	var currentSection = 0;

	$('.collapsedSidebarMenu a.sidebar, a.showCollapsedSidebarMenu').click(function() {
		var href = $(this).attr('href');
		$('.hiddenContent>div').hide();
		$(href).fadeIn();

		return false;
	});

	$('.sl1').slider();
	$('.sl2').slider({
		value: [40,60]
		,min: 0
		,max: 100
		,step: 1
	});

	$('#toggler').bind('change', function () {

		if ($(this).is(':checked'))
			$('.toggle .slider-selection').animate({width: '0px', opacity: 0}, 200)
		else
			$('.toggle .slider-selection').animate({width: '30px', opacity: 1}, 100)
	});

	$('.profilePhoto').hover(function () {
		$(this).animate({
			'background-position-x': "100%"
		}, "300");
	}, function() {
		$(this).stop().animate({
			'background-position-x': "0%"
		}, "300");
	});

	$('.usersBar').sparkline('html', {type: 'bar', barColor: '#33B5E5', barWidth: 4, height: 25} );
	$('.visitsBar').sparkline('html', {type: 'bar', barColor: '#FF4444', barWidth: 4, height: 25} );
	$('.ordersBar').sparkline('html', {type: 'bar', barColor: '#99CC00', barWidth: 4, height: 25} );

	$('ul.masterActions li').hover(function () {
		$(this).find('i').stop().animate({
			marginLeft: '25px'
		}, 300);
	}, function() {
		$(this).find('i').stop().animate({
			marginLeft: '0px'
		}, 300);
	});

	$('.minimizeElement, .minimizeTable').click(function () {
		if ($(this).hasClass('minimizeElement')) {
			$(this).parents(':eq(1)').next().slideToggle();
			$(this).toggleClass('active');
		} else if ($(this).hasClass('minimizeTable')) {
			$(this).parents(':eq(2)').next().slideToggle();
			$(this).find('i').toggleClass('cyanText');
		}
	});

	$('.removeElement, .removeTable').click(function () {
		if ($(this).hasClass('removeElement')) {
			$(this).parents(':eq(2)').remove();
		} else if ($(this).hasClass('removeTable')) {
			$(this).parents(':eq(3)').remove();
		}
	});

	$('i.moreOptions, .tableSettings').popover({
		trigger: 'click',
		placement: 'bottom',
		html : true,
		content: function() {
			return $('#moreOptionsMenu').html();
		}
	})

	.click(function(evt) {
		var isRight = evt.pageX > (evt.view.outerWidth / 1.2);

		if(isRight === true) {
			$('.dropdown-submenu').addClass('submenu-left')
		} else {
			$('.dropdown-submenu').removeClass('submenu-left')
		}
	});

	$('body').on('click', function (e) {
		$('i.moreOptions, .tableSettings').each(function () {
			if(!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});
})

