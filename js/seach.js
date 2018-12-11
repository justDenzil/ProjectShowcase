$('.btn-search').click(function(){
  $('.searchbar').toggleClass('clicked');
  $('.stage').toggleClass('faded');

  
  if($('.searchbar').hasClass('clicked')){
    $('.btn-extended').focus();
  }
  
});