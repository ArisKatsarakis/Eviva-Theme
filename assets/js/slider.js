// let prevButton = document.getElementById('prev');
//
// prevButton.onClick = function() {
//   console.log('testing previous button');
//   let active = document.querySelectorAll('.slider .list .item.active');
//   active.opacity = 0;
// }
//
//
var $j = jQuery.noConflict();
$j('#prev').on('click', function() {
  console.log('testing');

  $j('.slider .list .item').css('opacity', '1');
  $j('.slider .list .item.active').css('opacity', '0');
  //   let active = document.querySelectorAll('.slider .list .item.active');
  //   active.opacity = 0;
})
