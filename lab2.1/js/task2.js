$(document).ready(function(){
  //task2-1
  $("input#but1").click(
    function(){
      $("p#par1").addClass("style_1");
    }
  );
  $("input#but1").dblclick(
    function(){
      $("p#par1").removeClass("style_1");
    }
  );
  //task2-2
  $("a#href1").mouseover(function(){
    $(this).addClass("style_2");
  });
  $("a#href1").mouseout(function(){
    $(this).removeClass("style_2");
  });

  //task2-3
  $("#code>#text1").select(function () {
    $("#text1").addClass("style_3");
  });

  //task2-4
  $("#but2").toggle(
    function(){ 
      $("#par2").css("font-family","Times New Roman");
      $("#par2").css("color","red");
      $("#par2").css("font-size","20px");
    },
    function(){
      $("#par2").css("font-family","Arial");
      $("#par2").css("color","blue");
      $("#par2").css("font-size","30px");
    },
    function(){
      $("#par2").css("font-family","Verdana");
      $("#par2").css("font-weight","bold");
      $("#par2").css("border","1px solid black");
    },
    function(){
      $("#par2").css("font-family","Times New Roman");
      $("#par2").css("color","black");
      $("#par2").css("font-size","1em");
      $("#par2").css("font-weight","normal");
      $("#par2").css("border","none");
    }
  );
});  