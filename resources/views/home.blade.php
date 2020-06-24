@extends('layouts.app')

@section('content')


<section id="slider" class="slider-element slider-parallax full-screen light">

    <div class="slider-parallax-inner content-wrap">

        <div class="container-fluid vertical-middle clearfix container clearfix">

            <div class="heading-block title-center nobottomborder">
                <h1>Truequeme</h1>
                <span>Economía Colaborativa basada en la abundancia</span>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-pen" style="color:#00b1e1"></i></a>
                    </div>
                    <h3>Botón 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-search" style="color:#d83ab1"></i></a>
                    </div>
                    <h3>Botón 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-dark fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-briefcase" style="color:#05cc7c"></i></a>
                    </div>
                    <h3>Botón 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-center fbox-light fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-user-plus" style="color:#ffc643"></i></a>
                    </div>
                    <h3>Botón 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <blockquote class="topmargin bottommargin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </blockquote>

            <div class="col_half nobottommargin">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="col_half nobottommargin col_last">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

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



@endsection