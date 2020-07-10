@extends('layouts.app')

@section('content')
    
<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
						<div class="row">
							<div class="col-lg-12">
								<form class="row" action="include/form.php" method="post" enctype="multipart/form-data">
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
													<input type="text" name="jobs-application-trueque" id="jobs-application-trueque" class="form-control required" value="" placeholder="Escribe lo que necesitas buscar">
												</div>
											</div>
											<div class="col-md-3 form-group">
												<div class="feature-box fbox-center fbox-effect">
													<h4 class="panel-title">
											        	<a data-toggle="collapse" href="#collapse1" style="padding-left: 50px;">Filtros +</a>
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
																	<select class="selectpicker" data-style="btn-primary" data-width="100%">
																		<option>Mustard</option>
																		<option>Ketchup</option>
																		<option>Relish</option>
																		<option>Onions</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-3 form-group">
																	<div class="feature-box fbox-center fbox-effect">

																	<label>Servicio</label>										
																	<select class="selectpicker" data-style="btn-info" data-width="100%">
																		<option>Mustard</option>
																		<option>Ketchup</option>
																		<option>Relish</option>
																		<option>Onions</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-3 form-group">
																	<div class="feature-box fbox-center fbox-effect">

																	<label>Empresa</label>												
																	<select class="selectpicker" data-style="btn-warning" data-width="100%">
																		<option>Mustard</option>
																		<option>Ketchup</option>
																		<option>Relish</option>
																		<option>Onions</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-3 form-group">	
																	<div class="feature-box fbox-center fbox-effect">

																	<label>&nbsp</label>										
														       		<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
														       			
														       			<label class="btn btn-outline-secondary ls0 nott">
														       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Necesita"> Necesita
														       			</label>
														       			<label class="btn btn-outline-secondary ls0 nott">
														       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Ofrece"> Ofrece
														       			</label>
														       		</div>
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

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{asset('storage/trueques/3.jpg')}}" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 1</a></h3>
									<span><a href="#">Categoría 1</a><br><a href="#">Empresa 1</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{asset('storage/trueques/3.jpg')}}" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 2</a></h3>
									<span><a href="#">Categoría 2</a><br><a href="#">Empresa 2</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{asset('storage/trueques/3.jpg')}}" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 3</a></h3>
									<span><a href="#">Categoría 3</a><br><a href="#">Empresa 3</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{asset('storage/trueques/3.jpg')}}" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 3</a></h3>
									<span><a href="#">Categoría 3</a><br><a href="#">Empresa 4</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/4.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 5</a></h3>
									<span><a href="#">Categoría 5</a><br><a href="#">Empresa 5</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/2.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 6</a></h3>
									<span><a href="#">Categoría 6</a><br><a href="#">Empresa 6</a></span><br>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
									<i class="icon-line2-user"></i>
									<i class="icon-line2-user"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
									<i class="icon-line2-list"></i>
									<i class="icon-line2-list"></i>
								</a>
								<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-speech">
									<i class="icon-line2-speech"></i>
									<i class="icon-line2-speech"></i>
								</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/3.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 7</a></h3>
									<span><a href="#">Categoría 7</a><br><a href="#">Empresa 7</a></span><br>
									<a href="#" data-toggle="modal" data-target="#modal-especialista" class="button" style="width: 130px;">Perfil</a>
									<a href="#" data-toggle="modal" data-target="#modal-certificaciones" class="button" style="width: 130px;">Detalle</a>
									<a href="#" data-toggle="modal" data-target="#modal-servicios" class="button" style="width: 130px;">Contacto</a>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/1.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Título 8</a></h3>
									<span><a href="#">Categoría 8</a><br><a href="#">Empresa 8</a></span><br>
									<a href="#" data-toggle="modal" data-target="#modal-especialista" class="button" style="width: 130px;">Perfil</a>
									<a href="#" data-toggle="modal" data-target="#modal-certificaciones" class="button" style="width: 130px;">Detalle</a>
									<a href="#" data-toggle="modal" data-target="#modal-servicios" class="button" style="width: 130px;">Contacto</a>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>

					<div class="fancy-title title-center title-dotted-border topmargin">
						<h3>Empresas</h3>
					</div>

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/4.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 1 </a></h3>
									<span><a href="#">Truequeme 1</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/2.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 2</a></h3>
									<span><a href="#">Truequeme 2</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/3.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 3</a></h3>
									<span><a href="#">Truequeme 3</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/1.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 4</a></h3>
									<span><a href="#">Truequeme 4</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/4.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 5 </a></h3>
									<span><a href="#">Truequeme 5</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/2.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 6</a></h3>
									<span><a href="#">Truequeme 6</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/3.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 7</a></h3>
									<span><a href="#">Truequeme 7</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/thumbs/1.jpg" alt="Truequeme">
									</a>
									<div class="portfolio-overlay">
										<a href="images/big/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Truequeme 8</a></h3>
									<span><a href="#">Truequeme 8</a>, <a href="#">Iconos</a></span>
								</div>
							</div>
						</div>

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
						<a href="#" class="social-icon si-colored si-large si-rounded si-search" data-animate="bounceInLeft" data-delay="100">
							<i class="icon-search"></i>
							<i class="icon-search"></i>
						</a>
						<a href="#" class="social-icon si-colored si-large si-rounded si-briefcase" data-animate="bounceInLeft" data-delay="200">
							<i class="icon-briefcase"></i>
							<i class="icon-briefcase"></i>
						</a>
						<a href="#" class="social-icon si-colored si-large si-rounded si-user-plus" data-animate="bounceInLeft" data-delay="300">
							<i class="icon-user-plus"></i>
							<i class="icon-user-plus"></i>
						</a>

					</div>

				</div>

			</div>

		</section>

@endsection