$(document).ready(function () {

  $('#slides').superslides({
    animation: 'fade',
    animation_speed: 2000,
    play: 3000,
    pagination: false

  });

  var typed = new Typed(".typed", {
    strings: ["Welcome To My Site.", "Thank You For Watching."],
    typeSpeed: 70,
    loop: true,
    startDelay: 1000,
    showCursor: false
  });

});





$(function () {

  gridContainer = $('#shuffleContainer');
  var sizer = gridContainer.find('.col-md-3');

  gridContainer.shuffle({
    sizer: sizer,
    speed: 500,
    easing: 'ease-out',
    useTransforms: true
  });

  $('#btnAll').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return true;
    });
  });

  $('#btnWeb').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return $el.data('group') == 'web';
    });
  });

  $('#btnLogo').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return $el.data('group') == 'logo';
    });
  });

  $('#btnBanner').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return $el.data('group') == 'banner';
    });
  });

  $('#btnOther').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return $el.data('group') == 'other';
    });
  });

  $('#btnTransportation').on('click', function () {
    gridContainer.shuffle('shuffle', function ($el, shuffle) {
      return $el.data('group') == 'transportation';
    });
  });
});
