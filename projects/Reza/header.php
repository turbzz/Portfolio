<!DOCTYPE html>
<html>
<head>
	<title>Café Reza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="mobile.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--load jQuery, required-->
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<script src="js/main.js"></script> <!-- Resource jQuery -->
   
   <script> 
   $(function() {
	  var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		var links = this.el.find('.link');
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	  }

	  Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
		  $this = $(this),
		  $next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
		  $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	  }

	  var accordion = new Accordion($('#accordion'), false);
	});
   </script>

   <script>
	$(document).ready(function(){
		
		$('ul.nav').find('a').click(function(){
			var $href = $(this).attr('href');
			var $anchor = $('#'+$href);
			$('body,html').animate( {scrollTop: $anchor.offset().top} , 1000);
			return false;
		});
		
	/*	$("#button_news").click(function (){
			$('html, body').animate({
				scrollTop: $("#news").offset().top
			}, 1000);
		});
		*/

		// hide #back-top first
		$("#back-top").hide();
		
		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 200) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});

			// scroll body to 0px on click
			$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});

	});
	</script>	
</head>
<body>

