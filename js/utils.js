$( document ).ready(function() {


// Navigation Selected menu hightlighted

      var loc = window.location.href; // returns the full URL

      if(/about/.test(loc)) {
        
        $('#about').addClass('active');
      }

      if(/services/.test(loc)) {
        
        $('#services').addClass('active');
      }

      if(/data-management-planning/.test(loc)) {
        
        $('#data-management-planning').addClass('active');
      }

      if(/best-practices/.test(loc)) {
        
        $('#best-practices').addClass('active');
      }

});

