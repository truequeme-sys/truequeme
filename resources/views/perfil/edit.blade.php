@extends('layouts.app')

@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            {{-- <div class="form-widget"> --}}

            <div class="form-result"></div>

            <div class="row">
                <div class="col-lg-12">
                    <form class="row" action="{{route('perfil.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-process"></div>
                        <div class="col-12 form-group">
                            <div class="row">
                                <div class="col-md-12 form-group" style="text-align: center;">
                                    <img src="{{ $user->foto ? asset($user->foto) : url('images/userPicture.png')}}"
                                        alt="Truequeme" width="200px" height="200px">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Subir imagen:</label>
                                    <input type="file" id="jobs-application-resume" name="foto"
                                        class="file-loading required" data-show-preview="false" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Nombres</label>
                                    <input type="text" name="name" id="jobs-application-name"
                                        class="form-control required" value="{{$user->name}}" placeholder="Nombres"
                                        maxlength="50" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Primer Apellido:</label>
                                    <input type="text" name="apellido_paterno" id="jobs-application-name"
                                        class="form-control required" value="{{$user->apellido_paterno}}"
                                        placeholder="Primer apellido" maxlength="50">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Segundo Apellido:</label>
                                    <input type="text" name="apellido_materno" id="jobs-application-name"
                                        class="form-control required" value="{{$user->apellido_materno}}"
                                        placeholder="Segundo apellido" maxlength="50">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="jobs-application-email"
                                        class="form-control required" value="{{$user->email}}"
                                        placeholder="Correo electrónico" maxlength="100" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Whats:</label>
                                    <input type="text" name="whatsapp" id="jobs-application-phone"
                                        class="form-control required" value="{{$user->celular}}"
                                        placeholder="Teléfono Whatsapp" maxlength="13">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Teléfono:</label>
                                    <input type="text" name="telefono" id="jobs-application-phone"
                                        class="form-control required" value="{{$user->telefono}}"
                                        placeholder="Teléfono fijo" maxlength="13">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Celular:</label>
                                    <input type="text" name="celular" id="jobs-application-phone"
                                        class="form-control required" value="{{$user->celular}}"
                                        placeholder="Teléfono celular">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>RFC:</label>
                                    <input type="text" name="rfc" id="jobs-application-location" class="form-control"
                                        value="{{ $user->rfc }}" placeholder="RFC" maxlength="13"
                                        pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Ubicación:</label>
                                    <input type="text" name="ubicacion" id="jobs-application-location"
                                        class="form-control" value="{{ $user->codigo_postal }}" placeholder="C.P."
                                        minlength="5" maxlength="5">
                                </div>
                                <div class="col-md-3" style="text-align: left; padding-top: 25px;">
                                    <a href="#" data-toggle="modal" data-target="#modal-empresas" class="button"
                                        style="width: 140px; background-color: #05cc7c;">+ Empresas</a>
                                </div>
                                <div class="col-md-3" style="text-align: right; padding-top: 35px;">
                                    <button type="submit" name="jobs-application-submit"
                                        class="btn btn-secondary">Guardar Perfil</button>
                                </div>
                            </div>
                            <div class="col-12 hidden">
                                <input type="text" id="jobs-application-botcheck" name="jobs-application-botcheck"
                                    value="" />
                            </div>
                            <input type="hidden" name="prefix" value="jobs-application-">
                        </div>



                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="text-align: center;">
                    <a href="#" data-toggle="modal" data-target="#modal-especialista" class="button"
                        style="width: 140px;">Especialidad</a>
                    <a href="#" data-toggle="modal" data-target="#modal-certificaciones" class="button"
                        style="width: 140px;">Certificados</a>
                    <a href="#" data-toggle="modal" data-target="#modal-servicios" class="button"
                        style="width: 140px;">Servicios</a>
                    <a href="#" data-toggle="modal" data-target="#modal-area" class="button"
                        style="width: 140px;">Áreas</a>
                    <a href="#" data-toggle="modal" data-target="#modal-giro" class="button"
                        style="width: 140px;">Giro</a>
                    <a href="#" data-toggle="modal" data-target="#modal-clientes" class="button"
                        style="width: 140px;">Clientes</a>
                    <a href="#" data-toggle="modal" data-target="#modal-zona" class="button"
                        style="width: 140px;">Zonas</a>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
    </div>

