@extends('layouts.appnew')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- Nombre -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Apellidos -->
                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Tipo de documentacion-->
                        <div class="form-group">
                            <label for="tipo_id" class="col-md-4 control-label">Tipo de documento</label>
                            <div class="col-md-6">
                                <select name="tipo_id" id="tipo_id" class="form-control">
                                    <option>T.I</option>
                                    <option>C.C</option>
                                    <option>C.E</option>
                                    <option>Pasaporte</option>
                                </select>
                            </div>
                        </div>

                        <!-- Doc Identificacion -->
                        <div class="form-group{{ $errors->has('doc_id') ? ' has-error' : '' }}">
                            <label for="doc_id" class="col-md-4 control-label">Número de documento</label>

                            <div class="col-md-6">
                                <input id="doc_id" type="text" class="form-control" name="doc_id" value="{{ old('doc_id') }}" required>

                                @if ($errors->has('doc_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('doc_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Ciudad -->
                        <div class="form-group">
                            <label for="ciudad" class="col-md-4 control-label">Ciudad del evento</label>
                            <div class="col-md-6">
                                <select name="ciudad" id="ciudad" class="form-control">
                                    <option>San Gil</option>
                                    <option>Yopal</option>
                                </select>
                            </div>
                        </div>

                        <!-- Estado Cuenta -->
                        <fieldset disabled>
                            <div class="form-group{{ $errors->has('estado_cuenta') ? ' has-error' : '' }}">
                            <label for="estado_cuenta" class="col-md-4 control-label">Estado de la cuenta</label>

                            <div class="col-md-6">
                                <input id="estado_cuenta" type="text" class="form-control" name="estado_cuenta" value="{{ old('estado_cuenta') }}" placeholder="Pre-inscrito">

                                @if ($errors->has('estado_cuenta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </fieldset>

                        <!-- Ocupación -->
                        <div class="form-group">
                            <label for="cod_ocupacion" class="col-md-4 control-label">Ocupación</label>
                            <div class="col-md-6">
                                <select name="cod_ocupacion" id="cod_ocupacion" class="form-control" required>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Docente">Docente</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Egresado">Egresado</option>
                                    <option value="Externo">Externo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Mostrar opciones ocupacion -->
                        <!-- Universiad -->
                        <div class="form-group{{ $errors->has('universidad') ? ' has-error' : '' }} myform" id="op1">
                            <label for="universidad" class="col-md-4 control-label">Universidad</label>

                            <div class="col-md-6">
                                <input id="universidad" type="text" class="form-control" name="universidad" value="{{ old('universidad') }}" id="input_op1">

                                @if ($errors->has('universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Programa -->
                        <div class="form-group{{ $errors->has('programa') ? ' has-error' : '' }} myform" id="op2">
                            <label for="programa" class="col-md-4 control-label">Programa</label>

                            <div class="col-md-6">
                                <input id="programa" type="text" class="form-control" name="programa" value="{{ old('programa') }}" placeholder="Ingenieria de ..." id="input_op2">

                                @if ($errors->has('programa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('programa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Semestre -->
                        <div class="form-group myform" id="op3">
                            <label for="semestre" class="col-md-4 control-label">Semestre</label>
                            <div class="col-md-6">
                                <select name="semestre" id="semestre" class="form-control">
                                    <option value="">- Seleccione una opción -</option>
                                    <option>Primero</option>
                                    <option>Segundo</option>
                                    <option>Tercero</option>
                                    <option>Cuarto</option>
                                    <option>Quinto</option>
                                    <option>Sexto</option>
                                    <option>Séptimo</option>
                                    <option>Octavo</option>
                                    <option>Noveno</option>
                                    <option>Décimo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Telefono -->
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="phone" class="form-control" name="telefono" value="{{ old('telefono') }}" required>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Correo -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Contraseña -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Confirmar contraseña -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
