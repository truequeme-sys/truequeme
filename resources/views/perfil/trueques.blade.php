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
								    	@foreach ($artefactos as $artefacto)
									        <tr>
									            <td>{{$artefacto->titulo}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
									            <td>{{$artefacto->categoria->nombre}}</td>
									            <td>{{$artefacto->necesita_u_ofrece=="ofrece" ? "Ofrezco" : "Necesito"}}</td>
									            <td>Viernes, 27 de Octubre de 2020</td>
									            <td>								
									            	<a href="#" data-toggle="modal" data-target="#modal-trueque-edit" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-user button_editar" data-value="{{$artefacto->id}}">
														<i class="icon-line2-pencil"></i>
														<i class="icon-line2-pencil"></i>
													</a>
													<a href="#" class="social-icon inline-block si-small si-light si-rounded si-icon-line2-list button_eliminar" data-value="{{$artefacto->id}}">
														<i class="icon-line2-trash"></i>
														<i class="icon-line2-trash"></i>
													</a>
												</td>								            
									        </tr>
									    @endforeach
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

	<!--============================================= Modal Window ============================================= -->
	<!--============================================= Nuevo trueque ============================================= -->
	<div role="dialog" tabindex="-1" class="modal fade" id="modal-trueque"
	style="max-width:600px;margin-right:auto;margin-left:auto;">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header"> <!-- CABECERA -->
	       <h4 class="text-center modal-title">Trueque Nuevo</h4>
	       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	       </div>
	       <form class="row" action="{{route('trueque.new')}}" method="post" enctype="multipart/form-data">
	       	@csrf
		       <div class="modal-body"> <!-- CUERPO DEL MENSAJE -->
		       	<div class="col-md-12 form-group">
			       		<label>Empresa:</label>
			       		<select class="select-1 form-control" style="width:100%;" id="empresa_nuevo" name="empresa_nuevo">
			       			@foreach ($empresas as $empresa)
			       				<option value="{{$empresa->id}}">{{$empresa->razon_social}}</option>
							@endforeach
						</select>
			       	</div>
		       		
			       	<div class="col-md-12 form-group">
			       		<label>Tipo</label>
			       		<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
			       			<label class="btn btn-outline-secondary ls0 nott">
			       				<input type="radio" name="Ofrezco_nuevo" id="Ofrezco_nuevo" autocomplete="off" value="0"> Ofrezco
			       			</label>
			       			<label class="btn btn-outline-secondary ls0 nott">
			       				<input type="radio" name="Necesito_nuevo" id="Necesito_nuevo" autocomplete="off" value="0"> Necesito
			       			</label>
			       		</div>
			       	</div>
			       	<div class="col-md-12 form-group">
	                        <label>Subir imagen:</label>
	                        <input type="file" id="jobs-application-resume" name="foto_nuevo"
	                            class="file-loading " data-show-preview="false" />
	                    </div>	       	
			       	<div class="col-md-12 form-group">
			       		<label>Título:</label>
			       		<input type="text" name="titulo_nuevo" id="jobs-application-name" class="form-control required" value="" placeholder="Nombre del servicio o producto">
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Tipo:</label>
			       		<select class="select-1 form-control" style="width:100%;" id="Tipo_nuevo" name="Tipo_nuevo">
			       			<option value="servicio">Servicio</option>
			       			<option value="producto">Producto</option>
						</select>
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Validez:</label>
			       		<input type="date" name="fecha_nuevo" id="jobs-application-name" class="form-control required" value="" placeholder="Fecha">
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Categoría:</label>
			       		<select class="select-1 form-control" style="width:100%;" name="Categoria_nuevo">
							@foreach ($categorias as $categoria)
			       				<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
							@endforeach
						</select>
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Comentarios:</label>
			       		<textarea name="Comentario_nuevo" rows="10" cols="50" class="form-control">Comentarios que ayuden a des cribir con más detalle tu trueque</textarea>
			       	</div>	       	
		       </div>
		       <div class="modal-footer"> <!-- PIE -->
		       <button class="btn btn-default btn btn-primary btn-lg" type="submit" >Guardar</button>
		       </div>
		    </form>
	     </div>
	   </div>
	</div>
	<!--============================================= Editar trueque ============================================= -->
	<div role="dialog" tabindex="-1" class="modal fade" id="modal-trueque-edit"
	style="max-width:600px;margin-right:auto;margin-left:auto;">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header"> <!-- CABECERA -->
	       <h4 class="text-center modal-title">Editar trueque</h4>
	       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	       </div>
	       <form class="row" action="{{route('trueque.edit')}}" method="post" enctype="multipart/form-data">
	       	@csrf
	       	<input type="hidden" name="id_edit" id="id_edit" />
	       		<div class="modal-body"> <!-- CUERPO DEL MENSAJE -->
	                
		       		
			       	<div class="col-md-12 form-group">
			       		<label>Tipo</label>
			       		<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
			       			<label  id="Ofrezco_editar_label" class="btn btn-outline-secondary ls0 nott">
			       				<input type="radio" name="Ofrezco_editar" id="Ofrezco_editar" autocomplete="off"  value="0"> Ofrezco
			       			</label>
			       			<label id="Necesito_editar_label" class="btn btn-outline-secondary ls0 nott">
			       				<input type="radio" name="Necesito_editar" id="Necesito_editar" autocomplete="off" value="0"> Necesito
			       			</label>
			       		</div>
			       	</div>       	
			       	<div class="col-md-12 form-group">
			       		<label>Tipo:</label>
			       		<select class="select-1 form-control" style="width:100%;" id="Tipo_editar" name="Tipo_editar">
			       			<option value="servicio">Servicio</option>
			       			<option value="producto">Producto</option>
						</select>
			       	</div>

			       	<div class="col-md-12 form-group">
			       		<label>Título:</label>
			       		<input type="text" name="titulo_editar" id="titulo_editar" class="form-control required" value="" placeholder="Nombre del servicio o producto">
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Validez:</label>
						<input class="form-control" type="date" name="fecha_edit" id="fecha_edit" >
			       	</div>

			       	<div class="col-md-12 form-group">
			       		<label>Categoría:</label>
			       		<select class="select-1 form-control" style="width:100%;" id="Categoria_editar" name="Categoria_editar">
			       			@foreach ($categorias as $categoria)
			       				<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
							@endforeach
						</select>
			       	</div>
			       	<div class="col-md-12 form-group">
			       		<label>Comentarios:</label>
			       		<textarea name="Comentario_edit" id="Comentario_edit"  rows="10" cols="50" class="form-control">Comentarios que ayuden a des cribir con más detalle tu trueque</textarea>
			       	</div>	
		       </div>
		       <div class="modal-footer  text-right"> <!-- PIE -->
		       <button class="btn btn-default btn btn-primary btn-lg" type="submit">Guardar</button>
		       </div>
	       </form> 
	     </div>
	   </div>
	</div>




@endsection

@section('scripts')

<script>
	jQuery(document).ready( function(){
		$(".button_editar").click(function() {
			
			$("#id_edit").val($(this).data('value'));
			$.ajax({
				url: "{{route('getArtefacto')}}",
				data : { "_token": "{{CSRF_TOKEN()}}"
						,"id" : $(this).data('value') },
				type : 'POST',
				dataType : 'json',
				success: function(respuesta) {
					if(respuesta.necesita_u_ofrece=="ofrece"){
						$("#Ofrezco_editar_label").addClass("active");
						$("#Necesito_editar_label").removeClass("active");
						$("#Ofrezco_editar").val(1);
						$("#Necesito_editar").val(0);
					}else{
						$("#Necesito_editar_label").addClass("active");
						$("#Ofrezco_editar_label").removeClass("active");
						$("#Ofrezco_editar").val(0);
						$("#Necesito_editar").val(1);
					}
					$("#titulo_editar").val(respuesta.titulo);
					$("#Categoria_editar option[value='"+respuesta.categoria_id+"']").attr("selected",true);
					$("#Comentario_edit").val(respuesta.comentario);
					$("#fecha_edit").val(respuesta.validez.substring(0,10))

				}
			});
		});
		$("#Ofrezco_editar").click(function() {
			$("#Ofrezco_editar").val(1);
			$("#Necesito_editar").val(0);
		});
		$("#Necesito_editar").click(function() {
			$("#Ofrezco_editar").val(0);
			$("#Necesito_editar").val(1);
		});
		$("#Ofrezco_nuevo").click(function() {
			$("#Ofrezco_nuevo").val(1);
			$("#Necesito_nuevo").val(0);
		});
		$("#Necesito_nuevo").click(function() {
			$("#Ofrezco_nuevo").val(0);
			$("#Necesito_nuevo").val(1);
		});
		$(".button_eliminar").click(function() {
			$.ajax({
				url: "{{route('eliminarArtefacto')}}",
				data : { "_token": "{{CSRF_TOKEN()}}"
						,"id" : $(this).data('value') },
				type : 'POST',
				dataType : 'json',
				success: function (respuesta) {
					$(location).attr('href',"{{route('MisTrueques')}}");
				}
			});
		});
		
	})

</script>

@endsection