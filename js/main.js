$(function () {
  $('input[type="search"]').on('focus', function() {
    $(this).animate({width: 500}, 'slow');
  })
  $('input[type="search"]').on('blur', function() {
    $(this).animate({width: 290}, 'slow');
  })
})
