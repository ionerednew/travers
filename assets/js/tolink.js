  $(document).ready(function() {
    $("a.links").click(function () { 
      var elementClick = $(this).attr("href");
      var destination = $(elementClick).offset().top;
      $('html,body').animate( { scrollTop: destination }, 700 );
      return false;
    });
  });