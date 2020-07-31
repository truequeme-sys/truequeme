@extends('layouts.app')

@section('content')
<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>
						<div class="row">
							<div class="col-lg-12" style="align-content: center">
								<div class="row">
									<div class="col-md-3 form-group">
										<h4>Mis trueques</h4>
									</div>	
									<div class="col-md-6 form-group">

									</div>
									<div class="col-md-3 form-group" style="align-content: : right">
										<a href="#" data-toggle="modal" data-target="#modal-trueque" class="button" style="width: 140px; background-color: green;">+ Trueque</a>
									</div>								
								</div>							
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12" style="align-content: center">
								<table class="table table-responsive table-hover">
								    <thead>
								        <tr>
								            <th>Título</th>
								            <th>Categoría</th>
								            <th>Ofrezco/Necesito</th>
								            <th>Expira</th>
								            <th>Acción</th>
								        </tr>
								    </thead>
								    <tbody>
								        <tr>
								            <td>Título del trueque número 1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								            <td>Categoría del 1er trueque</td>
								            <td>Ofrezco</td>
								            <td>Viernes, 27 de Octubre de 2020</td>
								            <td>								
								            	<a href="#" data-toggle="modal" data-target="#modal-trueque-edit" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
													<i class="icon-line2-pencil"></i>
													<i class="icon-line2-pencil"></i>
												</a>
												<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
													<i class="icon-line2-trash"></i>
													<i class="icon-line2-trash"></i>
												</a>
											</td>								            
								        </tr>
								        <tr>
								            <td>Título del trueque número 2</td>
								            <td>Categoría del 2do trueque</td>
								            <td>Necesito</td>
								            <td>Lunes, 7 de Noviembre de 2020</td>
								            <td>								
								            	<a href="#" data-toggle="modal" data-target="#modal-trueque-edit" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
													<i class="icon-line2-pencil"></i>
													<i class="icon-line2-pencil"></i>
												</a>
												<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
													<i class="icon-line2-trash"></i>
													<i class="icon-line2-trash"></i>
												</a>
											</td>									            
								        </tr>
								        <tr>
								            <td>Título del trueque número 3</td>
								            <td>Categoría del 3er trueque</td>
								            <td>Necesito</td>
								            <td>Jueves, 10 de Diciembrebre de 2020</td>
								            <td>								
								            	<a href="#" data-toggle="modal" data-target="#modal-trueque-edit" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user">
													<i class="icon-line2-pencil"></i>
													<i class="icon-line2-pencil"></i>
												</a>
												<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list">
													<i class="icon-line2-trash"></i>
													<i class="icon-line2-trash"></i>
												</a>
											</td>								            
								        </tr>
								    </tbody>
								</table>						
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12" style="text-align: center;">
															
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

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Derechos Reservados &copy; 2020 Todos los Derechos Reservados Truequeme.<br>
						<div class="copyright-links"><a href="#">Términos de uso</a> / <a href="#">Política de Privacidad</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/Truequeme/" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@trueqeme.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +52-1-5555-5555 <span class="middot">&middot;</span> 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Modal Window
	============================================= -->

	<div role="dialog" tabindex="-1" class="modal fade" id="modal-trueque"
	style="max-width:600px;margin-right:auto;margin-left:auto;">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header"> <!-- CABECERA -->
	       <h4 class="text-center modal-title">Trueque Nuevo</h4>
	       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	       </div>
	       <div class="modal-body"> <!-- CUERPO DEL MENSAJE -->
		       	<div class="col-md-12 form-group">
		       		<label>Tipo</label>
		       		<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
		       			<label class="btn btn-outline-secondary ls0 nott">
		       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Si"> Ofrezco
		       			</label>
		       			<label class="btn btn-outline-secondary ls0 nott">
		       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="No"> Necesito
		       			</label>
		       		</div>
		       	</div>	       	
		       	<div class="col-md-12 form-group">
		       		<label>Título:</label>
		       		<input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="" placeholder="Nombre del servicio o producto">
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Validez:</label>
		       		<input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="" placeholder="Fecha">
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Categoría:</label>
		       		<select class="select-1 form-control" style="width:100%;">
									<optgroup label="Categoría 1">
										<option value="">Categoría 1 - 1</option>
										<option value="">Categoría 1 - 2</option>
									</optgroup>
									<optgroup label="Categoría 2">
										<option value="">Categoría 2 - 1</option>
										<option value="">Categoría 2 - 2</option>
									</optgroup>
									<optgroup label="Categoría 3">
										<option value="">Categoría 3 - 1</option>
										<option value="">Categoría 3 - 2</option>
									</optgroup>
								</select>
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Comentarios:</label>
		       		<textarea name="textarea" rows="10" cols="50" class="form-control">Comentarios que ayuden a des cribir con más detalle tu trueque</textarea>
		       	</div>	       	
	       </div>
	       <div class="modal-footer"> <!-- PIE -->
	       <button class="btn btn-default btn btn-primary btn-lg" type="button" data-dismiss="modal">Guardar</button>
	       </div>
	     </div>
	   </div>
	</div>

	<div role="dialog" tabindex="-1" class="modal fade" id="modal-trueque-edit"
	style="max-width:600px;margin-right:auto;margin-left:auto;">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header"> <!-- CABECERA -->
	       <h4 class="text-center modal-title">Editar trueque</h4>
	       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	       </div>
	       <div class="modal-body"> <!-- CUERPO DEL MENSAJE -->
		       	<div class="col-md-12 form-group">
		       		<label>Tipo</label>
		       		<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
		       			<label class="btn btn-outline-secondary ls0 nott">
		       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Si"> Ofrezco
		       			</label>
		       			<label class="btn btn-outline-secondary ls0 nott">
		       				<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="No"> Necesito
		       			</label>
		       		</div>
		       	</div>	       	
		       	<div class="col-md-12 form-group">
		       		<label>Título:</label>
		       		<input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="" placeholder="Nombre del servicio o producto">
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Validez:</label>
		       		<input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="" placeholder="Fecha">
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Categoría:</label>
		       		<select class="select-1 form-control" style="width:100%;">
									<optgroup label="Categoría 1">
										<option value="">Categoría 1 - 1</option>
										<option value="">Categoría 1 - 2</option>
									</optgroup>
									<optgroup label="Categoría 2">
										<option value="">Categoría 2 - 1</option>
										<option value="">Categoría 2 - 2</option>
									</optgroup>
									<optgroup label="Categoría 3">
										<option value="">Categoría 3 - 1</option>
										<option value="">Categoría 3 - 2</option>
									</optgroup>
								</select>
		       	</div>
		       	<div class="col-md-12 form-group">
		       		<label>Comentarios:</label>
		       		<textarea name="textarea" rows="10" cols="50" class="form-control">Comentarios que ayuden a des cribir con más detalle tu trueque</textarea>
		       	</div>	       	
	       </div>
	       <div class="modal-footer"> <!-- PIE -->
	       <button class="btn btn-default btn btn-primary btn-lg" type="button" data-dismiss="modal">Guardar</button>
	       </div>
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