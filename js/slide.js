$(document).ready(function(){
  let interval = 3000;
  $('.slide').each(function(){
    let content = $(this);

    function change() {
      let img = content.children('.slide img');
      let first = img.eq(0);
      let second = img.eq(1);
      let third = img.eq(2);
      first.appendTo(content).fadeOut('slow');
      second.fadeIn();

    }
    setInterval(change, interval);
  });
});
