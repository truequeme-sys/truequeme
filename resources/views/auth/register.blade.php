@extends('layouts.app')

@section('content')

<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 800px;">

    <div class="tab-container">

        <div class="tab-content clearfix" id="tab-register">
            <div class="card nobottommargin">
                <div class="card-body" style="padding: 40px;">
                    <h3>Registrarme</h3>

                    <form id="register-form" name="register-form" class="nobottommargin"
                        action="{{ route('register') }}" method="post">

                        @csrf

                        <div class="col_full col_last">
                            <label for="register-form-username">Correo:</label>
                            <input type="text" value="jard1209@gmail.com" disabled="disabled"
                                id="register-form-username" name="email" value="alias@correo.xyz"
                                class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-name">Nombre:</label>
                            <input type="text" id="name" name="register-form-name" value="" class="form-control" />
                        </div>

                        <div class="col_full col_last">
                            <label for="register-form-email">Primer Apellido:</label>
                            <input type="text" id="register-form-email" name="apellido_paterno" value=""
                                class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-username">Segundo Apellido:</label>
                            <input type="text" id="register-form-username" name="apellido_materno" value=""
                                class="form-control" />
                        </div>

                        <div class="col_full col_last">
                            <label for="register-form-phone">Contraseña:</label>
                            <input type="text" id="register-form-phone" name="password" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-password">Repetir Contraseña:</label>
                            <input type="password" id="register-form-password" name="register-form-password" value=""
                                class="form-control" />
                        </div>

                        <div class="col_full col_last">
                            <label for="register-form-repassword">RFC:</label>
                            <input type="password" id="register-form-repassword" name="rfc" value=""
                                class="form-control" />
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

@endsection