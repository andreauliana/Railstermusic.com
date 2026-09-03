jQuery(document).ready(function($) {
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 300, function() {
        window.location.hash = hash;
      });
    } // End if
  });
});




jQuery(function($){
    
  $('.sidenav').sidenav();

    
    $('body').css({
        overflow: 'visible'
    });


    $('#nextButton').click(function() {
        $('.carousel').carousel('next');
    });
    $('#prevButton').click(function() {
        $('.carousel').carousel('prev');
    }); 
    $('.nextButton').click(function() {
        $('.carousel').carousel('next');
    });
    $('.prevButton').click(function() {
        $('.carousel').carousel('prev');
    }); 
    $('.dropdown-trigger').dropdown();
    
});
