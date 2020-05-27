$(document).ready(function(){
  $('input[type="text"]').on('touchstart', function(){
    $(this).css('background', '#FFFFCC');
  })
  .on('touchend', function(){
    $(this).css('background', 'transparent');
  })
  $('.kenmei select').on('touchstart', function(){
    $(this).css('background', '#FFFFCC');
  })
  .on('touchend', function(){
    $(this).css('background', 'transparent');
  });
  $('textarea').on('touchstart', function(){
    $(this).css('background', '#FFFFCC');
  })
  .on('touchend', function(){
    $(this).css('background', 'transparent');
  });
  $(function(){
    $('input[type="text"]').on('click',function(){
      $(this).css('background','#FFFFCC');
    })
    .on('blur', function(){
      $(this).css('background','transparent');
    });
  });
  $(function(){
    $('.kenmei select').on('click', function(){
      $(this).css('background', '#FFFFCC');
    })
    .on('blur', function(){
      $(this).css('background','transparent');
    });
  });
  $(function(){
    $('textarea').on('click', function(){
      $(this).css('background','#FFFFCC');
    })
    .on('blur', function(){
      $(this).css('background','transparent');
    });
  });
})
