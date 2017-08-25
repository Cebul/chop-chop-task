$(document).ready(function() {

  $("#myTopnav").click(function() {
    if(this.className === "topnav") {
      this.className += " responsive";
    } else {
      this.className = "topnav";
    }
  });

  $("#read-more-btn-1").click(function() {

    var val = $(this).text();

    if(val == "- read more") {
      $("#toggle-text-1").css("height", "auto");
      $(this).text("less");
    } else {
      $("#toggle-text-1").css("height", "100px");
      $(this).text("- read more");
    }

  });

  $("#read-more-btn-2").click(function() {

    var val = $(this).text();

    if(val == "- read more") {
      $("#toggle-text-2").css("height", "auto");
      $(this).text("less");
    } else {
      $("#toggle-text-2").css("height", "100px");
      $(this).text("- read more");
    }

  });

  $("#read-more-btn-3").click(function() {

    var val = $(this).text();

    if(val == "- read more") {
      $("#toggle-text-3").css("height", "auto");
      $(this).text("less");
    } else {
      $("#toggle-text-3").css("height", "100px");
      $(this).text("- read more");
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
