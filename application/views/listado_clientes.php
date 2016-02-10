<style type="text/css">
p.icono {
	display: inline;
}
</style>


<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administracion de clientes</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
			<li  class="active">Listado de Clientes</li>
			
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Listado de clientes</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Email</th>
									<th>Celular</th>
									<th>Acciones</th>

								</tr>
							</thead>
							<tbody>
					               <?php foreach ($clientes as $u):?>
                              <tr>
									<td><?=$u->idcliente?></td>
									<td><?=$u->nombre?></td>
									<td><?=$u->apellido?></td>
									<td><?=$u->email?></td>
									<td><?=$u->celular?></td>
									<td>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Detalle">
											<button class="open-Modal btn btn-success btn-xs"
												data-title="Delete" data-toggle="modal"
												id="<?=$u->idcliente?>"
												onClick="detalle('<?=$u->idcliente?>', '<?=$u->nombre?>', '<?=$u->apellido?>', 
												  '<?=$u->celular?>','<?=$u->email?>', '<?=$u->fechanac?>',  '<?=$u->direccion?>','<?=$u->direccionalojam?>','<?=$u->telefono?>')">
												<span class="glyphicon glyphicon-search" class="eliminar"></span>
											</button>
										</p>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Editar">
											<button class="btn btn-info btn-xs" data-title="Edit"
												data-toggle="modal" id="<?=$u->idcliente?>"
												onClick="editar('<?=$u->idcliente?>', '<?=$u->nombre?>', '<?=$u->apellido?>', 
												  '<?=$u->celular?>','<?=$u->email?>', '<?=$u->fechanac?>',  '<?=$u->direccion?>','<?=$u->direccionalojam?>','<?=$u->telefono?>')">
												<span class="glyphicon glyphicon-pencil"></span>
											</button>
										</p>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Eliminar">
											<button class="open-Modal btn btn-danger btn-xs"
												data-title="Delete" data-toggle="modal"
												data-id="<?=$u->idcliente?>" id="<?=$u->idcliente?>"
												onClick="eliminar(<?=$u->idcliente?>)">
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
									<th>Apellido</th>
									<th>Email</th>
									<th>Celular</th>
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
				<div id="titulo" class="alert alert-info">
					<h4 class="modal-title custom_align">Editar Cliente</h4>
				</div>



				<div id='oculto' style='display: none;' class="alert alert-success">
					<h4 class="modal-title custom_align" id="titulo">Detalle del
						Cliente</h4>
				</div>
				<!-- form -->
				<form class="form-horizontal"
					ACTION="<?php echo base_url(); ?>index.php/clientes/update"
					METHOD="POST">
					<fieldset>

						<!-- Form Name -->
						<legend></legend>

						<input type="hidden" name="idcliente" id="idcliente">

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre">Nombre</label>
							<div class="col-md-5">
								<input id="nombremodal" name="nombremodal" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="apellido">Apellido</label>
							<div class="col-md-5">
								<input id="apellidomodal" name="apellidomodal" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="fechaNacimiento">Fecha
								de nacimiento</label>
							<div class="col-md-5">
								<input id="fechaNacimientomodal" name="fechaNacimientomodal"
									placeholder="AAAA-MM-DD" class="form-control input-md"
									required="" type="text"
									pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"
									title="Ingrese la fecha con el formato AAAA-MM-DD">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="direccion">Direccion</label>
							<div class="col-md-5">
								<input id="direccionmodal" name="direccionmodal" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="telefono">Telefono</label>
							<div class="col-md-5">
								<input id="telefonomodal" name="telefonomodal" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="direccionAlojamiento">Direccion
								de alojamiento</label>
							<div class="col-md-5">
								<input id="direccionAlojamientomodal"
									name="direccionAlojamientomodal" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="email">Email‎</label>
							<div class="col-md-5">

								<input id="emailmodal" name="emailmodal" placeholder=""
									class="form-control input-md" required="" type="email">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="celular">Celular</label>
							<div class="col-md-5">
								<input id="celularmodal" name="celularmodal" placeholder=""
									class="form-control input-md" required="" type="tel">

							</div>
						</div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-md-5 control-label" for="alta"></label>
							<div class="col-md-2">
								<button id="alta" name="alta" class="btn btn-info">Editar</button>
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
				<h4 class="modal-title custom_align" id="Heading">Eliminar Cliente</h4>
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
function editar(parid, nomb, apellido, celular, email, fechanac, direccion, direccionaloj, telefono){

   $('#edit').modal()
   //edit
   document.getElementById('idcliente').value = parid; 
   document.getElementById('nombremodal').value = nomb; 
   document.getElementById('apellidomodal').value = apellido; 
   document.getElementById('fechaNacimientomodal').value = fechanac; 
   document.getElementById('direccionmodal').value = direccion; 
   document.getElementById('telefonomodal').value = telefono; 
   document.getElementById('direccionAlojamientomodal').value = direccionaloj; 
   document.getElementById('emailmodal').value = email; 
   document.getElementById('celularmodal').value = celular;
   document.getElementById('titulo').style.display = 'block';
   document.getElementById('alta').style.display = 'block';
   document.getElementById('oculto').style.display = 'none';
   document.getElementById('nombremodal').disabled= false; 
   document.getElementById('apellidomodal').disabled= false;
   document.getElementById('fechaNacimientomodal').disabled= false;
   document.getElementById('direccionmodal').disabled= false;
   document.getElementById('telefonomodal').disabled= false;
   document.getElementById('direccionAlojamientomodal').disabled= false;
   document.getElementById('emailmodal').disabled= false;
   document.getElementById('celularmodal').disabled= false;

    }

   function detalle(parid, nomb, apellido, celular, email, fechanac, direccion, direccionaloj, telefono){

   $('#edit').modal()
   //detalle
   document.getElementById('nombremodal').value = nomb; 
   document.getElementById('apellidomodal').value = apellido; 
   document.getElementById('fechaNacimientomodal').value = fechanac; 
   document.getElementById('direccionmodal').value = direccion; 
   document.getElementById('telefonomodal').value = telefono; 
   document.getElementById('direccionAlojamientomodal').value = direccionaloj; 
   document.getElementById('emailmodal').value = email; 
   document.getElementById('celularmodal').value = celular; 
   document.getElementById('titulo').style.display = 'none';
   document.getElementById('alta').style.display = 'none';
   document.getElementById('oculto').style.display = 'block';
   //pongo los campos en disabled
   document.getElementById('nombremodal').disabled= true; 
   document.getElementById('apellidomodal').disabled= true;
   document.getElementById('fechaNacimientomodal').disabled= true;
   document.getElementById('direccionmodal').disabled= true;
   document.getElementById('telefonomodal').disabled= true;
   document.getElementById('direccionAlojamientomodal').disabled= true;
   document.getElementById('emailmodal').disabled= true;
  document.getElementById('celularmodal').disabled= true;
  } 

   function eliminar(par)
   {

     $('#delete').modal()
     document.getElementById('linkdelete').href = " bajadb/"+par;   //cambio el id del boton segun cual sea seleccionado
   }
</script>
