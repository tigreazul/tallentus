
$(document).ready(function() {

	$("#table_check tbody tr td input").click(function(){
		var id_check = $(this).attr('id');
		var separa_check = id_check.split('_');
		var id_pagina = separa_check[1],
			permiso_pagina = separa_check[2],
			valor = $(this).attr('value'),
			id_rol = $("#idrol").val();
		
		console.log(valor);
		$.ajax({
            url: $("#url_mod").text(),
            type: "POST",
            data: "id_pagina="+id_pagina+"&permiso="+permiso_pagina+"&id_rol="+id_rol+"&valor="+valor,
            success: function(datos){
            	if(datos.resultado == 1){
                	$("#"+id_check).val(0);
                	boton_flotante('Actualización','Correctamente');
            	}else if(datos.resultado == 3){    
                    boton_flotante('Actualización','NO TIENE PERMISO');
                }
            }
        });
		// console.log(separa_check[2]);
	});

	var title_des,descrp;

	function boton_flotante(titulo,contenido){
		title_des = titulo;
		descrp = contenido; 
        $('.notification').trigger('click');
	}

		var Stacks = {
                stack_bottom_right: {
                    "dir1": "left",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                }
            }
    $('.notification').on('click',function(e) {
		// alert('ss');
        var noteStyle = $(this).data('note-style');
        var noteShadow = $(this).data('note-shadow');
        var noteOpacity = $(this).data('note-opacity');
        var noteStack = $(this).data('note-stack');
        var width = "290px";

        var noteStack = noteStack ? noteStack : "stack_top_right";
        var noteOpacity = noteOpacity ? noteOpacity : "1";

        function findWidth() {
            if (noteStack == "stack_bar_top") {
                return "100%";
            }
            if (noteStack == "stack_bar_bottom") {
                return "70%";
            } else {
                return "290px";
            }
        }

        new PNotify({
            title: title_des,
            text: descrp,
            shadow: noteShadow,
            opacity: noteOpacity,
            addclass: noteStack,
            type: noteStyle,
            stack: Stacks[noteStack],
            width: findWidth(),
            delay: 1400
        });

    });


});
