jQuery(document).ready(function(){

	var sticky = new Waypoint.Sticky({
			element: jQuery('.brandNav')[0]
			})
			var waypoints = jQuery('#way1').waypoint({
			handler: function(direction) {
			jQuery('.brandNav').toggleClass('unstuck');

			}, offset:'450px'

	})

	// Change selected state of nav and hash based on scrolling position
	jQuery('.section').waypoint(function(event){
  		 	jQuery('.brandNav--nav li').removeClass('selected');
  		 	var currSection = this.element.id ;
    		jQuery('.brandNav--nav a[href$="#'+currSection+'"]').closest('li').addClass('selected');
  	 		
  	 		var hash = currSection;
  	 		 if (this.hash !== "") {
  	 		 	window.location.hash = hash;
  	 		 }//end if
 			 });


  // Add smooth scrolling to all links
  jQuery('a').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

       	//Change selected state of current menu
       	jQuery('.brandNav--nav li').removeClass('selected');
    	jQuery(this).closest('li').addClass('selected');

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


  //Image tile hover effects
 jQuery('.brandTile').hover(function() {
 		jQuery(this).find('img').addClass('enlarge');
 		}, function(){
 		jQuery(this).find('img').removeClass('enlarge');
 		});

});