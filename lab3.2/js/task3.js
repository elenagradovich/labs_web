$(document).ready(function(){
  //task3-1
  $("#el1").draggable();
	$("#el1").resizable();
	
	//task3-1
  $("#sort1").sortable({placeholder:"placeh ui-state-highlight"});

  //task3-3

  $("#el2").draggable();
  $("#el3").draggable();

  $("#drop2").droppable({
    accept:"#el3",
    over:function(){
      $("#el3").addClass("over-el3");
      $("#drop2").addClass("over-drop2");
    },
    out:function(){
      $("#el3").removeClass("over-el3");
      $("#drop2").removeClass("over-drop2");
    },
    drop:function(){
      $("#el3").css("display","none");
      $("#drop2").css("background-color","yellowgreen");
    }
  });

	$("#drop1").droppable({
		accept:"#el3, #el2",
		over:function(){
			$("#drop1").addClass("over-drop1");
		},
		out:function(){
			$("#drop1").removeClass("over-drop1");
		},
		drop:function(){
			$("#drop1").addClass("over-drop1");
		}
	});
});