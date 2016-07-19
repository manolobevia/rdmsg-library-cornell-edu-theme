$( document ).ready(function() {


// Navigation Selected menu hightlighted

      var loc = window.location.href; // returns the full URL

      console.log ("location" + log);
      if(/who-we-are/.test(loc)) {
        $('#who-we-are').addClass('active');
      }

});

