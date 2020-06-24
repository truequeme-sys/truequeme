@extends('layouts.app')

@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 800px;">

                <div class="tab-container">

                    <div class="tab-content clearfix" id="tab-register">
                        <div class="card nobottommargin">
                            <div class="card-body" style="padding: 40px;">
                                <h3>Registrarme</h3>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="col_full col_last">
                                        <label for="register-form-username">Correo:</label>
                                        <input type="email" value="{{$invitacion->email}}" id="register-form-username"
                                            name="email" class="form-control" maxlength="100" required readonly />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-name">Nombre:</label>
                                        <input type="text" id="name" name="name" value="" class="form-control"
                                            maxlength="50" required />
                                    </div>

                                    <div class="col_full col_last">
                                        <label for="register-form-email">Primer Apellido:</label>
                                        <input type="text" id="register-form-email" name="apellido_paterno" value=""
                                            class="form-control" maxlength="50" required />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-username">Segundo Apellido:</label>
                                        <input type="text" id="register-form-username" name="apellido_materno" value=""
                                            class="form-control" maxlength="50" />
                                    </div>

                                    <div class="col_full col_last">
                                        <label for="register-form-repassword">RFC:</label>
                                        <input type="text" id="register-form-repassword" name="rfc" value=""
                                            pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$"
                                            class="form-control" required />
                                    </div>

                                    <div class="col_full col_last">
                                        <label for="register-form-phone">Contraseña:</label>
                                        <input type="password" id="register-form-phone" name="password" value=""
                                            class="form-control" required />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-password">Repetir Contraseña:</label>
                                        <input type="password" id="register-form-password" name="password_confirmation"
                                            value="" class="form-control" required />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button type="submit" class="button button-3d button-black nomargin"
                                            id="register-form-submit" name="register-form-submit"
                                            value="register">Registrarme</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </div>

</section><!-- #content end -->


@endsection