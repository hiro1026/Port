/*var content1 = document.getElementsByClassName('current');

var content2 = document.getElementsByClassName('current2');

var content3 = document.getElementsByClassName('current3');



var contents = [content2, content3];
var count = 0;

var changeImage = function(num) {
  if(count + num >= 0 && count + num < contents.length) {
    count = count + num;
    document.getElementById('main_image').src = contents[count];
  }
};

  document.getElementsByClassName('prev').onclick = function(){
    changeImage(-1);
  };
  document.getElementsByClassName('next').onclick = function(){
    changeImage(1);
  }
*/
/*$(document).ready(function(){
  function changeImage($click) {
    var $current = $click.siblings('.c/*ontainer').children('.current');
    var $new;
    var findSelector = '';

    if($click.hasClass('next')) {
      $new = $current.next();
      findSelector = ':first-child';
    } else {
      $new = $current.prev();
      findSelector = ':last-child';
    }

    if($new.length == 0) {
      $new = $current.siblings(findSelector);
    }
    $current.removeClass('current');
    $new.addClass('current');
  }
  $('.scroll a').on('click', function(event){
    event.preventDefault();
    changeImage($(this));
  });
});*/
$(document).ready(function(){
  $('.next').on('click', function(event){
    event.preventDefault()
    $('.current').fadeOut('slow');
    $('.current2').fadeIn('slow');
    $('.current3').fadeIn('slow');
  })
  $('.prev').on('click', function(event) {
    event.preventDefault();
    $('.current2').fadeOut('slow');
    $('.current3').fadeOut('slow');
    $('.current').fadeIn('slow');
  });
});
