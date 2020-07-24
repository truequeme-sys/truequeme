@extends('layouts.app')

@section('content')

<!-- Content
		============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">
			<div class="row">
				<div class="col-lg-12">
					<form class="row" action="{{route('trueques.index')}}" method="GET" enctype="multipart/form-data">
						<div class="form-process"></div>

						<div class="col-12 form-group">
							<div class="row">
								<div class="col-md-3 form-group">
									<div class="feature-box fbox-center fbox-effect">
										<label>Buscar trueque</label>
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div class="feature-box fbox-center fbox-effect">
										<input type="text" name="busqueda" id="jobs-application-trueque"
											class="form-control required"
											value="{{ request()->input('busqueda', old('busqueda')) }}"
											placeholder="Escribe lo que necesitas buscar">
									</div>
								</div>
								<div class="col-md-3 form-group">
									<div class="feature-box fbox-center fbox-effect">
										<h4 class="panel-title">
											<a data-toggle="collapse" href="#collapse1"
												style="padding-left: 50px;">Filtros +</a>
										</h4>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 form-group">
							<div class="row">


							</div>
						</div>

						<div class="col-12 form-group">
							<div class="row">
								<div class="panel-group" style="width: 100%; height: 100%;">
									<div class="panel panel-default" style="width: 100%; height: 100%;">
										<div class="panel-heading">

										</div>
										<div id="collapse1" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-12 form-group">
													<div class="row">
														<div class="col-md-3 form-group">
															<div class="feature-box fbox-center fbox-effect">

																<label>Giro</label>
																<select class="selectpicker" data-style="btn-primary"
																	data-width="100%" name="giro">
																	<option value="">Seleccionar</option>
																	@foreach ($giros as $giro)
																	<option value="{{$giro->nombre}}"
																		{{ request()->input('giro') == $giro->nombre ? 'selected' : '' }}>
																		{{$giro->nombre}}
																	</option>
																	@endforeach
																</select>
															</div>
														</div>
														<div class="col-md-3 form-group">
															<div class="feature-box fbox-center fbox-effect">

																<label>Servicio</label>
																<select class="selectpicker" data-style="btn-info"
																	data-width="100%" name="servicio">
																	<option value="">Seleccionar</option>
																	@foreach ($servicios as $servicio)
																	<option value="{{$servicio->nombre}}"
																		{{ request()->input('servicio') == $servicio->nombre ? 'selected' : '' }}>
																		{{$servicio->nombre}}
																	</option>
																	@endforeach
																</select>
															</div>
														</div>
														<div class="col-md-3 form-group">
															<div class="feature-box fbox-center fbox-effect">

																<label>Empresa</label>
																<select class="selectpicker" data-style="btn-warning"
																	data-width="100%" name="empresa">
																	<option value="">Seleccionar</option>
																	@foreach ($empresas as $empresa)
																	<option value="{{$empresa->id}}"
																		{{ request()->input('empresa') == $empresa->id ? 'selected' : '' }}>
																		{{$empresa->razon_social}}
																	</option>
																	@endforeach
																</select>
															</div>
														</div>
														<div class="col-md-3 form-group">
															<div class="feature-box fbox-center fbox-effect">

																<label>&nbsp</label>
																<div class="btn-group btn-group-toggle d-flex"
																	data-toggle="buttons">

																	<label class="btn btn-outline-secondary ls0 nott">
																		<input type="radio" name="necesita_u_ofrece"
																			id="jobs-application-gender-male"
																			autocomplete="off" value="Necesita"
																			{{ request()->input('necesita_u_ofrece') == 'Necesita' ? 'checked' : '' }}>
																		Necesita
																	</label>
																	<label class="btn btn-outline-secondary ls0 nott">
																		<input type="radio" name="necesita_u_ofrece"
																			id="jobs-application-gender-female"
																			autocomplete="off" value="Ofrece"
																			{{ request()->input('necesita_u_ofrece') == 'Ofrece' ? 'checked' : '' }}>
																		Ofrece
																	</label>
																</div>
															</div>
														</div>
														<div class="col-md-3 form-group">
															<div class="feature-box fbox-center fbox-effect">

																<label>&nbsp</label>

																<button type="submit" class="btn btn-primary">
																	Buscar
																</button>
															</div>
														</div>
													</div>
												</div>
												<!-- <div class="panel-footer">Panel Footer</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</form>
				</div>
			</div>

			<div class="col_full">
				<div class="fancy-title title-center title-dotted-border topmargin">
					<h3>Trueques</h3>
				</div>

				<div class="fancy-title title-center title-dotted-border topmargin d-flex justify-content-center">
					{{$artefactos->links()}}
				</div>

				<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20"
					data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
					data-items-lg="4">

					@foreach ($artefactos as $artefacto)

					<div class="oc-item">
						<div class="iportfolio">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{asset($artefacto->imagen)}}" alt="Truequeme">
								</a>
								<div class="portfolio-overlay">
									<a href="{{asset($artefacto->imagen)}}" class="left-icon" data-lightbox="image"><i
											class="icon-line-plus"></i></a>
									<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="#">{{$artefacto->titulo}}</a></h3>
								<span><a href="#">{{$artefacto->categoria->nombre}}</a><br><a
										href="#">{{$artefacto->empresa ? $artefacto->empresa->nombre : 'N/E'}}</a></span><br>
								<a href="#"
									class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#"
									class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#"
									class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
							</div>
						</div>
					</div>

					@endforeach

					{{-- {{ $artefactos->links() }} --}}


				</div>

				<div class="clear"></div>

				<div class="fancy-title title-center title-dotted-border topmargin">
					<h3>Empresas / Usuarios</h3>
				</div>

				<div class="fancy-title title-center title-dotted-border topmargin d-flex justify-content-center">
					{{$users->links()}}
				</div>


				<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20"
					data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
					data-items-lg="4">



					@foreach ($users as $user)
					<div class="oc-item">
						<div class="iportfolio">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{asset($user->foto)}}" alt="Truequeme">
								</a>
								<div class="portfolio-overlay">
									<a href="{{asset($user->foto)}}" class="left-icon"
										data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>
									<i class="fas fa-building"></i>
									<a href="#">
										{{$user->nombre_completo}}
									</a>
								</h3>
								<span><a href="#">
										Truequeme 1</a>, <a href="#">Iconos</a></span>
							</div>
						</div>
					</div>

					@foreach ($user->empresas as $empresa)
					<div class="oc-item">
						<div class="iportfolio">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{asset($empresa->foto)}}" alt="Truequeme">
								</a>
								<div class="portfolio-overlay">
									<a href="{{asset($empresa->foto)}}" class="left-icon"
										data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="#">{{$empresa->razon_social}}</a></h3>
								<span><a href="#">{{$empresa->rfc}}</a>, <a href="#">Iconos</a></span>
							</div>
						</div>
					</div>
					@endforeach

					@endforeach


				</div>

			</div>

			<div class="clear"></div>

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