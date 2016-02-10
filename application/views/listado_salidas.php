<style type="text/css">
p.icono {
	display: inline;
}
</style>


<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administracion de salidas</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url();?>index.php/homeadmin"><i
					class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">baja de salidas</a></li>

		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Listado de salidas</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Fecha</th>
									<th>Lugares disonibles</th>
									<th>Aciones</th>



								</tr>
							</thead>
							<tbody>
					               <?php foreach ($salidas as $u):?>
                              <tr>
									<td><?=$u->idsalida?></td>
									<td><?=$u->salida?></td>
									<td><?=$u->disponibles?></td>


									<td>



										<p class="icono" data-placement="top" data-toggle="tooltip"
											title="Eliminar">
											<button class="open-Modal btn btn-danger btn-xs"
												data-title="Delete" data-toggle="modal"
												onClick="eliminar(<?=$u->idsalida?>)">
												<span class="glyphicon glyphicon-trash" class="eliminar"></span>
											</button>
										</p>

									</td>
								</tr>
                              <?php endforeach;?>
				                   </tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Fecha</th>
									<th>Lugares disonibles</th>
									<th>Aciones</th>
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
				<h4 class="modal-title custom_align" id="Heading">Eliminar Salida</h4>
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
  





</script>