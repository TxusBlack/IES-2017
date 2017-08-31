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

        $(".dia2-yp").collapse('hide');
        $(".dia3-yp").collapse('hide');
        $(".dia4-yp").collapse('hide');
        $(".dia5-yp").collapse('hide');
        $(".dia1-yp").collapse('hide');
    });
    $(".yp").click(function(){
        $(".dsg").collapse('hide');
        $(".dyp").collapse('show');

        $(".dia2-sg").collapse('hide');
        $(".dia3-sg").collapse('hide');
        $(".dia4-sg").collapse('hide');
        $(".dia1-sg").collapse('hide');
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

// Timeline Días Yopal
$(document).ready(function(){
    $(".d1-yp").click(function(){
        $(".dia2-yp").collapse('hide');
        $(".dia3-yp").collapse('hide');
        $(".dia4-yp").collapse('hide');
        $(".dia5-yp").collapse('hide');
        $(".dia1-yp").collapse('show');
    });
    $(".d2-yp").click(function(){
        $(".dia1-yp").collapse('hide');
        $(".dia3-yp").collapse('hide');
        $(".dia4-yp").collapse('hide');
        $(".dia5-yp").collapse('hide');
        $(".dia2-yp").collapse('show');
    });
    $(".d3-yp").click(function(){
        $(".dia1-yp").collapse('hide');
        $(".dia2-yp").collapse('hide');
        $(".dia4-yp").collapse('hide');
        $(".dia5-yp").collapse('hide');
        $(".dia3-yp").collapse('show');
    });
    $(".d4-yp").click(function(){
        $(".dia1-yp").collapse('hide');
        $(".dia2-yp").collapse('hide');
        $(".dia3-yp").collapse('hide');
        $(".dia5-yp").collapse('hide');
        $(".dia4-yp").collapse('show');
    });
    $(".d5-yp").click(function(){
        $(".dia1-yp").collapse('hide');
        $(".dia2-yp").collapse('hide');
        $(".dia3-yp").collapse('hide');
        $(".dia4-yp").collapse('hide');
        $(".dia5-yp").collapse('show');
    });
});