jQuery(document).ready(function() {

	jQuery("body, .left_side").niceScroll({
		horizrailenabled : false,
		"verge" : "500"
	});

	jQuery(".gallery").css("min-height", jQuery(document).height()*1.1);

	jQuery(".btn_mnu").click(function() {
		jQuery(this).toggleClass("active");
		jQuery(".left_side").toggleClass("active");

	});

	jQuery(".gallery img").lazyload({
		effect : "fadeIn",
		threshold : 1000
	}).parent().hover(function() {
		jQuery(".gallery a").css("opacity", ".8");
		jQuery(this).css("opacity", "1");
	}, function() {
		jQuery(".gallery a").css("opacity", "1");
	});

	var wall = new freewall(".gallery");
	wall.reset({
		selector: "a",
		animate: true,
		cellW: 330,
		cellH: "auto",
		gutterX : 5,
		gutterY : 5,
		onResize: function() {
			wall.fitWidth();
		}
	});

	var images = wall.container.find("a");
	images.find("img").load(function() {
		wall.fitWidth();
	});

	jQuery(".filter_label").click(function() {
		jQuery(".filter_label").removeClass("active");
		var filter = jQuery(this).addClass("active").data("filter");
		wall.filter(filter);
		setTimeout(function() {
			jQuery(window).resize();
			wall.fitWidth();
		}, 400);
	});

	jQuery(".gallery a").magnificPopup({
		type : 'image',
		gallery : {
			enabled : true
		},
		removalDelay: 400,
		mainClass: 'mfp-fade'
	}).click(function() {
		jQuery("button.mfp-arrow").delay(1000).fadeIn();
	});


	//SVG Fallback
	if(!Modernizr.svg) {
		jQuery("img[src*='svg']").attr("src", function() {
			return jQuery(this).attr("src").replace(".svg", ".png");
		});
	};

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	jQuery("#callback").submit(function() {
		jQuery.ajax({
			type: "POST",
			url: "mail.php",
			data: jQuery(this).serialize()
		}).done(function() {
			alert("Thanks for application!");
			setTimeout(function() {
				
			}, 1000);
		});
		return false;
	});


	
});

jQuery(window).on('load', function() {

	jQuery(".loader_inner").fadeOut();
	jQuery(".loader").delay(400).fadeOut("slow");

});