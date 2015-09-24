<!-- Transform sociais icons -->
$(document).ready(function() {
		$('.menu_principal ul li.menu-item-15 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>');
		$('.menu_principal ul li.menu-item-16 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>');
		$('.menu_principal ul li.menu-item-17 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-behance fa-stack-1x fa-inverse"></i></span>');
		$('.menu_principal ul li.menu-item-18 a').html('<span class="fa-stack fa-md"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i></span>');
		$('.scroll ul li a.logos').hide();
	}
);

<!-- Scroll -->
$(document).ready(function() {

    $('.scroll-left').click(function(){

        $('.scrolling').animate({'left':'+=200px'}, 500);

    });

    $('.scroll-right').click(function(){

        $('.scrolling').animate({'left':'-=200px'}, 500);

    });
});


<!-- Transform icon toggle -->
$(document).ready(function() {
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
	
	jQuery(document).ready( function( $ ) {
	// Relocate Jetpack sharing buttons down into the comments form
	jQuery( '#sharing' ).html( jQuery( '.sharedaddy' ).detach() );
	});