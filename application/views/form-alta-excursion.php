
<!-- estas secciones tienen que esta o se desarma el documento -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Administracion de excursiones</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">

		<!-- left column -->
		<div class="col-md-6">
			<!-- Horizontal Form -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Alta de Excursion</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form class="form-horizontal"
					ACTION="<?php echo base_url(); ?>index.php/excursiones/altaDb"
					METHOD="POST">
					<fieldset>

						<!-- Form Name -->
						<legend></legend>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="codigo">Codigo</label>
							<div class="col-md-3">
								<input id="codigo" name="codigo" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="nombre">Nombre</label>
							<div class="col-md-7">
								<input id="nombre" name="nombre" placeholder=""
									class="form-control input-md" required="" type="text">

							</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="duracion">Duracion</label>
							<div class="col-md-4">
								<select id="duracion" name="duracion" class="form-control">
									<option value="Medio dia">Medio dia</option>
									<option value="Dia completo">Dia completo</option>
								</select>
							</div>
						</div>

						<!-- Appended Input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="precio">Precio por
								Persona</label>
							<div class="col-md-4">
								<div class="input-group">
									<input id="precio" name="precio" class="form-control"
										placeholder="" required="" type="text"> <span
										class="input-group-addon">$</span>
								</div>

							</div>
						</div>
						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="descrepcion">Descripcion</label>
							<div class="col-md-7">
								<textarea class="form-control" id="descrepcion"
									name="descrepcion"></textarea>
							</div>
						</div>

						<!-- Button (Double) -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="guardar"></label>
							<div class="col-md-2">
								<button id="guardar" name="guardar" class="btn btn-success">Guardar</button>

							</div>
						</div>





					</fieldset>
				</form>

			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->


	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


