@extends('layouts.app')

@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="form-widget">

                <div class="form-result"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <form class="row" action="{{route('perfil.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-process"></div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-md-12 form-group" style="text-align: center;">
                                        <img src="{{url('images/userPicture.png')}}" alt="Truequeme" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Subir imagen:</label>
                                        <input type="file" id="jobs-application-resume" name="jobs-application-resume"
                                            class="file-loading required" data-show-preview="false" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Nombres:</label>
                                        <input type="text" name="jobs-application-name" id="jobs-application-name"
                                            class="form-control required" value="" placeholder="Nombres">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Primer Apellido:</label>
                                        <input type="text" name="jobs-application-name" id="jobs-application-name"
                                            class="form-control required" value="" placeholder="Primer apellido">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Segundo Apellido:</label>
                                        <input type="text" name="jobs-application-name" id="jobs-application-name"
                                            class="form-control required" value="" placeholder="Segundo apellido">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Email:</label>
                                        <input type="email" name="jobs-application-email" id="jobs-application-email"
                                            class="form-control required" value="" placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Whats:</label>
                                        <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                                            class="form-control required" value="" placeholder="Teléfono Whatsapp">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Teléfono:</label>
                                        <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                                            class="form-control required" value="" placeholder="Teléfono fijo">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Celular:</label>
                                        <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                                            class="form-control required" value="" placeholder="Teléfono celular">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Nombre de la empresa:</label>
                                        <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                                            class="form-control required" value="" placeholder="Nombre de la empresa">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Razón Social:</label>
                                        <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                                            class="form-control required" value="" placeholder="Razón Social">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>RFC:</label>
                                        <input type="text" name="jobs-application-location"
                                            id="jobs-application-location" class="form-control" value=""
                                            placeholder="RFC">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Ubicación:</label>
                                        <input type="text" name="jobs-application-location"
                                            id="jobs-application-location" class="form-control" value=""
                                            placeholder="C.P.">
                                    </div>
                                    <div class="col-md-6" style="text-align: right; padding-top: 35px;">
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
            </div>
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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <textarea name="textarea" rows="10" cols="50"
                    class="form-control">Escribe las áreas en las que te especializas</textarea>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade" id="modal-area"
    style="max-width:600px;margin-right:auto;margin-left:auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- CABECERA -->
                <h4 class="text-center modal-title">Areas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <textarea name="textarea" rows="10" cols="50"
                    class="form-control">Escribe las áreas que abarcan tus servicios</textarea>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <div class="col-md-12 form-group">
                    <label>Nombre:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Nombre de la certificación">
                </div>
                <div class="col-md-12 form-group">
                    <label>Institución:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Nombre de la entidad emisora">
                </div>
                <div class="col-md-12 form-group">
                    <label>Fecha:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Fecha de expedición">
                </div>
                <div class="col-md-12 form-group">
                    <label>Duración:</label>
                    <input type="email" name="jobs-application-email" id="jobs-application-email"
                        class="form-control required" value="" placeholder="Validez del certificado">
                </div>
                <div class="col-md-12 form-group">
                    <label>País:</label>
                    <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                        class="form-control required" value="" placeholder="País donde se emitió">
                </div>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>


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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <div class="col-md-12 form-group">
                    <label>Nombre:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Nombre del servicio o producto">
                </div>
                <div class="col-md-12 form-group">
                    <label>Características:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Características">
                </div>
                <div class="col-md-12 form-group">
                    <label>Costo:</label>
                    <input type="text" name="jobs-application-name" id="jobs-application-name"
                        class="form-control required" value="" placeholder="Costo del servicio">
                </div>
                <div class="col-md-12 form-group">
                    <label>Se puede entregar el servicio en:</label>
                    <input type="email" name="jobs-application-email" id="jobs-application-email"
                        class="form-control required" value="" placeholder="Lugar donde se puede entregar">
                </div>
                <div class="col-md-12 form-group">
                    <label>Categoría:</label>
                    <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                        class="form-control required" value="" placeholder="Categoría">
                </div>
                <div class="col-md-12 form-group">
                    <label>Garantía:</label>
                    <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                        <label class="btn btn-outline-secondary ls0 nott">
                            <input type="radio" name="jobs-application-gender" id="jobs-application-gender-male"
                                autocomplete="off" value="Si"> Si
                        </label>
                        <label class="btn btn-outline-secondary ls0 nott">
                            <input type="radio" name="jobs-application-gender" id="jobs-application-gender-female"
                                autocomplete="off" value="No"> No
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <input type="text" name="jobs-application-phone" id="jobs-application-phone"
                    class="form-control required" value="" placeholder="Introduzca el giro del negocio">
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <textarea name="textarea" rows="10" cols="50"
                    class="form-control">Escribe una lista de tus principales clientes</textarea>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
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
            <div class="modal-body">
                <!-- CUERPO DEL MENSAJE -->
                <textarea name="textarea" rows="10" cols="50"
                    class="form-control">Ingresa las zonas en las que brindas tus servicios</textarea>
            </div>
            <div class="modal-footer">
                <!-- PIE -->
                <button class="btn btn-default btn btn-primary btn-lg" type="button"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>


@endsection