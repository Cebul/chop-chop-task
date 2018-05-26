$(document).ready(function() {

  $("#myTopnav").click(function() {
    if(this.className === "topnav") {
      this.className += " responsive";
    } else {
      this.className = "topnav";
    }
  });

  $("#main-button").click(function() {
    $('p:contains("ipsum")').each(function() {
      $(this).html($(this).html().replace("ipsum", "<span style=color:red>ipsum</span>"));
      // $(this).html($(this).html().replace("<span style=color:red>ipsum</span>", "ipsum"));
    });
  });

  $("#read-more-btn-1").click(function() {

    const val = $(this).text();

    if(val == "\u2014 read more") {
      $("#toggle-text-1").css("display", "block");
      $(this).text("\u2014 less");
    } else {
      $("#toggle-text-1").css("display", "none");
      $(this).text("\u2014 read more");
    }

  });

  $("#read-more-btn-2").click(function() {

    const val = $(this).text();

    if(val == "\u2014 read more") {
      $("#toggle-text-2").css("display", "block");
      $(this).text("\u2014 less");
    } else {
      $("#toggle-text-2").css("display", "none");
      $(this).text("\u2014 read more");
    }

  });

  $("#read-more-btn-3").click(function() {

    const val = $(this).text();

    if(val == "\u2014 read more") {
      $("#toggle-text-3").css("display", "block");
      $(this).text("\u2014 less");
    } else {
      $("#toggle-text-3").css("display", "none");
      $(this).text("\u2014 read more");
    }

  });

// animate back to top
  $('#back-top-btn').click(function() {
    $('html,body').animate({scrollTop: 0}, "slow");
    return false;
  });

  $('#products-nav').click(function() {
    $('#products').scrollIntoView({
      behavior: 'smooth'
    });
  });
});
