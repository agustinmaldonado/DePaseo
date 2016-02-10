<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administracion de Vehiculos</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/Abmvehiculos "><i
					class="fa fa-dashboard"></i> Home</a></li>

			<li class="active">Alta de Vehiculo</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">

			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Alta de Vehiculos</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->


					<form class="form-horizontal"
						ACTION="<?php echo base_url(); ?>index.php/Abmvehiculos/altaDb"
						METHOD="POST">
						<fieldset>

							<!-- Form Name -->
							<legend></legend>

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
								<label class="col-md-4 control-label" for="dominio">Dominio</label>
								<div class="col-md-5">
									<input id="dominio" name="dominio" placeholder=""
										class="form-control input-md" required="" type="text">

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

							<!-- Select Basic -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="capacidad">Capacidad</label>
								<div class="col-md-2">
									<select id="capacidad" name="capacidad" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
									</select>
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
								<label class="col-md-5 control-label" for="singlebutton"></label>
								<div class="col-md-2">
									<button type="submit" id="singlebutton" name="singlebutton"
										class="btn btn-success" value="realizar_alta">Agregar</button>
								</div>
							</div>

						</fieldset>
					</form>
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



