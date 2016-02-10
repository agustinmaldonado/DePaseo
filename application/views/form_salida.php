<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administrar Perfil</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Administracion de Saldias</a></li>
			<li class="active">Alta de salidas</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">

			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">Alta de Salida</h3>
					</div>
					<div class="box-body">
						<form class="form-horizontal"
							ACTION="<?php echo base_url(); ?>index.php/Abmsalidas/altaDb"
							METHOD="POST">
							<fieldset>

								<!-- Form Name -->
								<legend></legend>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="nombre">Nombre</label>
									<div class="col-md-4">
										<input placeholder="" class="form-control input-md"
											required="" type="text" value="<?php echo $nombre; ?>"
											disabled=true>

									</div>
								</div>
								<input type="hidden" name="idexcursion" id="idexcursion"
									value="<?php echo $idexcursion; ?>"> <input type="hidden"
									name="nombre" id="nombre" value="<?php echo $nombre; ?>">

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="codigo">Codigo</label>
									<div class="col-md-4">
										<input placeholder="" class="form-control input-md"
											required="" type="text" value="<?php echo $codigo; ?>"
											disabled=true>

									</div>
								</div>
								<input type="hidden" name="codigo" id="codigo"
									value="<?php echo $codigo; ?>">

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="fecha">Fecha</label>
									<div class="col-md-4">
										<input id="fecha" name="fecha" placeholder="AAAA-MM-DD"
											class="form-control input-md" required="" type="text"
											pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"
											title="Ingrese la fecha con el formato AAAA-MM-DD">

									</div>
								</div>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="codigo">Ingrese ID
										vehiculo</label>
									<div class="col-md-2">
										<input placeholder="" name="idvehiculo"
											class="form-control input-md" required="" type="text">

									</div>
								</div>



								<!-- Button -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="alta"></label>
									<div class="col-md-4">
										<button id="alta" name="alta" class="btn btn-success">Generar</button>
									</div>
								</div>

							</fieldset>
						</form>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<!--/.col (left) -->

		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->



