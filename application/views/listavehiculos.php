<style type="text/css">
p.icono {
	display: inline;
}
</style>

<?php $ideliminar=0;?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Tables <small>advanced tables</small>
		</h1>
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
						<h3 class="box-title">Listado de Vehiculos</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>id</th>
									<th>marca</th>
									<th>modelo</th>
									<th>patente</th>
									<th>plazas</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
					               <?php foreach ($autos as $u):?>
                              <tr>
									<td><?=$u->idvehiculo?></td>
									<td><?=$u->marca?></td>
									<td><?=$u->modelo?></td>
									<td><?=$u->patente?></td>
									<td><?=$u->plazas?></td>
									<td>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Editar">
											<button class="btn btn-primary btn-xs" data-title="Edit"
												data-toggle="modal" id="<?=$u->idvehiculo?>"
												onClick="editar('<?=$u->idvehiculo?>','<?=$u->marca?>','<?=$u->modelo?>','<?=$u->patente?>','<?=$u->plazas?>')">
												<span class="glyphicon glyphicon-pencil"></span>
											</button>
										</p>
										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Eliminar">
											<button class="open-Modal btn btn-danger btn-xs"
												data-title="Delete" data-toggle="modal"
												data-id="<?=$u->idvehiculo?>" id="<?=$u->idvehiculo?>"
												onClick="eliminar(<?=$u->idvehiculo?>)">
												<span class="glyphicon glyphicon-trash" class="eliminar"></span>
											</button>
										</p>
									</td>
								</tr>
                              <?php endforeach;?>
				                   </tbody>
							<tfoot>
								<tr>
									<th>id</th>
									<th>marca</th>
									<th>modelo</th>
									<th>patente</th>
									<th>plazas</th>
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
				<h4 class="modal-title custom_align" id="Heading">Editar Vehiculo</h4>

			</div>
			<div class="modal-body">
				<form class="form-horizontal"
					ACTION="<?php echo base_url(); ?>index.php/Abmvehiculos/update"
					METHOD="POST">
					<fieldset>

						<!-- Form Name -->
						<legend></legend>

						<input type="hidden" name="idvehiculo" id="idvehiculo">

						<div class="form-group">
							<label class="col-md-4 control-label" for="marca:">Id</label>
							<div class="col-md-2">
								<input id="idve" placeholder="" class="form-control input-md"
									type="text" disabled>

							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="marca:">Marca</label>
							<div class="col-md-5">
								<input id="marca" name="marca" placeholder=""
									class="form-control input-md" required type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="modelo">Modelo</label>
							<div class="col-md-5">
								<input id="modelo" name="modelo" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Dominio-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="dominio">Dominio</label>
							<div class="col-md-5">
								<input id="dominio" name="dominio" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>
						<!-- capacidad -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="modelo">Plazas</label>
							<div class="col-md-2">
								<input id="plazas" name="plazas" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>



						<!-- Button -->
						<div class="form-group">
							<label class="col-md-5 control-label" for="singlebutton"></label>
							<div class="col-md-2">
								<button type="submit" id="singlebutton" name="singlebutton"
									class="btn btn-success" value="realizar_edicion">Editar</button>
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
				<h4 class="modal-title custom_align" id="Heading">Eliminar Vehiculo</h4>
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
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> No
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<!--<script type="text/javascript">
              function reply_click(clicked_id){
                var variablejs = "clicked_id" ;
              }
    </script>

-->
<script type="text/javascript">
   function eliminar(par)
   {

     $('#delete').modal()
     document.getElementById('linkdelete').href = " bajadb/"+par;   //cambio el id del boton segun cual sea seleccionado
   }
</script>


<script type="text/javascript">
function editar(id, marca, modelo, patente, plazas){

   $('#edit').modal()
   document.getElementById('idvehiculo').value = id; 
   document.getElementById('idve').value = id; 
    document.getElementById('marca').value = marca; 
    document.getElementById('modelo').value = modelo;
    document.getElementById('dominio').value = patente; 
    document.getElementById('plazas').value = plazas;
    


}
</script>