$(document).ready(function(){

  // $(window).resize(function(){
  //   var windowHeight = $(window).height();
  //   $('.js-column-container').css('height', windowHeight);
  // });

  $('#js-category').masonry({
    columnWidth: 355,
    itemSelector: '.post',
    gutter: 50
  });

});