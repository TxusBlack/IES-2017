@extends('layouts.apphome')

@section('content')
<div class="container margin-container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <img class="img-responsive" src="/img/qr-blocked.png" alt="Código de acceso bloqueado" width="auto" height="100%" style="margin-bottom: 20px;">
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <strong>¡Qué bien {{ Auth::user()->name }}, estás a un sólo paso de desbloquear tu entrada para el IES!</strong>
                    </h4>
                </div>

                <div class="panel-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>Sólo te queda consignar el valor de <strong>{{ Auth::user()->pago_monto }}</strong> en las cuentas bancarias:</p>
                    </div>
        
                    @if (Auth::user()->ciudad="San Gil")
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <img src="http://ies.unisangil.edu.co/img/bancos/jpg/Logo_Bancolombia.jpg" alt="Bancolombia" width="200px" height="100%">
                            <p>
                                <strong>Cuenta de ahorros:<br>322-0564762-6</strong>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <img src="http://ies.unisangil.edu.co/img/bancos/jpg/logo-bancopopular.jpg" alt="Banco Popular" width="200px" height="100%">
                            <p>
                                <strong>Cuenta de ahorros:<br>22052010585-9</strong>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <img src="http://ies.unisangil.edu.co/img/bancos/jpg/banco-caja-social.jpg" alt="Banco Caja Social" width="200px" height="100%">
                            <p>
                                <strong>Cuenta de ahorros:<br>26503786449</strong>
                            </p>
                        </div>
                        <div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-6 col-xs-12">
                            <img src="http://ies.unisangil.edu.co/img/bancos/jpg/logo-banco-pichincha.jpg" alt="Banco Pichincha" width="200px" height="100%">
                            <p>
                                <strong>Cuenta de ahorros:<br>410220805</strong>
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <img src="http://ies.unisangil.edu.co/img/bancos/jpg/Davivienda-Logo.jpg" alt="Davivienda" width="250px" height="100%">
                            <p>
                                <strong>Cuenta de ahorros:<br>355-04081-2</strong>
                            </p>
                        </div>
                    @else
                        <div class="col-md-4">
                            <img src="/img/bancos/banco-caja-social.jpg" alt="Banco Caja Social" width="200px" height="100%">
                            <strong>Cuenta de ahorros:<br>24507618193</strong>
                        </div>
                    @endif

                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;">
                        <p>Una vez realizado el pago no olvides dejar tu recibo de consignación en la Tesorería de UNISANGIL para <strong>validar y generar tu código QR.</strong></p>
                        
                        Recuerda que deberás presentar tu código QR al ingresar y salir del evento, recomendamos imprimir el código por si tu celular se descarga o se apaga.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