</section><!-- #content end -->

<section>

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="si-sticky d-lg-none d-xl-block">
                <a href="#" class="social-icon si-colored si-large si-rounded si-pen" data-animate="bounceInLeft">
                    <i class="icon-pen"></i>
                    <i class="icon-pen"></i>
                </a>
                <a href="#" class="social-icon si-colored si-large si-rounded si-search" data-animate="bounceInLeft"
                    data-delay="100">
                    <i class="icon-search"></i>
                    <i class="icon-search"></i>
                </a>
                <a href="#" class="social-icon si-colored si-large si-rounded si-briefcase" data-animate="bounceInLeft"
                    data-delay="200">
                    <i class="icon-briefcase"></i>
                    <i class="icon-briefcase"></i>
                </a>
                <a href="#" class="social-icon si-colored si-large si-rounded si-user-plus" data-animate="bounceInLeft"
                    data-delay="300">
                    <i class="icon-user-plus"></i>
                    <i class="icon-user-plus"></i>
                </a>

            </div>

        </div>

    </div>

</section>

<div id="gotoTop" class="icon-angle-up"></div>

<!-- Modal Window
	============================================= -->

<div role="dialog" tabindex="-1" class="modal fade" id="modal-especialista"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Especialista en</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{ route('especialidades.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <textarea name="descripcion" rows="10" cols="50"
                        class="form-control">{{ $user->especialidad()->first() ? $user->especialidad()->first()->descripcion : 'Escribe las áreas en las que te especializas' }}</textarea>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id="modal-area"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Áreas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('areas.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <textarea name="descripcion" rows="10" cols="50" class="form-control"
                        placeholder="Escribe las áreas que abarcan tus servicios">{{ $user->area ? $user->area->descripcion : '' }}</textarea>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div role="dialog" tabindex="-1" class="modal fade" id="modal-certificaciones"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Certificaciones</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('certificados.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <div class="col-md-12 form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="jobs-application-name" class="form-control required"
                            value="{{ $user->certificado()->first() ? $user->certificado->nombre : '' }}"
                            placeholder="Nombre de la certificación" maxlength="50" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Institución:</label>
                        <input type="text" name="institucion" id="jobs-application-name" class="form-control required"
                            value="{{ $user->certificado ? $user->certificado->institucion : '' }}"
                            placeholder="Nombre de la entidad emisora" maxlength="50" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Fecha de expedición:</label>
                        <input type="date" name="fecha_expedicion" id="jobs-application-name"
                            class="form-control required"
                            value="{{ $user->certificado ? $user->certificado->fecha_expedicion : '' }}"
                            placeholder="Fecha de expedición" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Fecha de expiración:</label>
                        <input type="date" name="fecha_expiracion" id="jobs-application-email"
                            class="form-control required"
                            value="{{ $user->certificado ? $user->certificado->fecha_expiracion : '' }}"
                            placeholder="Validez del certificado" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>País:</label>
                        <input type="text" name="pais" id="jobs-application-phone" class="form-control required"
                            value="{{ $user->certificado ? $user->certificado->pais : '' }}"
                            placeholder="País donde se emitió" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{--  --}}

<div role="dialog" tabindex="-1" class="modal fade" id="modal-empresas"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Empresas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->

                @foreach ($user->empresas as $empresa)
                <div class="col-md-12 form-group">
                    <p><b>{{$empresa->razon_social}}</b></p>

                    {{-- <a href="#" data-toggle="modal" data-target="#modal-empresas-editar" class="button"
                        style="width: 140px;">
                        <i class="icon-line2-pencil"></i>
                        <i class="icon-line2-pencil"></i>
                    </a> --}}

                    <a href="#" data-toggle="modal" data-target="#modal-empresas-editar-{{$empresa->id}}"
                        class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list botonEditarEmpresa"
                        empresa-id="{{$empresa->id}}" empresa-razon-social="{{$empresa->razon_social}}"
                        empresa-rfc="{{$empresa->rfc}}" empresa-direccion="{{$empresa->direccion}}">
                        <i class="icon-line2-pencil"></i>
                        <i class="icon-line2-pencil"></i>
                    </a>

                    <div role="dialog" tabindex="-1" class="modal fade" id="modal-empresas-editar-{{$empresa->id}}"
                        style="max-width:600px;margin-right:auto;margin-left:auto;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- CABECERA -->
                                    <h4 class="text-center modal-title">Editar empresa</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                </div>
                                <form action="{{route('empresas.update', ['empresa' => $empresa])}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <!-- CUERPO DEL MENSAJE -->
                                        <div class="col-md-12 form-group">
                                            <label>Razón social:</label>
                                            <input type="text" name="razon_social_empresa" id="jobs-application-name"
                                                class="form-control required inputRazonSocial" value="{{$empresa->razon_social}}"
                                                placeholder="Nombre de la certificación">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>RFC:</label>
                                            <input type="text" name="rfc_empresa" id="jobs-application-name"
                                                class="form-control required inputRFC" value="{{$empresa->rfc}}"
                                                placeholder="Nombre de la entidad emisora">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Dirección:</label>
                                            <input type="text" name="direccion_empresa" id="jobs-application-name"
                                                class="form-control required" value="{{$empresa->direccion}}"
                                                placeholder="Fecha de expedición">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Colonia:</label>
                                            <input type="text" name="colonia_empresa" id="jobs-application-email"
                                                class="form-control required" value="{{$empresa->colonia}}"
                                                placeholder="Validez del certificado">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Ciudad:</label>
                                            <input type="text" name="ciudad_empresa" id="jobs-application-phone"
                                                class="form-control required" value="{{$empresa->ciudad}}"
                                                placeholder="País donde se emitió">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Estado:</label>
                                            <input type="text" name="estado_empresa" id="jobs-application-phone"
                                                class="form-control required" value="{{$empresa->estado}}"
                                                placeholder="País donde se emitió">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>País:</label>
                                            <input type="text" name="pais_empresa" id="jobs-application-phone"
                                                class="form-control required" value="{{$empresa->pais}}"
                                                placeholder="País donde se emitió">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- PIE -->
                                        <button class="btn btn-default btn btn-primary btn-lg"
                                            type="submit">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action="{{route('empresas.delete', ['empresa' => $empresa])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
                            <i class="icon-line2-trash"></i>
                            <i class="icon-line2-trash"></i>
                        </button>
                    </form>


                </div>

                @endforeach

            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <a href="#" data-toggle="modal" data-target="#modal-empresas-agregar" class="button"
                    style="width: 140px;">+ Empresa</a>
            </div>
        </div>
    </div>
</div>



<div role="dialog" tabindex="-1" class="modal fade" id="modal-empresas-agregar"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Agregar empresa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('empresas.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <div class="col-md-12 form-group">
                        <label>Razón social:</label>
                        <input type="text" name="razon_social_empresa" id="jobs-application-name"
                            class="form-control required" value="" placeholder="Nombre de la certificación">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>RFC:</label>
                        <input type="text" name="rfc_empresa" id="jobs-application-name" class="form-control required"
                            value="" placeholder="Nombre de la entidad emisora">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Dirección:</label>
                        <input type="text" name="direccion_empresa" id="jobs-application-name"
                            class="form-control required" value="" placeholder="Fecha de expedición">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Colonia:</label>
                        <input type="text" name="colonia_empresa" id="jobs-application-email"
                            class="form-control required" value="" placeholder="Validez del certificado">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Ciudad:</label>
                        <input type="text" name="ciudad_empresa" id="jobs-application-phone"
                            class="form-control required" value="" placeholder="País donde se emitió">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Estado:</label>
                        <input type="text" name="estado_empresa" id="jobs-application-phone"
                            class="form-control required" value="" placeholder="País donde se emitió">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>País:</label>
                        <input type="text" name="pais_empresa" id="jobs-application-phone" class="form-control required"
                            value="" placeholder="País donde se emitió">
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  --}}

<div role="dialog" tabindex="-1" class="modal fade" id="modal-servicios"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Servicios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('servicios.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <div class="col-md-12 form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="jobs-application-name" class="form-control required"
                            value="{{ $user->servicio ? $user->servicio->nombre : '' }}"
                            placeholder="Nombre del servicio o producto" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Características:</label>
                        <input type="text" name="caracteristicas" id="jobs-application-name"
                            class="form-control required"
                            value="{{ $user->servicio ? $user->servicio->caracteristicas : '' }}"
                            placeholder="Características" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Costo:</label>
                        <input type="text" name="costo" id="jobs-application-name" class="form-control required"
                            value="{{ $user->servicio ? $user->servicio->costo : '' }}" placeholder="Costo del servicio"
                            required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Se puede entregar el servicio en:</label>
                        <input type="text" name="lugar_entrega" id="jobs-application-email"
                            class="form-control required"
                            value="{{ $user->servicio ? $user->servicio->lugar_entrega : '' }}"
                            placeholder="Lugar donde se puede entregar" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Categoría:</label>
                        <input type="text" name="categoria" id="jobs-application-phone" class="form-control required"
                            value="{{ $user->servicio ? $user->servicio->categoria : '' }}" placeholder="Categoría"
                            required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Garantía:</label>
                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                            <label class="btn btn-outline-secondary ls0 nott">
                                <input type="radio" name="tiene_garantia" id="jobs-application-gender-male"
                                    autocomplete="off" value="1"
                                    {{ $user->servicio ? $user->servicio->tiene_garantia == 1 ? 'checked' : '' : '' }}>
                                Si
                            </label>
                            <label class="btn btn-outline-secondary ls0 nott">
                                <input type="radio" name="jobs-application-gender" id="jobs-application-gender-female"
                                    autocomplete="off" value="0"
                                    {{ $user->servicio ? $user->servicio->tiene_garantia == 0 ? 'checked' : '' : '' }}>
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id="modal-giro"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Giro de la empresa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('giros.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <input type="text" name="nombre" id="jobs-application-phone" class="form-control required"
                        maxlength="50" value="{{$user->giro ? $user->giro->nombre : ''}}"
                        placeholder="Introduzca el giro del negocio" required>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id="modal-clientes"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Principales clientes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('user.clientes.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <textarea name="descripcion" rows="10" cols="50" class="form-control" required
                        placeholder="Escribe una lista de tus principales clientes">{{$user->clientes ? $user->clientes->descripcion : ''}}</textarea>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id="modal-zona"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Zona de trabajo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('zonas-trabajo.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- CUERPO DEL MENSAJE -->
                    <textarea name="descripcion" rows="10" cols="50" class="form-control" required
                        placeholder="Ingresa las zonas en las que brindas tus servicios">{{$user->zonasTrabajo ? $user->zonasTrabajo->descripcion : ''}}</textarea>
                </div>
                <div class="modal-footer">
                    <!-- PIE -->
                    <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).on('click', '.botonEditarEmpresa', function(){

        const razon_social = $(this).attr('empresa-razon-social')
        const rfc = $(this).attr('empresa-rfc')
        const direccion = $(this).attr('empresa-direccion')
        const colonia = $(this).attr('empresa-colonia')

        console.table({
            razon_social,
            rfc,
            direccion,
            colonia
        })

        $('.inputRazonSocial').val(razon_social)
        $('.inputRFC').val(rfc)

    });

</script>

@endsection