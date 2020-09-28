$(document).ready(function(){
  //task4-1
  $("#but1").click(
    function(){
      const innerPart1 = $("#par1").html();
      $("#par2").html(innerPart1);
    }
  );

  //task4-2
  $("#but2").one("click",
    function(){
      $("#par3").append(`<b>HTML</b>`);
      $("#par4").prepend(`<b>CSS</b>`);
      $("#par5").prepend(`<b>JS</b>`);
      $("#par6").prepend(`<b>JQuery</b>`);
    }
  );

  //task4-3
  $("#but3").one( "click",
    function(){
      const inner1 = $("#href1").attr("href");
      $(`<p>${inner1}</p>`).insertBefore("#href1");

      const inner2 = $("#par7").attr("class");
      $(`<p>${inner2}</p>`).insertAfter("#but3");
      $('<span>KEY</span>').insertAfter($("[type='text']"));
    }
  );

  //task4-4
  $("#but4").click(
    function(){
      $("#par8").addClass("style8");
      $("#par9").addClass("style9");
      $("#par10").addClass("style10");
      $("#par11").addClass("style11");
    }
  );
});