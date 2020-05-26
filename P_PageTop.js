$(document).ready(function(){
  $('#pageTop').on('click',function(){
    $('body,html').animate({scrollTop: 0},700);
    return false;
  })
})
