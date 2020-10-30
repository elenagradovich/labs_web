$(document).ready(function(){
  //task3-1
  $("#but1").click(
    function () {
      $("#par1").load("../files/autumn.txt");
    }
  );
  $("#but2").click(
    function () {
      $("#par1").load("../files/winter.txt");
    }
  );
  $("#but3").click(
    function () {
      $("#par1").load("../files/summer.txt");
    }
  );
  $("#but4").click(
    function () {
      $("#par1").load("../files/spring.txt");
    }
  );
});