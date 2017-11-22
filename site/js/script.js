$(document).ready(function(){

  // Add smooth scrolling to all links
  $('a').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

       	//Change selected state of current menu
       	$('.brandNav--nav li').removeClass('selected');
    	$(this).closest('li').addClass('selected');

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


  //Image tile hover effects
 $('.brandTile').hover(function() {
 		$(this).find('img').addClass('enlarge');
 		}, function(){
 		$(this).find('img').removeClass('enlarge');
 		});

});