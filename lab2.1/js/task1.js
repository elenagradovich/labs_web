$(document).ready(function(){
  //task1-1
  $("#pmtog")
    .css({
      "color": "green"
    });

  //task1-2
  $("p.pr1")
    .css({
      "color": "red"
    });

  //task1-3
  $("input[type='button']")
    .css({
      "background-color": "orange"
    });

  //task1-4
  $(".pmb1, .pmb2, .pmb3")
    .css({
      "color": "blue"
    });

  //task1-5
  $("#wrap1 .pmtobr")
    .css({
      "color": "brown"
    });

  //task1-6
  $("img:last-of-type")
    .css({
      "borderStyle":"solid"
    });

  //task1-7
  $("#iwrap>input[type='button'], #iwrap>input[type='submit']")
    .css({
      "background-color": "red"
    });
});  