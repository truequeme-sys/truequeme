@extends('layouts.app')

@section('content')


<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 800px;">

                <div class="tab-container">

                    <div class="tab-content clearfix" id="tab-login">
                        <div class="card nobottommargin">
                            <div class="card-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="nobottommargin"
                                    action="{{ route('login') }}" method="post">
                                    @csrf

                                    <h3>Login</h3>

                                    <div class="col_full">
                                        <label for="login-form-username">Usuario:</label>
                                        <input type="text" id="login-form-username" name="email" value=""
                                            class="form-control" />
                                    </div>

                                    <div class="col_full col_last">
                                        <label for="login-form-password">Contraseña:</label>
                                        <input type="password" id="login-form-password" name="password" value=""
                                            class="form-control" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit"
                                            name="login-form-submit" value="login">Login</button>
                                        <a href="{{ route('password.request') }}" class="fright">Olvidé mi
                                            contraseña</a>
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