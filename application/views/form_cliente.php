
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	

	
	
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">General Elements</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Alta de Cliente</h3> 
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal"
						ACTION="<?php echo base_url(); ?>index.php/Abmclientes/altaDb"
						METHOD="POST">
						<fieldset>

							<!-- Form Name -->
							<legend></legend>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="nombre">Nombre</label>
								<div class="col-md-5">
									<input id="nombre" name="nombre" placeholder=""
										class="form-control input-md" required="" type="text">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="apellido">Apellido</label>
								<div class="col-md-5">
									<input id="apellido" name="apellido" placeholder=""
										class="form-control input-md" required="" type="text">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="fechaNacimiento">Fecha
									de nacimiento</label>
								<div class="col-md-5">
									<input 
										placeholder="AAAA-MM-DD" class="form-control input-md"
										required="" type="text"
										type="text" name="fecha1" id="fecha1">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="direccion">Direccion</label>
								<div class="col-md-5">
									<input id="direccion" name="direccion" placeholder=""
										class="form-control input-md" required="" type="text">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="telefono">Telefono</label>
								<div class="col-md-5">
									<input id="telefono" name="telefono" placeholder=""
										class="form-control input-md" required="" type="text">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="direccionAlojamiento">Direccion
									de alojamiento</label>
								<div class="col-md-5">
									<input id="direccionAlojamiento" name="direccionAlojamiento"
										placeholder="" class="form-control input-md" required=""
										type="text">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="email">Email‎</label>
								<div class="col-md-5">

									<input id="email" name="email" placeholder=""
										class="form-control input-md" required="" type="email">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="celular">Celular</label>
								<div class="col-md-5">
									<input id="celular" name="celular" placeholder=""
										class="form-control input-md" required="" type="tel">

								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
								<label class="col-md-5 control-label" for="alta"></label>
								<div class="col-md-2">
									<button id="alta" name="alta" class="btn btn-success">Agregar</button>
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


