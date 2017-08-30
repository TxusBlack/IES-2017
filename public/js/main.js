$('#cod_ocupacion').change(function(){
    var valorCambiado =$(this).val();
    if(valorCambiado == 'Estudiante'){
       $('#op1').css('display','block');
       $('#op2').css('display','block');
       $('#op3').css('display','block');
    }
    else if(valorCambiado == 'Docente')
    {
       $('#op1').css('display','block');
       $('#op2').css('display','block');
       $('#op3').css('display','none');
    }
    else if(valorCambiado == 'Administrativo')
    {
       $('#op1').css('display','block');
       $('#op2').css('display','none');
       $('#op3').css('display','none');
    }
    else if(valorCambiado == 'Egresado')
    {
       $('#op1').css('display','block');
       $('#op2').css('display','block');
       $('#op3').css('display','none');
    }
    else if(valorCambiado == 'Externo')
    {
       $('#op1').css('display','none');
       $('#op2').css('display','none');
       $('#op3').css('display','none');
    }
});

$(document).ready(function(){
	$('#cod_ocupacion_1').on('change', function(){
		var selectValor = $(this).val();
		alert(selectValor);
	});
});