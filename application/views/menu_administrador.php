<aside class="main-sidebar">

	<!--barra lateral: el estilo se puede encontrar en sidebar.less  -->

	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>resource/dist/img/avatar5.png"
					class="img-circle" alt="User Image">

			</div>
			<div class="pull-left info"> 
              <?php $usuario= $this->session->userdata('nombre')?>  <!--ACA MUESTRA EL NOMBRE DEL USUARIO EN SESION -->
				<p><?php echo $usuario ?></p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>


		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">ADMINISTRACION</li>
			<!-- Optionally, you can add icons to the links -->



			<li class="treeview"><a href="#"><i class="fa fa-users fa-fw"></i> <span>Administrar
						clientes</span><i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmclientes/altaViews">Alta</a></li>
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmclientes/bajaViews">Baja
							- Modificacion</a></li>

				</ul></li>


			<li class="treeview"><a href="#"><i
					class="glyphicon glyphicon-th-large"></i> <span>Administrar
						Excursiones</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmexcursiones/altaViews">Alta</a></li>
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmexcursiones/bajaViews">Baja</a></li>

				</ul></li>
			<li class="treeview"><a href="#"><i class="glyphicon glyphicon-bed"></i>
					<span>Vehiculos</span><i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmvehiculos/altaViews"><i
							class="glyphicon glyphicon-plus-sign"></i>Alta</a></li>
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmvehiculos/bajaViews"><i
							class="glyphicon glyphicon-minus-sign"></i><i
							class="glyphicon glyphicon-edit"></i>Baja - Modificacion</a></li>

				</ul></li>
			<li class="treeview"><a href="#"><i
					class="glyphicon glyphicon-arrow-right"></i> <span>Salidas</span><i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmsalidas/generarsalida"><i
							class="glyphicon glyphicon-plus-sign"></i>Generar Salidas</a></li>
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmsalidas/bajaviews"><i
							class="glyphicon glyphicon-minus-sign"></i><i
							class="glyphicon glyphicon-edit"></i>Baja - Modificacion</a></li>

				</ul></li>








		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>