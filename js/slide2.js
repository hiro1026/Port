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
