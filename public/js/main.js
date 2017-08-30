// Option form ocultar y mostrar
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

// Dias del evento
$(document).ready(function(){
    $(".sg").click(function(){
        $(".dyp").collapse('hide');
        $(".dsg").collapse('show');
    });
    $(".yp").click(function(){
        $(".dsg").collapse('hide');
        $(".dyp").collapse('show');
    });
});

// Timeline Días San Gil
$(document).ready(function(){
    $(".d1-sg").click(function(){
        $(".dia2-sg").collapse('hide');
        $(".dia3-sg").collapse('hide');
        $(".dia4-sg").collapse('hide');
        $(".dia1-sg").collapse('show');
    });
    $(".d2-sg").click(function(){
        $(".dia1-sg").collapse('hide');
        $(".dia3-sg").collapse('hide');
        $(".dia4-sg").collapse('hide');
        $(".dia2-sg").collapse('show');
    });
    $(".d3-sg").click(function(){
        $(".dia1-sg").collapse('hide');
        $(".dia2-sg").collapse('hide');
        $(".dia4-sg").collapse('hide');
        $(".dia3-sg").collapse('show');
    });
    $(".d4-sg").click(function(){
        $(".dia1-sg").collapse('hide');
        $(".dia2-sg").collapse('hide');
        $(".dia3-sg").collapse('hide');
        $(".dia4-sg").collapse('show');
    });
});