$(document).ready(function(){
  //task5-1
  const getColors = (...elements) => {
    let colors = [];
    for (el of elements) {
      colors.push($(el).css("color"));
    }
    return colors.join(', ');
  }

  $("#but1").click(
    function(){
      alert(getColors('#par1', '#par2', '#par3'));
    }
  ); 
  
  //task5-2
  $("#but2").click(
    function(){
      $('#par4').addClass('par4');
      $('#par5').addClass('par5');
      $('#par6').addClass('par6');
      $('#par7').addClass('par7');
    }
  ); 
});