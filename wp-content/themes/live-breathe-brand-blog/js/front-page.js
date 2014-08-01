$(document).ready(function(){
  $(".js-column-1-link").click(function(event) {
    event.preventDefault();
    $(".js-column-2-link, .js-column-3-link").removeClass("active");
    $(this).addClass("active");
    $("#js-column-1").removeClass("off-screen");
    $("#js-column-1").addClass("selected");
    $("#js-column-2, #js-column-3").removeClass("selected");
    $("#js-column-2, #js-column-3").addClass("off-screen");
  });

  $(".js-column-2-link").click(function(event) {
    event.preventDefault();
    $(".js-column-1-link, .js-column-3-link").removeClass("active");
    $(this).addClass("active");
    $("#js-column-2").removeClass("off-screen");
    $("#js-column-2").addClass("selected");
    $("#js-column-1, #js-column-3").removeClass("selected");
    $("#js-column-1, #js-column-3").addClass("off-screen");
  });

  $(".js-column-3-link").click(function(event) {
    event.preventDefault();
    $(".js-column-1-link, .js-column-2-link").removeClass("active");
    $(this).addClass("active");
    $("#js-column-3").removeClass("off-screen");
    $("#js-column-3").addClass("selected");
    $("#js-column-1, #js-column-2").removeClass("selected");
    $("#js-column-1, #js-column-2").addClass("off-screen");
  });
});
