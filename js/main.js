$(document).ready(function() {
  $('.btn-success').click(function() {
    $(this).parent().next().slideDown(300);
  });
});