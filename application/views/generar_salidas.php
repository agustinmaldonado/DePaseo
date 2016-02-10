<style type="text/css">
p.icono {
	display: inline;
}
</style>


<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Generar salidas de una excursion</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Listado de excursiones</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Codigo</th>
									<th>Precio por persona</th>
									<th>Generar salida</th>


								</tr>
							</thead>
							<tbody>
					               <?php foreach ($excursiones as $u):?>
                              <tr>
									<td><?=$u->idexcursion?></td>
									<td><?=$u->nombre?></td>
									<td><?=$u->codigo?></td>
									<td><?=$u->precioxpersona?></td>

									<td>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Salida">
											<button class="open-Modal btn btn-info btn-xs"
												data-title="Delete" data-toggle="modal"
												onClick="detalle('<?=$u->idexcursion?>','<?=$u->nombre?>','<?=$u->codigo?>','<?=$u->precioxpersona?>', 
												                  '<?=$u->duracion?>', '<?=$u->descripcion?>')">
												<span class="glyphicon glyphicon-arrow-right"
													class="eliminar"></span>
											</button>
										</p>




									</td>
								</tr>
                              <?php endforeach;?>
				                   </tbody>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Codigo</th>
									<th>Precio por persona</th>
									<th>Generar salida</th>
								</tr>
							</tfoot>
						</table>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL DE EDITAR -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog"
	aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>





			</div>


			<div class="modal-body">
				<div id="titulo" class="alert alert-warning">
					<h4 class="modal-title custom_align">Editar Excursion</h4>

				</div>
				<div id='oculto' style='display: none;' class="alert alert-info">
					<h4 class="modal-title custom_align" id="titulo">Detalle de la
						excursion</h4>
				</div>
				<!-- form -->
				<form class="form-horizontal"
					ACTION="<?php echo base_url(); ?>index.php/Abmsalidas/altaViews"
					METHOD="POST">
					<fieldset>

						<!-- Form Name -->
						<legend></legend>

						<input type="hidden" name="idexcursion" id="idexcursion">

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="codigo">Codigo</label>
							<div class="col-md-3">
								<input id="codig" placeholder="" class="form-control input-md"
									required="" type="text">

							</div>
						</div>

						<input type="hidden" name="codigo" id="codigo">

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="nombre">Nombre</label>
							<div class="col-md-7">
								<input id="nom" name="nom" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<input type="hidden" name="nombre" id="nombre">

						<!-- Select Basic -->
						<div class="form-group" id="divduracion">
							<label class="col-md-3 control-label" for="duracion"
								id="duracionlabel">Duracion</label>
							<div class="col-md-4">
								<select id="duracionselect" name="duracionselect"
									class="form-control">

									<option value="Medio dia">Medio dia</option>
									<option value="Dia completo">Dia completo</option>
								</select>
							</div>
						</div>

						<div class="form-group" id="idduracion">
							<label class="col-md-3 control-label" for="nombre">Duracion</label>
							<div class="col-md-7">
								<input id="duracion" name="duracion" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>


						<!-- Appended Input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="precio">Precio por
								Persona</label>
							<div class="col-md-3">
								<div class="input-group">
									<input id="precio" name="precio" class="form-control"
										placeholder="" required="" type="text"> <span
										class="input-group-addon">$</span>
								</div>

							</div>
						</div>
						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-3 control-label" for="descripcion">Descripcion</label>
							<div class="col-md-8">
								<textarea class="form-control" id="descripcion"
									name="descripcion"></textarea>
							</div>
						</div>

						<!-- Button (Double) -->
						<div class="form-group" id="divbotones">
							<label class="col-md-4 control-label" for="guardar"></label>
							<div class="col-md-2">
								<button id="guardar" name="guardar" class="btn btn-info">Generar
									Salida</button>

							</div>
						</div>

					</fieldset>
				</form>


			</div>


		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>




<script type="text/javascript">

 function detalle(parid, nombre, codigo, precio, duracion, descripcion){
   $('#edit').modal()
   //detalle
   document.getElementById('idexcursion').value = parid;
    document.getElementById('codigo').value = codigo;
     document.getElementById('codig').value = codigo;
    document.getElementById('duracion').value = duracion;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
    document.getElementById('nom').value = nombre;
    document.getElementById('codig').disabled= true; 
    document.getElementById('duracion').disabled= true;
    document.getElementById('descripcion').disabled= true;
    document.getElementById('nom').disabled= true;
    document.getElementById('precio').disabled= true; 
    document.getElementById('divduracion').style.display = 'none'; 
    document.getElementById('titulo').style.display = 'none'; 
     
    document.getElementById('oculto').style.display = 'block'; //muestro el titulo del modal
     document.getElementById('idduracion').style.display = 'block';
 
    } 





</script>