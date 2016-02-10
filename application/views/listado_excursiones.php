<style type="text/css">
p.icono {
	display: inline;
}
</style>


<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administracion de excursiones</h1>
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
									<th>Acciones</th>


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
											title="Detalle">
											<button class="open-Modal btn btn-info btn-xs"
												data-title="Delete" data-toggle="modal"
												onClick="detalle('<?=$u->idexcursion?>','<?=$u->nombre?>','<?=$u->codigo?>','<?=$u->precioxpersona?>', 
												                  '<?=$u->duracion?>', '<?=$u->descripcion?>')">
												<span class="glyphicon glyphicon-info-sign" class="eliminar"></span>
											</button>
										</p>

										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Editar">
											<button class="btn btn-warning btn-xs" data-title="Edit"
												data-toggle="modal"
												onClick="editar('<?=$u->idexcursion?>','<?=$u->nombre?>','<?=$u->codigo?>','<?=$u->precioxpersona?>', 
												                  '<?=$u->duracion?>', '<?=$u->descripcion?>')">
												<span class="glyphicon glyphicon-pencil"></span>
											</button>
										</p>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Eliminar">
											<button class="open-Modal btn btn-danger btn-xs"
												data-title="Delete" data-toggle="modal"
												onClick="eliminar(<?=$u->idexcursion?>)">
												<span class="glyphicon glyphicon-trash" class="eliminar"></span>
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
									<th>Acciones</th>
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
					ACTION="<?php echo base_url(); ?>index.php/excursiones/update"
					METHOD="POST">
					<fieldset>

						<!-- Form Name -->
						<legend></legend>

						<input type="hidden" name="idexcursion" id="idexcursion">

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="codigo">Codigo</label>
							<div class="col-md-3">
								<input id="codigo" name="codigo" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-3 control-label" for="nombre">Nombre</label>
							<div class="col-md-7">
								<input id="nombre" name="nombre" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

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
								<button id="guardar" name="guardar" class="btn btn-warning">Editar</button>

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

<!-- MODAL DE ELIMINAR -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog"
	aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				<h4 class="modal-title custom_align" id="Heading">Eliminar Excursion</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					<span class="glyphicon glyphicon-warning-sign"></span> Seguro que
					desea eliminar?
				</div>
			</div>



			<div class="modal-footer ">
            <?php  ?>
               <a href="#" class="btn btn-success" role="button"
					id="linkdelete"><span class="glyphicon glyphicon-ok-sign"></span>
					Si</a>
				<!--//puse un enlase xq con el button no encontre la forma de redireccionar al controlador -->
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> No
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<script type="text/javascript">
function eliminar(par)
   {

     $('#delete').modal()
     document.getElementById('linkdelete').href = " bajadb/"+par;   //cambio el id del boton segun cual sea seleccionado
   }
 function detalle(parid, nombre, codigo, precio, duracion, descripcion){
   $('#edit').modal()
   //detalle
    document.getElementById('codigo').value = codigo;
    document.getElementById('duracion').value = duracion;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
    document.getElementById('codigo').disabled= true; 
    document.getElementById('duracion').disabled= true;
    document.getElementById('descripcion').disabled= true;
    document.getElementById('nombre').disabled= true;
    document.getElementById('precio').disabled= true; 
    document.getElementById('divduracion').style.display = 'none'; 
    document.getElementById('titulo').style.display = 'none'; 
    document.getElementById('divbotones').style.display = 'none'; 
    document.getElementById('oculto').style.display = 'block'; //muestro el titulo del modal
     document.getElementById('idduracion').style.display = 'block';
 
    } 

function editar(parid, nombre, codigo, precio, duracion, descripcion){
     $('#edit').modal()
   //edit

   
    document.getElementById('idexcursion').value = parid;
    document.getElementById('codigo').value = codigo;
    document.getElementById('duracion').value = duracion;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
    document.getElementById('codigo').disabled= false; 
    document.getElementById('duracion').disabled= false;
    document.getElementById('descripcion').disabled= false;
    document.getElementById('nombre').disabled= false;
    document.getElementById('precio').disabled= false; 
    document.getElementById('divduracion').style.display = 'block'; 
    document.getElementById('titulo').style.display = 'block';
    document.getElementById('divbotones').style.display = 'block';  
    document.getElementById('oculto').style.display = 'none'; //muestro el titulo del modal
    document.getElementById('idduracion').style.display = 'none';
   
    
   
    }



</script>