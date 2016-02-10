<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Page Header <small>Optional description</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<form name="tabla" action="" method="POST">
			<table border="solid">
				<thead>
					<tr>
						<th></th>

						<th>idvehiculo</th>
						<th>marca</th>
						<th>modelo</th>
						<th>patente</th>
						<th>plazas</th>
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
					</tr>
 
 <?php endforeach;?>
 </tbody>
			</table>
			<input type="submit" value="Editar" />
		</form>



	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->








