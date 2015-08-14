<!-- Transform sociais icons -->
$(document).ready(
		function() {
			$('.menu_principal ul li.menu-item-105 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>');
			$('.menu_principal ul li.menu-item-106 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>');
			$('.menu_principal ul li.menu-item-107 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-behance fa-stack-1x fa-inverse"></i></span>');
			$('.menu_principal ul li.menu-item-108 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i></span>');
		}
	);

<!-- Transform icon toggle -->
$(document).ready(
	function() {
	$(".toggle i").click(function() {
		 var $this = $(this);
		 if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				return;
		 }
		 if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				return;
			 }
		});
	});