@extends('layouts.app')

@section('content')
<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 800px;">

    <div class="tab-container">

        <div class="tab-content clearfix" id="tab-login">
            <div class="card nobottommargin">
                <div class="card-body" style="padding: 40px;">
                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                        <h3>Login</h3>

                        <div class="col_full">
                            <label for="login-form-username">Usuario:</label>
                            <input type="text" id="login-form-username" name="login-form-username" value=""
                                class="form-control" />
                        </div>

                        <div class="col_full col_last">
                            <label for="login-form-password">Contraseña:</label>
                            <input type="password" id="login-form-password" name="login-form-password" value=""
                                class="form-control" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d button-black nomargin" id="login-form-submit"
                                name="login-form-submit" value="login">Login</button>
                            <a href="#" class="fright">Olvidé mi contraseña</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>



    </div>

</div>
@endsection