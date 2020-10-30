$(document).ready(function(){
  //task3-1
  $("input#but1").click(
    function(){
      $("#par1").hide();
    }
  );
  $("input#but2").click(
    function(){
      $("#par1").show();
    }
  );

  //task3-2
  $("#par2").mouseover(
    function(){
      $(this).fadeTo(3000,0.2);
    }
  );
  $("#par2").mouseout(
    function(){
      $(this).fadeTo(300,1);
    }
  );

  //task2-3
  $("#but3").click(function () {
    $("#wrap1").slideUp(7000);
  });
  $("#but4").click(function () {
    $("#wrap1").slideDown(5000);
  });

  //task2-4
  $("#but5").click(function(){
    $("#redsquare").animate({top:10,left:200},2000);
    $("#redsquare").animate({top:100,left:400},2000);
    $("#redsquare").animate({top:300,left:500},2000);
    $("#redsquare").animate({top:300,left:200},2000);
    $("#redsquare").animate({top:100,left:50},2000);
 });
});