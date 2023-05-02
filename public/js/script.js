$('.selectedLang').click(function(){
  $(this).parent().toggleClass('actLang');
})
$('.langDD a').click(function(){
  $('.langCol').removeClass('actLang');
})

// $(document).click(function(event) {
//     var clickedElement = event.target;
//     var containerElement = $('.langCol')[0];
//     if (clickedElement !== containerElement && !$.contains(containerElement, clickedElement)) {
//         $('.langCol').removeClass('actLang');
//     }
// });

$('.menuToggle').click(function(){
  $('html').toggleClass('activeMenu');
});
$('.menuBackdrop, .filterLinks a').click(function(){
  $('html').removeClass('activeMenu actFilter');
});

$('.filterTrigger').click(function(){
  $('html').toggleClass('actFilter');
})


$(".button").click(function() {
  $(this).toggleClass("animate");
  $(this).toggleClass("active");
});


$(document).ready(function(){

  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})


$('.accordionHeader').click(function(){
  $(this).parent().siblings().removeClass('actAccordion');
  $(this).parent('.accordionItem').find('.accordionBody').slideToggle();
  $(this).parent().toggleClass('actAccordion');
  $(this).parent('.accordionItem').siblings().find('.accordionBody').slideUp();
})
