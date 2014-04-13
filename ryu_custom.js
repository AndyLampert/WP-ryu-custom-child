// Set the $ to = jQuery
(function($){
  $(document).ready(function(){
    var navOffset = $('#site-navigation').position().top;
    $(document).scroll(function(event){ 
      var scrollTop = $(document).scrollTop();
      var navHeight = $('#site-navigation').outerHeight();
      // console.log('scroll: ', scrollTop);
      // console.log('nav: ', navOffset);
      // console.log('navheight:', navHeight);
      // console.log(scrollTop + navOffset + navHeight);

      // When the user scrolls to 260, apply CSS to stick the nav to the top
      // currently set to a specific value. 
      if(scrollTop >= 332) {
        $('#site-navigation').css({
          "position": "fixed",
          "top": "0",
          "width": "100%"
        });
          // adds padding-top to the primary content id container to offset the nav height (to cancel jumpy movement)
          // navHeight defaults to a number, add "px" to make it a readable value
          $('#primary').css("padding-top", navHeight + "px");
        }
        else {
          // when you scroll back above, put it back in place
          $('#site-navigation').css("position", "static");
          // AND 
          $('#primary').css("padding-top", 0);
        }
      });    
  });
})(jQuery);

